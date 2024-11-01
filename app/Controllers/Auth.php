<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\PasswordHash;


class Auth extends License
{
    public function index()
    {
        return redirect()->to("/");
    }


    /*******************
     * ADMIN LOGIN
     ********************/
    public function admin()
    {
        $data = $this->site;
        $hasher = new PasswordHash(8, true);
        if (session()->get("admin")) {
            return redirect()->to("admin");
        } elseif ($this->request->getVar("admin_login")) {
            $Model = new AdminModel();
            $username = $this->request->getVar("username");
            $url = $this->request->getVar("url");
            $password = $this->request->getVar("password");

            $admin = $Model->where("admin_username", $username)->first();
            if ($admin) {
                $pass = $admin["admin_password"];
                if ($hasher->CheckPassword($password, $pass)) {
                    $ses_data = ["admin" => $username];
                    if ($data['login_notify'] == 1) {

                        $ipdat = @json_decode(
                            file_get_contents(
                                "http://ip-api.com/json/" .
                                    $this->request->getIPAddress()
                            )
                        );
                        if (empty($ipdat->country)) {
                            $Country = "Unable to Retrieve Data";
                        } else {
                            $Country = $ipdat->country;
                        }

                        $variables = [];
                        $variables["ip_address"] = $this->request->getIPAddress();
                        $variables["user_full_name"] = 'Admin Account Login';
                        $variables["acc_id"] = $username;
                        $variables["current_date"] = date("jS F\, Y h:i A");
                        $variables["ip_address"] = $this->request->getIPAddress();
                        $variables["login_location"] = $Country;

                        $this->sendmail($variables, 'Login Notification', $data["company_email"], 'No File');

                        session()->set($ses_data);
                        return redirect()->to($url);
                    } else {
                        session()->set($ses_data);
                        return redirect()->to($url);
                    }
                } else {
                    session()->setFlashdata(
                        "msg",
                        "You have entered a wrong Password!"
                    );
                    return redirect()->to("auth/admin");
                }
            } else {
                session()->setFlashdata(
                    "msg",
                    "Invalid Admin Username"
                );
                return redirect()->to("auth/admin");
            }
        } else {
            if ($this->request->getGet("done")) {
                $data['alert'] =
                    '<div class="alert alert-primary has-icon" role="alert">
                    <div class="alert-icon">
                      <span class="oi oi-info"></span>
                    </div>Admin Account Modified successfully and you have been logged out. Login to continue.
               </div>';
            } else {
                $data['alert'] = '';
            }
            if ($this->request->getGet("url")) {
                $data['url'] = $this->request->getGet("url");
            } else {
                $data['url'] = base_url('admin');
            }

            $data["page"] = 'Admin Login';
            return view("admin/auth/header", $data) .
                view("admin/auth/admin", $data) .
                view("admin/auth/footer", $data);
        }
    }

    /*******************
     * USER LOGIN
     ********************/
    public function login()
    {
        $data = $this->site;
        $hasher = new PasswordHash(8, true);
        if (session()->get("user_id")) {
            return redirect()->to("user");
        } elseif ($this->request->getVar("email")) {
            $userModel = new UserModel();
            $email = $this->request->getVar("email");
            $url = $this->request->getVar("url");
            $password = $this->request->getVar("password");

            $userDetails = $userModel->where("account_id", $email)->orwhere("check_acc", $email)->orwhere("savings_acc", $email)->first();
            if ($userDetails) {
                $verified = $userDetails["status"];

                if ($verified === 'Dormant') {
                    session()->setFlashdata(
                        "msg",
                        "Your account is currently not active, please contact support via live chat for account activation."
                    );
                    return redirect()->to("/");
                } else {
                    $pass = $userDetails["password"];

                    if ($hasher->CheckPassword($password, $pass)) {
                        if ($userDetails["status"] !== 'Blocked') {

                            // Generate OTP
                            $otp = rand(100000, 999999);

                            // Save OTP in session
                            session()->set('otp', $otp);
                            session()->set('otp_user_id', $userDetails["id"]);


                            $ipdat = @json_decode(
                                file_get_contents(
                                    "http://ip-api.com/json/" .
                                        $this->request->getIPAddress()
                                )
                            );
                            if (empty($ipdat->country)) {
                                $Country = "Unable to Retrieve Data";
                            } else {
                                $Country = $ipdat->country;
                            }

                            $variables = [];
                            $variables["ip_address"] = $this->request->getIPAddress();
                            $variables["user_full_name"] = $userDetails['name'];
                            $variables["acc_id"] = $userDetails['account_id'];
                            $variables["current_date"] = date("jS F\, Y h:i A");
                            $variables["ip_address"] = $this->request->getIPAddress();
                            $variables["login_location"] = $Country;

                            $this->sendmail($variables, 'Login Notification', $data["company_email"], 'No File');

                            // $subject = "Your OTP Code";
                            // $message = "Your OTP code is: $otp. Please use this code to verify your login.";

                            // $variables = [];
                            // $variables['the_subject'] = $subject;
                            // $variables['the_message'] = $message;

                            // Send OTP to user's email
                           // $this->sendmail($variables, "Email", $userDetails['email'], 'NoFile');

                            // session()->setFlashdata(
                            //     "msg",
                            //     "Eneter the OTP sent to your email."
                            // );
                            // Return to the same page to show the modal
                            // return redirect()->to("otp-verification");

                            // return redirect()->to("verify-otp");

                            $ses_data = [
                                "user_id" => $userDetails["id"],
                            ];
                            session()->set($ses_data);
                            return redirect()->to($url);
                            
                        } else {
                            session()->setFlashdata(
                                "msg",
                                "Your account is suspended. Please contact support"
                            );
                            return redirect()->to("/");
                        }
                    } else {
                        session()->setFlashdata(
                            "msg",
                            "You have entered a wrong Password!"
                        );
                        return redirect()->to("/");
                    }
                }
            } else {
                session()->setFlashdata(
                    "msg",
                    "Account ID or Account Number does not exist"
                );
                return redirect()->to("/");
            }
        } else if ($this->request->getGet("new")) {
            session()->setFlashdata(
                "msg",
                "Password updated successfully. Please login with your new password"
            );
            return redirect()->to("/");
        } else if ($this->request->getGet("unsubscribe")) {
            session()->setFlashdata(
                "msg",
                "You have successfully unsubscribed from receiving email notifications"
            );
            return redirect()->to("/");
        } else {
            return redirect()->to("#");
        }
    }




    public function unsubscribe()
    {
        return redirect()->to("login?unsubscribe=1");
    }


    /***************************************************
     * ADMIN ACCESS USER DASHBOARD
     ***************************************************/
    public function userdashboard()
    {

        if ($this->request->getGet("id")) {
            $sess_data = ["user_id" => $this->request->getGet("id")];
            session()->set($sess_data);
            return redirect()->to('user');
        } else {
            session()->setFlashdata("msg", 'You do not have the credentials to access the page');
            return redirect()->to("admin");
        }
    }


    /***************************************************
     * TRANSACTION HISTORY GENERATOR
     ***************************************************/
    public function generatorLogin()
    {

        if ($this->request->getGet("id")) {
            $sess_data = ["admin" => $this->request->getGet("id")];
            session()->set($sess_data);
            session()->setFlashdata("msg", 'Automatic History Generator completed successfully!');
            return redirect()->to($this->request->getGet("url"));
        } else {
            session()->setFlashdata("msg", 'You do not have the credentials to access the page');
            return redirect()->to("admin");
        }
    }


    /*******************
     * RESET PASSWORD
     ********************/
    public function resetpassword()
    {
        $hasher = new PasswordHash(8, true);
        $length = 12;
        $characters =
            '@#$%0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $password = "";
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, $charactersLength - 1)];
        }

        $data = $this->site;
        $data["page"] = ucfirst("reset password");

        $variables = [];
        $variables["new_password"] = $password;

        if (session()->get("user_id")) {
            return redirect()->to("user");
        } elseif ($this->request->getPost("email")) {
            $Model = new UserModel();
            $email = $this->request->getPost("email");
            $user = $Model->where("account_id", $email)->first();
            if ($user) {
                $name = $user["name"];
                $variables["user_full_name"] = $name;
                $new_password = $hasher->HashPassword($password);

                if (
                    $Model
                    ->where("account_id", $email)
                    ->set("password", $new_password)
                    ->update()
                ) {
                    $this->sendmail($variables, "Reset Password", $user['email'], 'No File');
                    session()->setFlashdata(
                        "msg",
                        "Hello " .
                            $name .
                            ", your password reset instructions sent to: <strong>" .
                            $user['email'] .
                            "</strong>. <br>Please Check your inbox or spam folder."
                    );
                    return redirect()->to("auth/resetpassword");
                } else {
                    session()->setFlashdata(
                        "msg",
                        "Error Occured. Please try again."
                    );
                    return redirect()->to("auth/resetpassword");
                }
            } else {
                session()->setFlashdata(
                    "msg",
                    "Email does not exist on our Database"
                );
                return redirect()->to("auth/resetpassword");
            }
        } else {
            return view("theme/$this->theme/auth/header", $data) .
                view("theme/$this->theme/auth/forgot_password", $data) .
                view("theme/$this->theme/auth/footer", $data);
        }
    }


    /*******************
     * ADMIN RESET PASSWORD
     ********************/
    public function password()
    {
        $token = hash("md5", rand(100000000, 999999999));
        $data = $this->site;

        if (session()->get("admin")) {
            return redirect()->to("admin");

            //PASSWORD RESET POST REQUEST
        } elseif ($this->request->getPost("admin_reset")) {
            $Model = new AdminModel();
            $username = $this->request->getPost("username");
            $admin = $Model->where("admin_username", $username)->first();
            if ($admin) {
                if (empty($admin['admin_email'])) {
                    $email = $data['company_email'];
                } else {
                    $email = $admin['admin_email'];
                }

                $variables = [];
                $variables["the_token"] = $token;
                $variables["admin_username"] = $username;

                if (
                    $Model
                    ->where("admin_username", $username)
                    ->set("token", $token)
                    ->update()
                ) {
                    $this->sendmail($variables, "Admin Reset Password", $email, 'No File');
                    session()->setFlashdata(
                        "msg",
                        "A password reset link has been sent to $email"
                    );
                    return redirect()->to("auth/admin");
                } else {
                    session()->setFlashdata(
                        "msg",
                        "Error occured. Try again!"
                    );
                    return redirect()->to("auth/admin");
                }
            } else {
                session()->setFlashdata(
                    "msg",
                    "Admin account does not exist"
                );
                return redirect()->to("auth/admin");
            }

            //TOKEN VERIFICATION
        } elseif ($this->request->getGet("token")) {
            $Model = new AdminModel();
            $token = $this->request->getGet("token");
            $admin = $Model->where("token", $token)->first();
            if ($admin) {

                $data["page"] = 'Reset Password';
                $data["token"] = $token;
                return view("admin/auth/header", $data) .
                    view("admin/auth/reset", $data) .
                    view("admin/auth/footer", $data);
            } else {
                session()->setFlashdata(
                    "msg",
                    "Link Expired or Invalid! Try again"
                );
                return redirect()->to("auth/admin");
            }

            //NEW PASSWORD
        } elseif ($this->request->getPost("admin_reset_password")) {

            $hasher = new PasswordHash(8, true);
            $Model = new AdminModel();
            $token = $this->request->getPost("token");
            $password = $this->request->getPost("password");
            $confirm = $this->request->getPost("password_confirm");

            if ($password === $confirm) {
                $admin = $Model->where("token", $token)->first();

                if ($admin) {

                    $variables = [];
                    $variables["admin_username"] = $admin['admin_username'];

                    $value = ["admin_password" => $hasher->HashPassword($password), "token" => hash("md5", rand(100000000, 999999999)),];

                    if ($Model->where("token", $token)->set($value)->update()) {

                        if ($admin['admin_email'] === $data['company_email'] || empty($admin['admin_email'])) {
                            $this->sendmail($variables, "Admin Password Changed", $data['company_email'], 'No File');
                        } else {
                            $this->sendmail($variables, "Admin Password Changed", $admin['admin_email'], 'No File');
                            $this->sendmail($variables, "Admin Password Changed", $data['company_email'], 'No File');
                        }

                        session()->setFlashdata(
                            "msg",
                            "Password changed successfully! - Login"
                        );
                        return redirect()->to("auth/admin");
                    } else {
                        session()->setFlashdata(
                            "msg",
                            "Error occured. Try again!"
                        );
                        return redirect()->to("auth/password?token=$token");
                    }
                } else {
                    session()->setFlashdata(
                        "msg",
                        "Link Expired or Invalid! Try again"
                    );
                    return redirect()->to("auth/admin");
                }
            } else {
                session()->setFlashdata(
                    "msg",
                    "Invalid password confirmation"
                );
                return redirect()->to("auth/password?token=$token");
            }


            //PASSWORD RESET PAGE
        } else {

            $data["page"] = 'Reset Password';
            return view("admin/auth/header", $data) .
                view("admin/auth/password", $data) .
                view("admin/auth/footer", $data);
        }
    }
}
