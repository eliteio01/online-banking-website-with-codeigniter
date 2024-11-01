<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\SiteModel;
use App\Models\UserModel;
use App\Models\PaymentGateway;
use App\Models\EmailTemplate;
use App\Models\NotificationModel;
use App\Models\NewsModel;
use App\Models\SupportModel;
use App\Models\PasswordHash;
use App\Models\FaqModel;
use App\Models\TestimonialModel;
use App\Models\BasicModel;
use App\Models\TransferModel;


use ZipArchive;


class Admin extends License
{

  //get Admin details
  protected function admin()
  {
    if (!session()->get("admin")) {
      return redirect()->to("auth/admin?url=" . current_url());
    } else {
      $username = session()->get("admin");
      $Model = new AdminModel();
      $ticketModel = new SupportModel();
      $UserModel = new UserModel();
      $admin = $Model->where("admin_username", $username)->first();
      $admin['admin_id'] = $admin['id'];

      //Notifications
      $admin['notification'] = $ticketModel->where("status", 0)->countAllResults();
      $note = $ticketModel->where("status", 0)->orderBy('id', 'DESC')->findAll(4);
      $admin['all_tickets'] = '';
      foreach ($note as $row) {
        $img = $UserModel->where("id", $row['user_id'])->first();
        $admin['all_tickets'] .=
          '<a href="' . base_url('admin/tickets?open=1&id=' . $row['id']) . '" class="dropdown-item unread">
              <div class="user-avatar">
                <img src="' . base_url('uploads/' . $img['image']) . '" alt="' . $row['name'] . '">
              </div>
              <div class="dropdown-item-body">
                <p class="text"> ' . $row['subject'] . ' </p>
                <span class="date"><span class="text-secondary font-weight-bold">' . $row['name'] . '</span> |  ' . date("jS F\, Y H:i A", strtotime($row['created_at'])) . '</span>
              </div>
         </a>';
      }

      return $admin;
    }
  }

  /***************************************************
   * DASHBOARD
   ***************************************************/
  public function index()
  {
    if (!session()->get("admin")) {
      return redirect()->to("auth/admin?url=" . current_url());
    } else {
      $site = $this->site;
      $admin = $this->admin();
      //Pending Support Tickets
      $admin['pending_tickets'] = (new SupportModel)->where("status", 0)->countAllResults();
      //Total Users
      $admin['total_users'] = (new UserModel)->countAllResults();
      //Last User
      $last = (new UserModel)->orderBy('id', 'DESC')->first(1);
      if ($last) {
        $admin['last_user'] = '<a href="' . base_url('admin/manage?id=' . $last['id']) . '">' . $last['name'] . '</a>';
      } else {
        $admin['last_user'] = 'None';
      }

      $admin["page"] = 'Dashboard';
      $data = array_merge($site, $admin);
      return view("admin/header", $data) .
        view("admin/dashboard", $data) .
        view("admin/footer", $data);
    }
  }


  /***************************************************
   * CREATE NEW ACCOUNT
   ***************************************************/
  public function create_account()
  {

    $site = $this->site;
    $admin = $this->admin();
    $Model = new UserModel();
    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    }
    if ($this->request->getPost("create_new")) {

      $hasher = new PasswordHash(8, false);
      $value = [
        "account_id" => $this->request->getPost("account_id"),
        "name" => $this->request->getPost("name"),
        "status" => $this->request->getPost("status"),
        "email" => $this->request->getPost("email"),
        "check_acc" => $this->request->getPost("check_acc"),
        "check_balance" => $this->request->getPost("check_balance"),
        "savings_acc" => $this->request->getPost("savings_acc"),
        "savings_balance" => $this->request->getPost("savings_balance"),
        "currency" => $this->request->getPost("currency"),
        "phone" => $this->request->getPost("phone"),
        "password" => $hasher->HashPassword($this->request->getPost("password")),
        "country" => $this->request->getPost("country"),
        "city" => $this->request->getPost("city"),
        "address" => $this->request->getPost("address"),
        "zip" => $this->request->getPost("zip"),
        "dob" => $this->request->getPost("dob"),
        "gender" => $this->request->getPost("gender"),
        "occupation" => $this->request->getPost("occupation"),
        "pin" => $this->request->getPost("pin"),
        "cot" => $this->request->getPost("cot"),
        "tax" => $this->request->getPost("tax"),
        "imf" => $this->request->getPost("imf"),
        "creditCard" => $this->request->getPost("creditCard"),
        "expire" => $this->request->getPost("expire"),
        "allow_upload" => $this->request->getPost("allow_upload"),
        "allow_codes" => $this->request->getPost("allow_codes"),
      ];
      if ($Model->insert($value)) {
        $get_id = $Model->getInsertID();
        session()->setFlashdata("msg", 'Account created');
        return redirect()->to("admin/manage?id=$get_id");
      } else {
        session()->setFlashdata("msg", 'Error Occured. try again');
        return redirect()->to("admin/create_account");
      }
    } else {

      $admin["page"] = 'Create Account';
      $admin['md'] = rand(10000, 99999);
      $accGen = rand(1, 5);
      if ($accGen == 1) {
        $admin['acc_no'] = '0011';
      } else if ($accGen == 2) {
        $admin['acc_no'] = '0022';
      } else if ($accGen == 3) {
        $admin['acc_no'] = '0033';
      } else if ($accGen == 4) {
        $admin['acc_no'] = '0044';
      } else if ($accGen == 5) {
        $admin['acc_no'] = '0055';
      }


      $data = array_merge($site, $admin);
      return view("admin/header", $data) .
        view("admin/create_account", $data) .
        view("admin/footer", $data);
    }
  }


  /***************************************************
   * ADMIN ACCOUNT
   ***************************************************/
  public function accounts()
  {

    $site = $this->site;
    $admin = $this->admin();
    $Model = new AdminModel();
    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost("create")) {
        $stmt = $Model->where("admin_username", $this->request->getPost("username"))->first();
        if (!$stmt) {

          $hasher = new PasswordHash(8, false);
          $password = $hasher->HashPassword($this->request->getPost("password"));

          $value = [
            "admin_username" => $this->request->getPost("username"),
            "admin_email" => $this->request->getPost("email"),
            "admin_password" => $password,
            "role" => $this->request->getPost("role"),
          ];
          if ($Model->save($value)) {
            session()->setFlashdata("msg", 'Account created');
            return redirect()->to("admin/accounts");
          } else {
            session()->setFlashdata("msg", 'Error Occured. try again');
            return redirect()->to("admin/accounts");
          }
        } else {
          session()->setFlashdata("msg", 'Username exists');
          return redirect()->to("admin/accounts");
        }
      } else if ($this->request->getVar("manage")) {
        $row = $Model->where("id", $this->request->getVar("id"))->first();
        $admin['the_username'] = $row['admin_username'];
        $admin['the_email'] = $row['admin_email'];
        $admin['the_id'] = $row['id'];
        $admin['the_role'] = $row['role'];
        $admin["page"] = 'Manage Accounts';
        $admin['all'] = $Model->findAll();
        $admin['count'] = $Model->countAllResults();


        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/accounts", $data) .
          view("admin/footer", $data);
      } else if ($this->request->getPost("update")) {

        $check = ["admin_username" => $this->request->getPost("username"), "id !=" => $this->request->getPost("id")];
        if (!$Model->where($check)->first()) {

          if (empty($this->request->getPost("password"))) {
            $values = ["admin_username" => $this->request->getPost("username"), "admin_email" => $this->request->getPost("email"), "role" => $this->request->getPost("role")];

            if ($Model->where("id", $this->request->getPost("id"))->set($values)->update()) {
              session()->destroy();
              return redirect()->to("auth/admin?done=1");
            } else {
              session()->setFlashdata("msg", 'Error Occured. Try again');
              return redirect()->to("admin/accounts");
            }
          } else {

            $hasher = new PasswordHash(8, false);
            $password = $hasher->HashPassword($this->request->getPost("password"));
            $values = ["admin_username" => $this->request->getPost("username"), "admin_email" => $this->request->getPost("email"), "role" => $this->request->getPost("role"), "admin_password" => $password];

            if ($Model->where("id", $this->request->getPost("id"))->set($values)->update()) {
              session()->destroy();
              return redirect()->to("auth/admin?done=1");
            } else {
              session()->setFlashdata("msg", 'Error Occured. Try again');
              return redirect()->to("admin/accounts");
            }
          }
        } else {
          session()->setFlashdata("msg", 'Username exists');
          return redirect()->to("admin/accounts");
        }
      } else if ($this->request->getPost("delete")) {

        if ($Model->where("id", $this->request->getPost("id"))->delete()) {

          session()->setFlashdata("msg", 'Account Deleted Successfully!');
          return redirect()->to("admin/accounts");
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Please try again');
          return redirect()->to("admin/accounts");
        }
      } else {

        //Admin Table
        $admin["page"] = 'Admin Accounts';
        $admin['all'] = $Model->findAll();
        $admin['count'] = $Model->countAllResults();


        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/accounts", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * WALLET SETTINGS
   ***************************************************/
  public function wallets()
  {

    $site = $this->site;
    $admin = $this->admin();
    $Model = new PaymentGateway();

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('create')) {
        $ticker = strtolower($this->request->getPost('ticker'));
        $name = $this->request->getPost('name');
        $wallet = $this->request->getPost('address');
        $barcode = $this->request->getPost('barcode');
        $password = $this->request->getPost('password');
        $hasher = new PasswordHash(8, false);

        if ($hasher->CheckPassword($password, $admin['admin_password'])) {

          $value = [
            "name" => $name,
            "ticker" => $ticker,
            "barcode" => $barcode
          ];

          if ($Model->save($value)) {
            $id = $Model->getInsertID();

            //CHECK IF FILE EXISTS - YES: UPDATE FILE - NO: CREATE FILE
            if (file_exists(WRITEPATH . 'wallets/.' . $id)) {
              file_put_contents(WRITEPATH . 'wallets/.' . $id, $wallet);
            } else {
              $fp = fopen(WRITEPATH . 'wallets/.' . $id, 'a');
              fwrite($fp, $wallet);
              fclose($fp);
            }
            $variables = [];
            $variables['wallet_address'] = $wallet;
            $variables['wallet_name'] = $name;

            $this->sendmail($variables, 'Create Wallet', $site['company_email'], 'NoFile');

            session()->setFlashdata("msg", 'Wallet Created Successfully');
            return redirect()->to("admin/wallets");
          }
        } else {

          session()->setFlashdata("msg", 'Incorrect Admin Password');
          return redirect()->to("admin/wallets");
        }
      } else if ($this->request->getPost('status')) {

        if ($this->request->getPost('stat') == 1) {
          $Model->where("id", $this->request->getPost('id'))->set("status", 0)->update();
        } else {
          $Model->where("id", $this->request->getPost('id'))->set("status", 1)->update();
        }
        $row = $Model->where("id", $this->request->getPost("id"))->first();
        $variables = [];
        $variables["the_id"] = $row['name'];
        $this->sendmail($variables, 'Wallet Status', $site['company_email'], 'NoFile');

        session()->setFlashdata("msg", 'Wallet Status update successfull');
        return redirect()->to("admin/wallets");
      } else if ($this->request->getPost('manage')) {

        $row = $Model->where("id", $this->request->getPost("id"))->first();
        $admin['wallet_name'] = $row['name'];
        $admin['wallet_address'] = file_get_contents(WRITEPATH . "/wallets/." . $row['id']);
        $admin['wallet_code'] = $row['ticker'];
        $admin['barcode'] = $row['barcode'];
        $admin['the_id'] = $row['id'];


        $admin["page"] = 'Update Wallet';
        $admin['all'] = $Model->findAll();
        $admin['count'] = $Model->countAllResults();

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/wallets", $data) .
          view("admin/footer", $data);
      } else if ($this->request->getPost('update')) {

        $ticker = strtolower($this->request->getPost('ticker'));
        $name = $this->request->getPost('name');
        $wallet = $this->request->getPost('address');
        $barcode = $this->request->getPost('barcode');

        $id = $this->request->getPost('id');
        $password = $this->request->getPost('password');
        $hasher = new PasswordHash(8, false);

        if ($hasher->CheckPassword($password, $admin['admin_password'])) {

          $value = [
            "name" => $name,
            "ticker" => $ticker,
            "barcode" => $barcode
          ];

          if ($Model->where("id", $id)->set($value)->update()) {

            //CHECK IF FILE EXISTS - YES: UPDATE FILE - NO: CREATE FILE
            if (file_exists(WRITEPATH . "wallets/." . $id)) {
              file_put_contents(WRITEPATH . "wallets/." . $id, $wallet);
            } else {
              $fp = fopen(WRITEPATH . "wallets/." . $id, 'a');
              fwrite($fp, $wallet);
              fclose($fp);
            }

            $variables = [];
            $variables['wallet_address'] = $wallet;
            $variables['wallet_name'] = $name;

            $this->sendmail($variables, 'Wallet Changed', $site['company_email'], 'NoFile');

            session()->setFlashdata("msg", 'Wallet Updated Successfully');
            return redirect()->to("admin/wallets");
          }
        } else {

          session()->setFlashdata("msg", 'Incorrect Admin Password');
          return redirect()->to("admin/wallets");
        }
      } else {

        $admin["page"] = 'Payment Gateways';
        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/wallets", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * SUPPORT TICKETS
   ***************************************************/
  public function tickets()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new SupportModel();



    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getVar('open')) {
        $admin["page"] = 'Read Ticket';
        $admin['single'] = $Model->where("id", $this->request->getVar("id"))->findAll();
        $Model->where("id", $this->request->getVar("id"))->set("status", 1)->update();

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/tickets", $data) .
          view("admin/footer", $data);
      } else {
        $admin["page"] = 'Support Tickets';
        $admin['all'] = $Model->findAll();
        $admin['count'] = $Model->countAllResults();


        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/tickets", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * SEND EMAIL
   ***************************************************/
  public function newsletter()
  {
    $site = $this->site;
    $admin = $this->admin();
    $userModel = new UserModel();

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost("send")) {
        $receiver = implode(', ', $this->request->getPost("all"));
        echo ('info' . 'Receiver: ' . $receiver);

        $subject = $this->request->getPost("subject");
        $message = $this->request->getPost("message");
        $filename = $this->request->getFile("file")->getName();
        $variables = [];
        $variables['the_subject'] = $subject;
        $variables['the_message'] = $message;


        if ($filename == '') {

          $this->sendmail($variables, "Email", $receiver, 'NoFile');

          session()->setFlashdata("msg", 'Newsletter sent successfully1');
          return redirect()->to("admin/newsletter");
        } else {
          $max_size = $site['max_upload'] * 1000;
          $rules = $this->validate(
            [
              'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,application/pdf]',
                'max_size[file,' . $max_size . ']',
              ],
            ]
          );

          if ($rules) {

            $file = $this->request->getFile('file');
            $filename = $file->getRandomName();
            $file->move('uploads/docs', $filename);
            $dir = base_url('uploads/docs/' . $filename);

            $this->sendmail($variables, "Email", $receiver, $dir);
            session()->setFlashdata("msg", 'Newsletter sent successfully');
            return redirect()->to("admin/newsletter");
          } else {

            session()->setFlashdata("msg", 'Upload error. please check the file and try again');
            return redirect()->to("admin/newsletter");
          }
        }
      } else {

        $admin["page"] = 'Newsletter';
        $admin['all'] = $userModel->findAll();
        $admin['count'] = $userModel->countAllResults();


        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/newsletter", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * NOTICE
   ***************************************************/
  public function notice()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new NewsModel();


    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('update')) {
        $values = [
          "status" => $this->request->getPost('status'),
          "body" => htmlspecialchars($this->request->getPost('message')),
          "title" => $this->request->getPost('subject')
        ];

        if ($Model->where("id", 1)->set($values)->update()) {
          session()->setFlashdata("msg", 'Notice Updated');
          return redirect()->to("admin/notice");
        } else {
          session()->setFlashdata("msg", 'Error Ocurred. Try again');
          return redirect()->to("admin/notice");
        }
      } else {

        $admin["page"] = 'Notice';
        $admin['all'] = $Model->findAll();

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/notice", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * EMAIL TEMPLATES
   ***************************************************/
  public function templates()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new EmailTemplate();
    $siteModel = new SiteModel();


    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('edit')) {
        $admin["page"] = 'Edit Email Template';
        $admin['all'] = $Model->where("id", $this->request->getPost("id"))->findAll();

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/templates", $data) .
          view("admin/footer", $data);
      } else if ($this->request->getPost('update')) {
        $values = ["subject" => $this->request->getPost("subject"), "body" => $this->request->getPost("body")];
        if ($Model->where("id", $this->request->getPost("id"))->set($values)->update()) {
          session()->setFlashdata("msg", 'Template Updated');
          return redirect()->to("admin/templates");
        } else {
          session()->setFlashdata("msg", 'Error Ocurred. Try again');
          return redirect()->to("admin/templates");
        }
      } else if ($this->request->getPost('update_header')) {

        if ($siteModel->where("id", 1)->set("email_header", $this->request->getPost("header"))->update()) {
          session()->setFlashdata("msg", 'Header Template Updated');
          return redirect()->to("admin/templates");
        } else {
          session()->setFlashdata("msg", 'Error Ocurred. Try again');
          return redirect()->to("admin/templates");
        }
      } else if ($this->request->getPost('update_footer')) {

        if ($siteModel->where("id", 1)->set("email_footer", $this->request->getPost("footer"))->update()) {
          session()->setFlashdata("msg", 'Footer Template Updated');
          return redirect()->to("admin/templates");
        } else {
          session()->setFlashdata("msg", 'Error Ocurred. Try again');
          return redirect()->to("admin/templates");
        }
      } else {

        $admin["page"] = 'Email Templates';
        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/templates", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * FAQs
   ***************************************************/
  public function faqs()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new FaqModel();
    $site["page"] = 'FAQs and Answers';



    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('add')) {

        $values = [
          "question" => $this->request->getPost("question"),
          "answer" => $this->request->getPost('answer'),
        ];

        if ($Model->save($values)) {
          session()->setFlashdata("msg", 'FAQ added Successfully');
          return redirect()->to("admin/faqs");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/faqs");
        }
      } else if ($this->request->getPost('delete')) {

        if ($Model->where("id", $this->request->getVar("id"))->delete()) {
          session()->setFlashdata("msg", 'FAQ Deleted Successfully');
          return redirect()->to("admin/faqs");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/faqs");
        }
      } else if ($this->request->getPost('edit')) {

        $admin["page"] = 'Update FAQ';

        $row = $Model->where("id", $this->request->getVar("id"))->first();
        if ($row) {

          $admin['the_id'] = $row['id'];
          $admin['question'] = $row['question'];
          $admin['answer'] = $row['answer'];

          $data = array_merge($site, $admin);
          return view("admin/header", $data) .
            view("admin/faqs", $data) .
            view("admin/footer", $data);
        } else {
          session()->setFlashdata("msg", 'Invalid ID');
          return redirect()->to("admin/faqs");
        }
      } else if ($this->request->getPost('update')) {

        $values = [
          "question" => $this->request->getPost("question"),
          "answer" => $this->request->getPost('answer'),
        ];

        if ($Model->where("id", $this->request->getVar("id"))->set($values)->update()) {

          session()->setFlashdata("msg", 'FAQ updated successfully');
          return redirect()->to("admin/faqs");
        } else {
          session()->setFlashdata("msg", 'Error Occured!');
          return redirect()->to("admin/faqs");
        }
      } else {



        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/faqs", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * TESTIMONIALS
   ***************************************************/
  public function testimonials()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new TestimonialModel();
    $site["page"] = 'Testimonials';



    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('add')) {

        $name = $this->request->getVar("name");
        $content = $this->request->getVar("content");
        $filecheck = $this->request->getFile("file")->getName();
        $file = $this->request->getFile('file');
        $filename = $file->getRandomName();

        if ($filecheck == '') {

          $values = [
            "name" => $name,
            "content" => $content,
          ];

          $Model->save($values);

          session()->setFlashdata("msg", 'Testimonial Saved');
          return redirect()->to("admin/testimonials");
        } else {
          $max_size = $site['max_upload'] * 1000;
          $rules = $this->validate(
            [
              'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,' . $max_size . ']',
              ],
            ]
          );

          if ($rules) {

            $values = [
              "name" => $name,
              "content" => $content,
              "image" => $filename,
            ];


            $file->move('uploads/', $filename);
            $dir = base_url('uploads/' . $filename);
            $Model->save($values);
            session()->setFlashdata("msg", 'Testimonial Saved');
            return redirect()->to("admin/testimonials");
          } else {

            session()->setFlashdata("msg", $this->validator->listErrors());
            return redirect()->to("admin/testimonials");
          }
        }
      } else if ($this->request->getPost('delete')) {

        if ($Model->where("id", $this->request->getVar("id"))->delete()) {
          session()->setFlashdata("msg", 'Testimonial Deleted Successfully');
          return redirect()->to("admin/testimonials");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/testimonials");
        }
      } else if ($this->request->getPost('edit')) {

        $admin["page"] = 'Update Testimonial';

        $row = $Model->where("id", $this->request->getVar("id"))->first();
        if ($row) {

          $admin['the_id'] = $row['id'];
          $admin['name'] = $row['name'];
          $admin['content'] = $row['content'];

          $data = array_merge($site, $admin);
          return view("admin/header", $data) .
            view("admin/testimonials", $data) .
            view("admin/footer", $data);
        } else {
          session()->setFlashdata("msg", 'Invalid ID');
          return redirect()->to("admin/testimonials");
        }
      } else if ($this->request->getPost('update')) {

        $name = $this->request->getVar("name");
        $content = $this->request->getVar("content");
        $filecheck = $this->request->getFile("file")->getName();
        $file = $this->request->getFile('file');
        $filename = $file->getRandomName();

        if ($filecheck == '') {

          $values = [
            "name" => $name,
            "content" => $content,
          ];

          $Model->where("id", $this->request->getVar("id"))->set($values)->update();
          session()->setFlashdata("msg", 'Testimonial Updated');
          return redirect()->to("admin/testimonials");
        } else {
          $max_size = $site['max_upload'] * 1000;
          $rules = $this->validate(
            [
              'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,' . $max_size . ']',
              ],
            ]
          );

          if ($rules) {

            $values = [
              "name" => $name,
              "content" => $content,
              "image" => $filename,
            ];


            $file->move('uploads/', $filename);
            $dir = base_url('uploads/' . $filename);
            $Model->where("id", $this->request->getVar("id"))->set($values)->update();
            session()->setFlashdata("msg", 'Testimonial Updated');
            return redirect()->to("admin/testimonials");
          } else {

            session()->setFlashdata("msg", $this->validator->listErrors());
            return redirect()->to("admin/testimonials");
          }
        }
      } else {



        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/testimonials", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }

  /***************************************************
   * TERMS
   ***************************************************/
  public function terms()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new BasicModel();
    $site["page"] = 'Terms and Conditions';

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {



      if ($this->request->getPost('update')) {

        $Model->where("title", "terms")->set("value", $this->request->getPost("terms"))->update();
        session()->setFlashdata("msg", 'Terms and Conditions Updated');
        return redirect()->to("admin/terms");
      } else {

        $row = $Model->where("title", "terms")->first();
        if ($row) {
          $admin['terms'] = $row['value'];
        } else {
          $admin['terms'] = 'Not Found';
        }

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/terms", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }



  /***************************************************
   * ABOUT US
   ***************************************************/
  public function about()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new BasicModel();
    $site["page"] = 'About Us';

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {



      if ($this->request->getPost('update')) {

        $Model->where("title", "about")->set("value", $this->request->getPost("about"))->update();
        session()->setFlashdata("msg", 'About Us Updated');
        return redirect()->to("admin/about");
      } else {

        $row = $Model->where("title", "about")->first();
        if ($row) {
          $admin['about_us'] = $row['value'];
        } else {
          $admin['about_us'] = 'Not Found';
        }

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/about", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }



  /***************************************************
   * GENERAL SETTINGS
   ***************************************************/
  public function settings()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new SiteModel();
    $zip = new ZipArchive();


    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('update_chat')) {

        if ($Model->where("id", 1)->set("chat_code", $this->request->getPost('chat_code'))->update()) {
          session()->setFlashdata("msg", 'Details Updated Successfully');
          return redirect()->to("admin/settings");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/settings");
        }
      } else if ($this->request->getPost('update_settings')) {

        $values = [
          "otp" => $this->request->getPost('otp'),
          "login_notify" => $this->request->getPost('login_notify'),
          "min_deposit" => $this->request->getPost('min_deposit'),
          "wire_fee" => $this->request->getPost('wire_fee'),
          "loan" => $this->request->getPost('loan'),
          "im_chat" => $this->request->getPost('im_chat'),
          "im_position" => $this->request->getPost('im_position'),
          "whatsapp" => $this->request->getPost('whatsapp'),
          "telegram" => $this->request->getPost('telegram'),
          "live_chat" => $this->request->getPost('live_chat'),
          "ref_limit" => $this->request->getPost('ref_limit'),
          "recaptcha" => $this->request->getPost('recaptcha'),
          "captchaPublicKey" => $this->request->getPost('captchaPublicKey'),
          "captchaPrivateKey" => $this->request->getPost('captchaPrivateKey'),
          "company_name" => $this->request->getPost('company_name'),
          "company_phone" => $this->request->getPost('company_phone'),
          "company_email" => $this->request->getPost('company_email'),
          "noreply" => $this->request->getPost('noreply'),
          "company_description" => $this->request->getPost('company_description'),
          "company_keyword" => $this->request->getPost('company_keyword'),
          "company_address" => $this->request->getPost('company_address'),
          "abrv" => $this->request->getPost('abrv'),
          "theme_color" => $this->request->getPost('theme_color'),
          "secondary_color" => $this->request->getPost('secondary_color'),
          "max_upload" => $this->request->getPost('max_upload'),
          "bank_routing" => $this->request->getPost('bank_routing'),
          "allow_register" => $this->request->getPost('allow_register'),
        ];

        if ($Model->where("id", 1)->set($values)->update()) {
          session()->setFlashdata("msg", 'Details Updated Successfully');
          return redirect()->to("admin/settings");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/settings");
        }
      } else if ($this->request->getPost('upload')) {

        $max_size = $site['max_upload'] * 1000;

        $rules = $this->validate([
          'file' => [
            'label' => 'Image File',
            'rules' => 'uploaded[file]'
              . '|is_image[file]'
              . '|mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
              . '|max_size[file,' . $max_size . ']'
              . '|max_dims[file,1024,768]',
          ],
        ]);

        if ($rules) {
          $img = $this->request->getFile('file');
          $filename = $img->getRandomName();
          if ($img->move('uploads', $filename)) {

            if ($this->request->getPost('type') === 'logo') {
              $value = ["company_logo" => $filename];
            } else {
              $value = ["company_favicon" => $filename];
            }

            $Model->where("id", 1)->set($value)->update();

            session()->setFlashdata("msg", 'File updated');
            return redirect()->to("admin/settings");
          } else {

            session()->setFlashdata("msg", 'Error Occurred. Please try again');
            return redirect()->to("admin/settings");
          }
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Please try again');
          return redirect()->to("admin/settings");
        }
      } else {

        $admin['all'] = $Model->findAll();

        $admin["page"] = 'General Settings';
        $admin["page_id"] = 'advanced';

        $admin['folders'] = directory_map('./themes', 1);
        $admin['template_folder'] = directory_map('./templates', 1);

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/settings", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * THEME MANAGEMENT
   ***************************************************/
  public function theme()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new SiteModel();



    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getPost('upload_theme')) {

        $type = $this->request->getPost('type');

        $rules = $this->validate([
          'file' => [
            'label' => 'Theme ',
            'rules' => 'uploaded[file]'
              . '|mime_in[file,application/zip, application/x-zip-compressed, multipart/x-zip, application/x-compressed]'
          ],
        ]);



        if ($rules) {
          $uploadedFile = $this->request->getFile('file');
          $filename = $uploadedFile->getName();
          $array = explode(".", $filename);
          $folderName = $array[0];

          if ($uploadedFile->move('uploads/themes/', $filename)) {
            $zip = new ZipArchive;
            if ($zip->open('./uploads/themes/' . $filename)) {
              $zip->extractTo('uploads/themes/');
              $zip->close();
            }

            if (file_exists("./uploads/themes/$folderName/theme.json")) {
              $type = json_decode(file_get_contents("./uploads/themes/$folderName/theme.json"))->type;
              if ($type) {

                if ($type === 'backend') {
                  $public_folder = 'themes';
                  $view_folder = 'theme';
                } else {
                  $public_folder = 'templates';
                  $view_folder = 'template';
                }

                //Extract Public
                $public = new ZipArchive;
                if ($public->open('./uploads/themes/' . $folderName . '/public.zip')) {
                  $public->extractTo($public_folder . '/');
                  $public->close();
                }

                //Etract View
                $view = new ZipArchive;
                if ($view->open('./uploads/themes/' . $folderName . '/view.zip')) {
                  $view->extractTo(APPPATH . 'Views/' . $view_folder . '/');
                  $view->close();
                }

                unlink('./uploads/themes/' . $filename);
                unlink('./uploads/themes/' . $folderName . '/view.zip');
                unlink('./uploads/themes/' . $folderName . '/public.zip');
                unlink('./uploads/themes/' . $folderName . '/theme.json');
                rmdir('./uploads/themes/' . $folderName);

                session()->setFlashdata("msg", 'Theme Uploaded successfully');
                return redirect()->to("admin/theme");
              } else {
                session()->setFlashdata("msg", 'Theme json File Not Found!');
                return redirect()->to("admin/theme");
              }
            } else {
              session()->setFlashdata("msg", 'Invalid Theme Structure!');
              return redirect()->to("admin/theme");
            }
          } else {

            session()->setFlashdata("msg", 'Error Occurred. Please try again');
            return redirect()->to("admin/theme");
          }
        } else {
          session()->setFlashdata("msg", 'Error Occurred - Invalid File. Please try again');
          return redirect()->to("admin/theme");
        }
      } else if ($this->request->getPost('activate_theme')) {

        if ($this->request->getPost('type') === 'backend') {
          $values = ["theme" => $this->request->getPost('theme')];
        } else {
          $values = ["template" => $this->request->getPost('theme')];
        }

        if ($Model->where("id", 1)->set($values)->update()) {
          session()->setFlashdata("msg", 'Theme Activated Successfully');
          return redirect()->to("admin/theme");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/theme");
        }
      } else if ($this->request->getPost('delete_theme')) {

        if ($this->request->getPost('type') === 'backend') {
          $public = 'themes';
          $view = 'theme';
        } else {
          $public = 'templates';
          $view = 'template';
        }

        $target_one = $public . '/' . $this->request->getPost('theme');
        $target_two = APPPATH . 'Views/' . $view . '/' . $this->request->getPost('theme');

        if (delete_files($target_one, true) && delete_files($target_two, true)) {
          rmdir($target_one);
          rmdir($target_two);
          session()->setFlashdata("msg", 'Theme Deleted Successfully');
          return redirect()->to("admin/theme");
        } else {
          session()->setFlashdata("msg", 'Error Occured. try again');
          return redirect()->to("admin/theme");
        }
      } else {

        $admin['all'] = $Model->findAll();
        $admin["page"] = 'Theme Settings';
        $admin['theme_folder'] = directory_map('./themes', 1);
        $admin['template_folder'] = directory_map('./templates', 1);

        $data = array_merge($site, $admin);
        return view("admin/header", $data) .
          view("admin/theme", $data) .
          view("admin/footer", $data);
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * USER MANAGEMENT
   ***************************************************/
  public function manage()
  {
    $site = $this->site;
    $admin = $this->admin();
    $Model = new UserModel();
    $TransferModel = new TransferModel();

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else if ($admin['role'] == 1) {

      if ($this->request->getGet("id")) {

        $user = $Model->where("id", $this->request->getGet("id"))->first();
        $user['user_id'] = $this->request->getGet("id");
        $user['admin_id'] = $admin['id'];
        $user['MonthlyCredit'] = (new TransferModel)->select('sum(amount) as total')->where(["receiver_acc" => $user['savings_acc'], "month" => date("F Y")])->first()['total'];
        $user['MonthlyDebit'] = (new TransferModel)->select('sum(amount) as total')->where(["sender_acc" => $user['savings_acc'], "month" => date("F Y")])->first()['total'];
        $user['cMonthlyCredit'] = (new TransferModel)->select('sum(amount) as total')->where(["receiver_acc" => $user['check_acc'], "month" => date("F Y")])->first()['total'];
        $user['cMonthlyDebit'] = (new TransferModel)->select('sum(amount) as total')->where(["sender_acc" => $user['check_acc'], "month" => date("F Y")])->first()['total'];

        //Last Login
        $ipdat = @json_decode(file_get_contents("http://ip-api.com/json/" . $user['ip']));
        if (empty($ipdat->country)) {
          $user['l_country'] = "Unable to Fetch";
        } else {
          $user['l_country'] = $ipdat->country;
        }

        if (empty($ipdat->regionName)) {
          $user['l_region'] = "Unable to Fetch";
        } else {
          $user['l_region'] = $ipdat->regionName;
        }

        if (empty($ipdat->city)) {
          $user['l_city'] = "Unable to Fetch";
        } else {
          $user['l_city'] = $ipdat->city;
        }

        $admin["page"] = $user['name'] . ' Account';
        $data = array_merge($site, $admin, $user);
        return view("admin/header", $data) .
          view("admin/manage", $data) .
          view("admin/footer", $data);
      }

      //Upload Account Photo

      else if ($this->request->getVar("upload_photo")) {
        $userId = $this->request->getVar("id");
        $max_size = $site['max_upload'] * 1000;
        $rules = $this->validate([
          'photo' => [
            'label' => 'Image File',
            'rules' => 'uploaded[photo]'
              . '|is_image[photo]'
              . '|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
              . '|max_size[photo,' . $max_size . ']',
          ],
        ]);

        if ($rules) {
          $img = $this->request->getFile('photo');
          //Rename file
          $filename = $img->getRandomName();
          if ($img->move('uploads', $filename)) {

            $Model = new UserModel();
            $value = ["image" => $filename];
            $Model->where("id", $userId)->set($value)->update();
            session()->setFlashdata("msg", 'Profile photo updated');
            return redirect()->to("admin/manage?id=$userId");
          } else {
            session()->setFlashdata("msg", 'Error Occurred. Please try again');
            return redirect()->to("admin/manage?id=$userId");
          }
        } else {
          session()->setFlashdata("msg", 'Error Occured. Please try again');
          return redirect()->to("admin/manage?id=$userId");
        }
      }


      //Update Account Details

      else if ($this->request->getPost("update_account")) {

        $hasher = new PasswordHash(8, false);
        $user_id = $this->request->getPost("id");
        $user = $Model->where("id", $user_id)->first();

        if (empty($this->request->getPost("password"))) {
          $password = $user['password'];
        } else {
          $password = $hasher->HashPassword($this->request->getPost("password"));
        }
        if (empty($this->request->getPost("country"))) {
          $country = $user['country'];
        } else {
          $country = $this->request->getPost("country");
        }
        if (empty($this->request->getPost("city"))) {
          $city = $user['city'];
        } else {
          $city = $this->request->getPost("city");
        }
        if (empty($this->request->getPost("currency"))) {
          $currency = $user['currency'];
        } else {
          $currency = $this->request->getPost("currency");
        }
        if (empty($this->request->getPost("gender"))) {
          $gender = $user['gender'];
        } else {
          $gender = $this->request->getPost("gender");
        }

        $value = [
          "account_id" => $this->request->getPost("account_id"),
          "name" => $this->request->getPost("name"),
          "status" => $this->request->getPost("status"),
          "email" => $this->request->getPost("email"),
          "check_acc" => $this->request->getPost("check_acc"),
          "check_balance" => $this->request->getPost("check_balance"),
          "savings_acc" => $this->request->getPost("savings_acc"),
          "savings_balance" => $this->request->getPost("savings_balance"),
          "currency" => $currency,
          "phone" => $this->request->getPost("phone"),
          "password" => $password,
          "country" => $country,
          "city" => $city,
          "address" => $this->request->getPost("address"),
          "zip" => $this->request->getPost("zip"),
          "dob" => $this->request->getPost("dob"),
          "gender" => $gender,
          "occupation" => $this->request->getPost("occupation"),
          "pin" => $this->request->getPost("pin"),
          "cot" => $this->request->getPost("cot"),
          "tax" => $this->request->getPost("tax"),
          "imf" => $this->request->getPost("imf"),
          "creditCard" => $this->request->getPost("creditCard"),
          "expire" => $this->request->getPost("expire"),
          "allow_upload" => $this->request->getPost("allow_upload"),
          "allow_codes" => $this->request->getPost("allow_codes"),
        ];

        if ($Model->where("id", $user_id)->set($value)->update()) {
          session()->setFlashdata("msg", 'Account Updated!');
          return redirect()->to("admin/manage?id=$user_id");
        } else {
          session()->setFlashdata("msg", 'Error Occured. Try again');
          return redirect()->to("admin/manage?id=$user_id");
        }
      }

      //Debit Account

      else if ($this->request->getVar("debit_account")) {
        $AccType = $this->request->getVar("account");
        $Amt = $this->request->getVar("amount");
        $receiver = $this->request->getVar("receiver");
        $txDat = $this->request->getVar("date");
        $Remarks = $this->request->getVar("remarks");
        $BankName = $this->request->getVar("bank");
        $BankAddress = $this->request->getVar("bank_address");
        $RecAcc = $this->request->getVar("RecAcc");
        $user_id = $this->request->getVar("id");

        $reference = rand(100000, 999999);
        $user = $Model->where("id", $user_id)->first();

        $time = strtotime($txDat);
        $txMonth = date("F Y", $time);

        if ($AccType == 'Checking') {
          $AccTypeAcc = $user['check_acc'];
          $txBalance = $user['check_balance'] - $Amt;
          $theBal = $user['check_balance'];
          $Model->where("id", $user_id)->set("check_balance", $txBalance)->update();
        } else {
          $AccTypeAcc = $user['savings_acc'];
          $txBalance = $user['savings_balance'] - $Amt;
          $theBal = $user['savings_balance'];
          $Model->where("id", $user_id)->set("savings_balance", $txBalance)->update();
        }

        if ($Amt > $theBal) {
          session()->setFlashdata("msg", 'Insufficient Balance!');
          return redirect()->to("admin/manage?id=$user_id");
        } else {

          $value =
            [
              "user_id" => $user_id,
              "amount" => $Amt,
              "bank_name" => $BankName,
              "receiver_name" => $receiver,
              "receiver_acc" => $RecAcc,
              "month" => $txMonth,
              "balance" => $txBalance,
              "reference" => $reference,
              "sender_id" => $user['account_id'],
              "type" => 'Debit',
              "sender_acc" => $AccTypeAcc,
              "bank_address" => $BankAddress,
              "swift" => $this->swift() . 'XXX',
              "routing" => rand(100000000, 999999999),
              "remarks" => $Remarks
            ];

          if ($TransferModel->save($value)) {
            $variables = [];
            $variables['user_full_name'] = $user['name'];
            $variables['transaction_amount'] = $user['currency'] . ' ' . number_format($Amt, 2);
            $variables['account_type'] = $AccType;
            $variables['account_number'] = $AccTypeAcc;
            $variables['account_name'] = $user['name'];
            $variables['the_sender'] = $receiver;
            $variables['the_description'] = $user['account_id'] . '/' . $AccTypeAcc . '/' . $AccType . '/' . $Remarks;
            $variables['reference_id'] = $reference;
            $variables['available_balance'] = $user['currency'] . ' ' . number_format($txBalance, 2);

            $this->sendmail($variables, "Debit Alert", $user['email'], 'NoFile');
            session()->setFlashdata("msg", 'Debit Successfull!');
            return redirect()->to("admin/manage?id=$user_id");
          } else {
            session()->setFlashdata("msg", 'Error occured! Try again');
            return redirect()->to("admin/manage?id=$user_id");
          }
        }
      }

      //Credit Account

      else if ($this->request->getVar("credit_account")) {
        $AccType = $this->request->getVar("account");
        $Amt = $this->request->getVar("amount");
        $Sender = $this->request->getVar("sender");
        $txDat = $this->request->getVar("date");
        $Remarks = $this->request->getVar("remarks");
        $user_id = $this->request->getVar("id");
        $BankAddress = $this->request->getVar("bank_address");

        $reference = rand(100000, 999999);
        $user = $Model->where("id", $user_id)->first();

        $time = strtotime($txDat);
        $txMonth = date("F Y", $time);

        if ($AccType == 'Checking') {
          $AccTypeAcc = $user['check_acc'];
          $txBalance = $user['check_balance'] + $Amt;
          $Model->where("id", $user_id)->set("check_balance", $txBalance)->update();
        } else {
          $AccTypeAcc = $user['savings_acc'];
          $txBalance = $user['savings_balance'] + $Amt;
          $Model->where("id", $user_id)->set("savings_balance", $txBalance)->update();
        }

        $value =
          [
            "user_id" => $user_id,
            "amount" => $Amt,
            "bank_name" => $site['company_name'],
            "receiver_name" => $user['name'],
            "receiver_acc" => $AccTypeAcc,
            "month" => $txMonth,
            "balance" => $txBalance,
            "reference" => $reference,
            "sender_id" => $Sender,
            "type" => 'Credit',
            "sender_acc" => $AccType,
            "bank_address" => $BankAddress,
            "swift" => strtoupper($site['abrv']) . 'XXX',
            "routing" => $site['bank_routing'],
            "remarks" => $Remarks
          ];

        if ($TransferModel->save($value)) {
          $variables = [];
          $variables['user_full_name'] = $user['name'];
          $variables['transaction_amount'] = $user['currency'] . ' ' . number_format($Amt, 2);
          $variables['account_type'] = $AccType;
          $variables['account_number'] = $AccTypeAcc;
          $variables['account_name'] = $user['name'];
          $variables['the_sender'] = $Sender;
          $variables['the_description'] = $user['account_id'] . '/' . $AccTypeAcc . '/' . $AccType . '/' . $Remarks;
          $variables['reference_id'] = $reference;
          $variables['available_balance'] = $user['currency'] . ' ' . number_format($txBalance, 2);

          $this->sendmail($variables, "Credit Alert", $user['email'], 'NoFile');
          session()->setFlashdata("msg", 'Credit Successfull!');
          return redirect()->to("admin/manage?id=$user_id");
        } else {
          session()->setFlashdata("msg", 'Error occured! Try again');
          return redirect()->to("admin/manage?id=$user_id");
        }
      } else if ($this->request->getVar("notify")) {

        $receiver = $this->request->getVar("email");
        $subject = $this->request->getVar("subject");
        $message = $this->request->getVar("message");
        $user_id = $this->request->getVar("user_id");
        $reference = rand(100000, 999999);

        $filecheck = $this->request->getFile("file")->getName();
        $file = $this->request->getFile('file');
        $filename = $file->getRandomName();

        $variables = [];
        $variables['the_subject'] = $subject;
        $variables['the_message'] = $message;



        if ($filecheck == '') {

          $values = [
            "user_id" => $user_id,
            "reference" => $reference,
            "subject" => $subject,
            "description" => $message,
          ];
          $NotificationModel = new NotificationModel();
          $NotificationModel->save($values);

          $this->sendmail($variables, "Email", $receiver, 'NoFile');
          session()->setFlashdata("msg", 'Notification sent successfully');
          return redirect()->to("admin/manage?id=$user_id");
        } else {
          $max_size = $site['max_upload'] * 1000;
          $rules = $this->validate(
            [
              'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,application/pdf]',
                'max_size[file,' . $max_size . ']',
              ],
            ]
          );

          if ($rules) {


            $file->move('uploads/docs', $filename);
            $dir = base_url('uploads/docs/' . $filename);

            $values = [
              "user_id" => $user_id,
              "reference" => $reference,
              "subject" => $subject,
              "description" => $message,
              "file" => $filename,
            ];
            $NotificationModel = new NotificationModel();
            $NotificationModel->save($values);

            $this->sendmail($variables, "Email", $receiver, $dir);
            session()->setFlashdata("msg", 'Notification with file sent successfully');
            return redirect()->to("admin/manage?id=$user_id");
          } else {

            session()->setFlashdata("msg", $this->validator->listErrors());
            return redirect()->to("admin/manage?id=$user_id");
          }
        }
      } else {
        return redirect()->to("admin");
      }
    } else {
      session()->setFlashdata("msg", 'You do not have the credentials to access the page');
      return redirect()->to("admin");
    }
  }


  //Receipt
  public function receipt()
  {

    $site = $this->site;
    $admin = $this->admin();

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else {

      if ($this->request->getVar("ref")) {
        $row = (new TransferModel)->where("reference", $this->request->getVar("ref"))->first();
        if ($row) {

          $Model = new UserModel();
          $user = $Model->where("id", $row['user_id'])->first();

          if ($this->request->getVar("id") === 'wire') {
            $site['header'] = 'International wire transactions will take 2-3 days to be processed and sent.';
            $site['swiftCode'] = $row['swift'];
            $site['theRouting'] = $row['routing'];
          } else if ($this->request->getVar("id") === 'internal') {
            $site['header'] = 'Internal Transfer Processed';
            $site['swiftCode'] = '';
            $site['theRouting'] = '';
          } else if ($this->request->getVar("id") === 'local') {
            $site['header'] = 'Local Transfer Processed';
            $site['swiftCode'] = '';
            $site['theRouting'] = '';
          } else {
            $site['header'] = 'Transaction Receipt';
            $site['swiftCode'] = '';
            $site['theRouting'] = '';
          }

          if ($row['sender_acc'] === $user['check_acc']) {
            $site['xType'] = 'CHECKING';
          } else {
            $site['xType'] = 'SAVINGS';
          }
          $site['page'] = 'Transaction Receipt';
          $site['sender'] = substr($row['sender_acc'], -4);
          $site['receiver_account'] = substr($row['receiver_acc'], -4);
          $site['receiver_name'] = $row['receiver_name'];
          $site['the_amount'] = $user['currency'] . number_format($row['amount'], 2);
          $site['theBank'] = $row['bank_name'];
          $site['theBankAddress'] = $row['bank_address'];
          $site['user_id'] = $row['user_id'];

          $site['theRemarks'] = $row['remarks'];
          $site['theReference'] = $row['reference'];
          $site['theDate'] = date("jS F\, Y H:i A", strtotime($row['created_at']));

          $data = array_merge($site, $user, $admin);
          return view("admin/header", $data) .
            view("admin/receipt", $data) .
            view("admin/footer", $data);
        }
      } else {
        return redirect()->to("admin");
      }
    }
  }

  public function edit()
  {

    $site = $this->site;
    $admin = $this->admin();
    $Model = new TransferModel();

    if (!session()->get("admin")) {
      return redirect()->to("auth/admin");
    } else if ($this->request->getVar("edit")) {

      $row = $Model->where("id", $this->request->getVar("edit"))->first();
      if ($row) {

        $admin['the_id'] = $row['id'];
        $admin['user_id'] = $row['user_id'];
        $admin['amount'] = $row['amount'];
        $admin['bank_name'] = $row['bank_name'];
        $admin['bank_address'] = $row['bank_address'];
        $admin['sender_id'] = $row['sender_id'];
        $admin['sender_acc'] = $row['sender_acc'];
        $admin['reference'] = $row['reference'];
        $admin['receiver_acc'] = $row['receiver_acc'];
        $admin['receiver_name'] = $row['receiver_name'];
        $admin['type'] = $row['type'];
        $admin['swift'] = $row['swift'];
        $admin['routing'] = $row['routing'];
        $admin['remarks'] = $row['remarks'];
        $admin['balance'] = $row['balance'];
        $admin['month'] = $row['month'];
        $admin['the_created_at'] = $row['created_at'];


        $admin['page'] = 'Edit Transaction';
        $data = array_merge($admin, $site);
        return view("admin/header", $data) .
          view("admin/transactionedit", $data) .
          view("admin/footer", $data);
      } else {
        session()->setFlashdata("msg", 'Invalid Transaction ID. Please try again');
        return redirect()->to("admin");
      }
    } else if ($this->request->getVar("update_transaction")) {

      $values = [
        "amount" => $this->request->getvar("amount"),
        "bank_name" => $this->request->getvar("bank_name"),
        "bank_address" => $this->request->getvar("bank_address"),
        "sender_id" => $this->request->getvar("sender_id"),
        "sender_acc" => $this->request->getvar("sender_acc"),
        "reference" => $this->request->getvar("reference"),
        "receiver_acc" => $this->request->getvar("receiver_acc"),
        "receiver_name" => $this->request->getvar("receiver_name"),
        "type" => $this->request->getvar("type"),
        "swift" => $this->request->getvar("swift"),
        "routing" => $this->request->getvar("routing"),
        "remarks" => $this->request->getvar("remarks"),
        "balance" => $this->request->getvar("balance"),
        "month" => $this->request->getvar("month"),
        "created_at" => $this->request->getvar("created_at"),
      ];
      $user_id = $this->request->getvar("user_id");
      if ($Model->where("id", $this->request->getvar("id"))->set($values)->update()) {
        session()->setFlashdata("msg", 'Transaction Updated Successfully');
        return redirect()->to("admin/manage?id=$user_id");
      } else {
        session()->setFlashdata("msg", 'Error Occurred. try again');
        return redirect()->to("admin/manage?id=$user_id");
      }
    } else {
      return redirect()->to("admin");
    }
  }


  /***************************************************
   * DELETE RECORDS
   ***************************************************/
  public function delete_records()
  {
    $site = $this->site;
    $admin = $this->admin();

    if ($this->request->getPost("delete_statement") && session()->get("admin")) {
      if ($this->request->getPost("type") === 'users') {
        (new UserModel)->delete($this->request->getPost("all"));
        (new TransferModel)->delete($this->request->getPost("all"));
        (new SupportModel)->delete($this->request->getPost("all"));
        (new NotificationModel)->delete($this->request->getPost("all"));
        session()->setFlashdata("msg", 'Records Deleted Successfully');
        return redirect()->to("admin");
      } else if ($this->request->getPost("type") === 'tickets') {
        (new SupportModel)->delete($this->request->getPost("all"));
        session()->setFlashdata("msg", 'Records Deleted Successfully');
        return redirect()->to("admin");
      } else {
        session()->setFlashdata("msg", 'Error Occured. Try again');
        return redirect()->to("admin");
      }
    } else if ($this->request->getVar("delete_user") && session()->get("admin")) {
      if ((new UserModel)->where("id", $this->request->getVar("id"))->delete()) {
        (new TransferModel)->where("user_id", $this->request->getVar("id"))->delete();
        (new SupportModel)->where("user_id", $this->request->getVar("id"))->delete();
        (new NotificationModel)->where("user_id", $this->request->getVar("id"))->delete();

        session()->setFlashdata("msg", 'Account Deleted Successfully!');
        return redirect()->to("admin");
      } else {
        session()->setFlashdata("msg", 'Error Occurred. Please try again');
        return redirect()->to("admin");
      }
    } else if ($this->request->getVar("delete_admin") && session()->get("admin")) {
      if ((new AdminModel)->where("id", $this->request->getVar("id"))->delete()) {

        session()->setFlashdata("msg", 'Account Deleted Successfully!');
        return redirect()->to("admin/accounts");
      } else {
        session()->setFlashdata("msg", 'Error Occurred. Please try again');
        return redirect()->to("admin/accounts");
      }
    } else if ($this->request->getVar("delete_wallet") && session()->get("admin")) {
      if ((new PaymentGateway)->where("id", $this->request->getPost("id"))->delete()) {
        $file = WRITEPATH . "wallets/." . $this->request->getPost("id");
        unlink($file);

        $variables = [];
        $this->sendmail($variables, 'Wallet Deleted', $site['company_email'], 'NoFile');

        session()->setFlashdata("msg", 'Wallet Deleted Successfully!');
        return redirect()->to("admin/wallets");
      } else {
        session()->setFlashdata("msg", 'Error Occurred. Please try again');
        return redirect()->to("admin/wallets");
      }
    } else if ($this->request->getVar('ticket')) {
      if ((new SupportModel)->where("id", $this->request->getVar("id"))->delete()) {

        session()->setFlashdata("msg", 'Ticket Deleted Successfully!');
        return redirect()->to("admin/tickets");
      } else {
        session()->setFlashdata("msg", 'Error Occurred. Please try again');
        return redirect()->to("admin/tickets");
      }
    } else {
      return redirect()->to("admin");
    }
  }



  //Auto Transaction History Generator
  public function generator()
  {

    $site = $this->site;
    $admin = $this->admin();

    if (!session()->get("admin")) {
      if ($this->request->getGet("id")) {
        $param = '?' . $_SERVER['QUERY_STRING'];
      } else {
        $param = '';
      }
      return redirect()->to("auth/admin?url=" . current_url() . $param);
    } else {
      if ($this->request->getVar("run")) {
        $ranSz = array(
          "ABHYUDAYA CO-OP BANK LTD",
          "ABU DHABI COMMERCIAL BANK",
          "AKOLA DISTRICT CENTRAL CO-OPERATIVE BANK",
          "AKOLA JANATA COMMERCIAL COOPERATIVE BANK",
          "ALLAHABAD BANK",
          "ALMORA URBAN CO-OPERATIVE BANK LTD.",
          "ANDHRA BANK",
          "ANDHRA PRAGATHI GRAMEENA BANK",
          "APNA SAHAKARI BANK LTD",
          "AUSTRALIA AND NEW ZEALAND BANKING GROUP LIMITED.",
          "AXIS BANK",
          "BANK INTERNASIONAL INDONESIA",
          "BANK OF AMERICA",
          "BANK OF BAHRAIN AND KUWAIT",
          "BANK OF BARODA",
          "BANK OF CEYLON",
          "BANK OF INDIA",
          "BANK OF MAHARASHTRA",
          "BANK OF TOKYO-MITSUBISHI UFJ LTD.",
          "BARCLAYS BANK PLC",
          "BASSEIN CATHOLIC CO-OP BANK LTD",
          "BHARATIYA MAHILA BANK LIMITED",
          "BNP PARIBAS",
          "CALYON BANK",
          "CANARA BANK",
          "CAPITAL LOCAL AREA BANK LTD.",
          "CATHOLIC SYRIAN BANK LTD.",
          "CENTRAL BANK OF INDIA",
          "CHINATRUST COMMERCIAL BANK",
          "CITIBANK NA",
          "CITIZENCREDIT CO-OPERATIVE BANK LTD",
          "CITY UNION BANK LTD",
          "COMMONWEALTH BANK OF AUSTRALIA",
          "CORPORATION BANK",
          "CREDIT SUISSE AG",
          "DBS BANK LTD",
          "DENA BANK",
          "DEUTSCHE BANK",
          "DEUTSCHE SECURITIES INDIA PRIVATE LIMITED",
          "DEVELOPMENT CREDIT BANK LIMITED",
          "DHANLAXMI BANK LTD",
          "DICGC",
          "DOMBIVLI NAGARI SAHAKARI BANK LIMITED",
          "FIRSTRAND BANK LIMITED",
          "GOPINATH PATIL PARSIK JANATA SAHAKARI BANK LTD",
          "GURGAON GRAMIN BANK",
          "HDFC BANK LTD",
          "HSBC",
          "ICICI BANK LTD",
          "IDBI BANK LTD",
          "IDRBT",
          "INDIAN BANK",
          "INDIAN OVERSEAS BANK",
          "INDUSIND BANK LTD",
          "INDUSTRIAL AND COMMERCIAL BANK OF CHINA LIMITED",
          "ING VYSYA BANK LTD",
          "JALGAON JANATA SAHKARI BANK LTD",
          "JANAKALYAN SAHAKARI BANK LTD",
          "JANASEVA SAHAKARI BANK (BORIVLI) LTD",
          "JANASEVA SAHAKARI BANK LTD. PUNE",
          "JANATA SAHAKARI BANK LTD (PUNE)",
          "JPMORGAN CHASE BANK N.A",
          "KALLAPPANNA AWADE ICH JANATA S BANK",
          "KAPOL CO OP BANK",
          "KARNATAKA BANK LTD",
          "KARNATAKA VIKAS GRAMEENA BANK",
          "KARUR VYSYA BANK",
          "KOTAK MAHINDRA BANK",
          "KURMANCHAL NAGAR SAHKARI BANK LTD",
          "MAHANAGAR CO-OP BANK LTD",
          "MAHARASHTRA STATE CO OPERATIVE BANK",
          "MASHREQBANK PSC",
          "MIZUHO CORPORATE BANK LTD",
          "MUMBAI DISTRICT CENTRAL CO-OP. BANK LTD.",
          "NAGPUR NAGRIK SAHAKARI BANK LTD",
          "NATIONAL AUSTRALIA BANK",
          "NEW INDIA CO-OPERATIVE BANK LTD.",
          "NKGSB CO-OP BANK LTD",
          "NORTH MALABAR GRAMIN BANK",
          "NUTAN NAGARIK SAHAKARI BANK LTD",
          "OMAN INTERNATIONAL BANK SAOG",
          "ORIENTAL BANK OF COMMERCE",
          "PARSIK JANATA SAHAKARI BANK LTD",
          "PRATHAMA BANK",
          "PRIME CO OPERATIVE BANK LTD",
          "PUNJAB AND MAHARASHTRA CO-OP BANK LTD.",
          "PUNJAB AND SIND BANK",
          "PUNJAB NATIONAL BANK",
          "RABOBANK INTERNATIONAL (CCRB)",
          "RAJGURUNAGAR SAHAKARI BANK LTD.",
          "RAJKOT NAGARIK SAHAKARI BANK LTD",
          "RESERVE BANK OF INDIA",
          "SBERBANK",
          "SHINHAN BANK",
          "SHRI CHHATRAPATI RAJARSHI SHAHU URBAN CO-OP BANK LTD",
          "SOCIETE GENERALE",
          "SOLAPUR JANATA SAHKARI BANK LTD.SOLAPUR",
          "SOUTH INDIAN BANK",
          "STANDARD CHARTERED BANK",
          "STATE BANK OF BIKANER AND JAIPUR",
          "STATE BANK OF HYDERABAD",
          "STATE BANK OF INDIA",
          "STATE BANK OF MAURITIUS LTD",
          "STATE BANK OF MYSORE",
          "STATE BANK OF PATIALA",
          "STATE BANK OF TRAVANCORE",
          "SUMITOMO MITSUI BANKING CORPORATION",
          "SYNDICATE BANK",
          "TAMILNAD MERCANTILE BANK LTD",
          "THANE BHARAT SAHAKARI BANK LTD",
          "THE A.P. MAHESH CO-OP URBAN BANK LTD.",
          "THE AHMEDABAD MERCANTILE CO-OPERATIVE BANK LTD.",
          "THE ANDHRA PRADESH STATE COOP BANK LTD",
          "THE BANK OF NOVA SCOTIA",
          "THE BANK OF RAJASTHAN LTD",
          "THE BHARAT CO-OPERATIVE BANK (MUMBAI) LTD",
          "THE COSMOS CO-OPERATIVE BANK LTD.",
          "THE DELHI STATE COOPERATIVE BANK LTD.",
          "THE FEDERAL BANK LTD",
          "THE GADCHIROLI DISTRICT CENTRAL COOPERATIVE BANK LTD",
          "THE GREATER BOMBAY CO-OP. BANK LTD",
          "THE GUJARAT STATE CO-OPERATIVE BANK LTD",
          "THE JALGAON PEOPLES CO-OP BANK",
          "THE JAMMU AND KASHMIR BANK LTD",
          "THE KALUPUR COMMERCIAL CO. OP. BANK LTD.",
          "THE KALYAN JANATA SAHAKARI BANK LTD.",
          "THE KANGRA CENTRAL CO-OPERATIVE BANK LTD",
          "THE KANGRA COOPERATIVE BANK LTD",
          "THE KARAD URBAN CO-OP BANK LTD",
          "THE KARNATAKA STATE APEX COOP. BANK LTD.",
          "THE LAKSHMI VILAS BANK LTD",
          "THE MEHSANA URBAN COOPERATIVE BANK LTD",
          "THE MUNICIPAL CO OPERATIVE BANK LTD MUMBAI",
          "THE NAINITAL BANK LIMITED",
          "THE NASIK MERCHANTS CO-OP BANK LTD. NASHIK",
          "THE RAJASTHAN STATE COOPERATIVE BANK LTD.",
          "THE RATNAKAR BANK LTD",
          "THE ROYAL BANK OF SCOTLAND N.V",
          "THE SAHEBRAO DESHMUKH CO-OP. BANK LTD.",
          "THE SARASWAT CO-OPERATIVE BANK LTD",
          "THE SEVA VIKAS CO-OPERATIVE BANK LTD (SVB)",
          "THE SHAMRAO VITHAL CO-OPERATIVE BANK LTD",
          "THE SURAT DISTRICT CO OPERATIVE BANK LTD.",
          "THE SURAT PEOPLES CO-OP BANK LTD",
          "THE SUTEX CO.OP. BANK LTD.",
          "THE TAMILNADU STATE APEX COOPERATIVE BANK LIMITED",
          "THE THANE DISTRICT CENTRAL CO-OP BANK LTD",
          "THE THANE JANATA SAHAKARI BANK LTD",
          "THE VARACHHA CO-OP. BANK LTD.",
          "THE VISHWESHWAR SAHAKARI BANK LTD. PUNE",
          "THE WEST BENGAL STATE COOPERATIVE BANK LTD",
          "TJSB SAHAKARI BANK LTD.",
          "TUMKUR GRAIN MERCHANTS COOPERATIVE BANK LTD.",
          "UBS AG",
          "UCO BANK",
          "UNION BANK OF INDIA",
          "UNITED BANK OF INDIA",
          "UNITED OVERSEAS BANK",
          "VASAI VIKAS SAHAKARI BANK LTD.",
          "VIJAYA BANK",
          "WEST BENGAL STATE COOPERATIVE BANK",
          "WESTPAC BANKING CORPORATION",
          "WOORI BANK",
          "YES BANK LTD",
          "ZILA SAHKARI BANK LTD GHAZIABAD",
          "IDFC First Bank"
        );


        $names = array(
          'Abbott',
          'Acevedo',
          'Acosta',
          'Adams',
          'Adkins',
          'Aguilar',
          'Aguirre',
          'Albert',
          'Alexander',
          'Alford',
          'Allen',
          'Allison',
          'Alston',
          'Alvarado',
          'Alvarez',
          'Anderson',
          'Andrews',
          'Anthony',
          'Armstrong',
          'Arnold',
          'Ashley',
          'Atkins',
          'Atkinson',
          'Austin',
          'Avery',
          'Avila',
          'Ayala',
          'Ayers',
          'Bailey',
          'Baird',
          'Baker',
          'Baldwin',
          'Ball',
          'Ballard',
          'Banks',
          'Barber',
          'Barker',
          'Barlow',
          'Barnes',
          'Barnett',
          'Barr',
          'Barrera',
          'Barrett',
          'Barron',
          'Barry',
          'Bartlett',
          'Barton',
          'Bass',
          'Bates',
          'Battle',
          'Bauer',
          'Baxter',
          'Beach',
          'Bean',
          'Beard',
          'Beasley',
          'Beck',
          'Becker',
          'Bell',
          'Bender',
          'Benjamin',
          'Bennett',
          'Benson',
          'Bentley',
          'Benton',
          'Berg',
          'Berger',
          'Bernard',
          'Berry',
          'Best',
          'Bird',
          'Bishop',
          'Black',
          'Blackburn',
          'Blackwell',
          'Blair',
          'Blake',
          'Blanchard',
          'Blankenship',
          'Blevins',
          'Bolton',
          'Bond',
          'Bonner',
          'Booker',
          'Boone',
          'Booth',
          'Bowen',
          'Bowers',
          'Bowman',
          'Boyd',
          'Boyer',
          'Boyle',
          'Bradford',
          'Bradley',
          'Bradshaw',
          'Brady',
          'Branch',
          'Bray',
          'Brennan',
          'Brewer',
          'Bridges',
          'Briggs',
          'Bright',
          'Britt',
          'Brock',
          'Brooks',
          'Brown',
          'Browning',
          'Bruce',
          'Bryan',
          'Bryant',
          'Buchanan',
          'Buck',
          'Buckley',
          'Buckner',
          'Bullock',
          'Burch',
          'Burgess',
          'Burke',
          'Burks',
          'Burnett',
          'Burns',
          'Burris',
          'Burt',
          'Burton',
          'Bush',
          'Butler',
          'Byers',
          'Byrd',
          'Cabrera',
          'Cain',
          'Calderon',
          'Caldwell',
          'Calhoun',
          'Callahan',
          'Camacho',
          'Cameron',
          'Campbell',
          'Campos',
          'Cannon',
          'Cantrell',
          'Cantu',
          'Cardenas',
          'Carey',
          'Carlson',
          'Carney',
          'Carpenter',
          'Carr',
          'Carrillo',
          'Carroll',
          'Carson',
          'Carter',
          'Carver',
          'Case',
          'Casey',
          'Cash',
          'Castaneda',
          'Castillo',
          'Castro',
          'Cervantes',
          'Chambers',
          'Chan',
          'Chandler',
          'Chaney',
          'Chang',
          'Chapman',
          'Charles',
          'Chase',
          'Chavez',
          'Chen',
          'Cherry',
          'Christensen',
          'Christian',
          'Church',
          'Clark',
          'Clarke',
          'Clay',
          'Clayton',
          'Clements',
          'Clemons',
          'Cleveland',
          'Cline',
          'Cobb',
          'Cochran',
          'Coffey',
          'Cohen',
          'Cole',
          'Coleman',
          'Collier',
          'Collins',
          'Colon',
          'Combs',
          'Compton',
          'Conley',
          'Conner',
          'Conrad',
          'Contreras',
          'Conway',
          'Cook',
          'Cooke',
          'Cooley',
          'Cooper',
          'Copeland',
          'Cortez',
          'Cote',
          'Cotton',
          'Cox',
          'Craft',
          'Craig',
          'Crane',
          'Crawford',
          'Crosby',
          'Cross',
          'Cruz',
          'Cummings',
          'Cunningham',
          'Curry',
          'Curtis',
          'Dale',
          'Dalton',
          'Daniel',
          'Daniels',
          'Daugherty',
          'Davenport',
          'David',
          'Davidson',
          'Davis',
          'Dawson',
          'Day',
          'Dean',
          'Decker',
          'Dejesus',
          'Delacruz',
          'Delaney',
          'Deleon',
          'Delgado',
          'Dennis',
          'Diaz',
          'Dickerson',
          'Dickson',
          'Dillard',
          'Dillon',
          'Dixon',
          'Dodson',
          'Dominguez',
          'Donaldson',
          'Donovan',
          'Dorsey',
          'Dotson',
          'Douglas',
          'Downs',
          'Doyle',
          'Drake',
          'Dudley',
          'Duffy',
          'Duke',
          'Duncan',
          'Dunlap',
          'Dunn',
          'Duran',
          'Durham',
          'Dyer',
          'Eaton',
          'Edwards',
          'Elliott',
          'Ellis',
          'Ellison',
          'Emerson',
          'England',
          'English',
          'Erickson',
          'Espinoza',
          'Estes',
          'Estrada',
          'Evans',
          'Everett',
          'Ewing',
          'Farley',
          'Farmer',
          'Farrell',
          'Faulkner',
          'Ferguson',
          'Fernandez',
          'Ferrell',
          'Fields',
          'Figueroa',
          'Finch',
          'Finley',
          'Fischer',
          'Fisher',
          'Fitzgerald',
          'Fitzpatrick',
          'Fleming',
          'Fletcher',
          'Flores',
          'Flowers',
          'Floyd',
          'Flynn',
          'Foley',
          'Forbes',
          'Ford',
          'Foreman',
          'Foster',
          'Fowler',
          'Fox',
          'Francis',
          'Franco',
          'Frank',
          'Franklin',
          'Franks',
          'Frazier',
          'Frederick',
          'Freeman',
          'French',
          'Frost',
          'Fry',
          'Frye',
          'Fuentes',
          'Fuller',
          'Fulton',
          'Gaines',
          'Gallagher',
          'Gallegos',
          'Galloway',
          'Gamble',
          'Garcia',
          'Gardner',
          'Garner',
          'Garrett',
          'Garrison',
          'Garza',
          'Gates',
          'Gay',
          'Gentry',
          'George',
          'Gibbs',
          'Gibson',
          'Gilbert',
          'Giles',
          'Gill',
          'Gillespie',
          'Gilliam',
          'Gilmore',
          'Glass',
          'Glenn',
          'Glover',
          'Goff',
          'Golden',
          'Gomez',
          'Gonzales',
          'Gonzalez',
          'Good',
          'Goodman',
          'Goodwin',
          'Gordon',
          'Gould',
          'Graham',
          'Grant',
          'Graves',
          'Gray',
          'Green',
          'Greene',
          'Greer',
          'Gregory',
          'Griffin',
          'Griffith',
          'Grimes',
          'Gross',
          'Guerra',
          'Guerrero',
          'Guthrie',
          'Gutierrez',
          'Guy',
          'Guzman',
          'Hahn',
          'Hale',
          'Haley',
          'Hall',
          'Hamilton',
          'Hammond',
          'Hampton',
          'Hancock',
          'Haney',
          'Hansen',
          'Hanson',
          'Hardin',
          'Harding',
          'Hardy',
          'Harmon',
          'Harper',
          'Harrell',
          'Harrington',
          'Harris',
          'Harrison',
          'Hart',
          'Hartman',
          'Harvey',
          'Hatfield',
          'Hawkins',
          'Hayden',
          'Hayes',
          'Haynes',
          'Hays',
          'Head',
          'Heath',
          'Hebert',
          'Henderson',
          'Hendricks',
          'Hendrix',
          'Henry',
          'Hensley',
          'Henson',
          'Herman',
          'Hernandez',
          'Herrera',
          'Herring',
          'Hess',
          'Hester',
          'Hewitt',
          'Hickman',
          'Hicks',
          'Higgins',
          'Hill',
          'Hines',
          'Hinton',
          'Hobbs',
          'Hodge',
          'Hodges',
          'Hoffman',
          'Hogan',
          'Holcomb',
          'Holden',
          'Holder',
          'Holland',
          'Holloway',
          'Holman',
          'Holmes',
          'Holt',
          'Hood',
          'Hooper',
          'Hoover',
          'Hopkins',
          'Hopper',
          'Horn',
          'Horne',
          'Horton',
          'House',
          'Houston',
          'Howard',
          'Howe',
          'Howell',
          'Hubbard',
          'Huber',
          'Hudson',
          'Huff',
          'Huffman',
          'Hughes',
          'Hull',
          'Humphrey',
          'Hunt',
          'Hunter',
          'Hurley',
          'Hurst',
          'Hutchinson',
          'Hyde',
          'Ingram',
          'Irwin',
          'Jackson',
          'Jacobs',
          'Jacobson',
          'James',
          'Jarvis',
          'Jefferson',
          'Jenkins',
          'Jennings',
          'Jensen',
          'Jimenez',
          'Johns',
          'Johnson',
          'Johnston',
          'Jones',
          'Jordan',
          'Joseph',
          'Joyce',
          'Joyner',
          'Juarez',
          'Justice',
          'Kane',
          'Kaufman',
          'Keith',
          'Keller',
          'Kelley',
          'Kelly',
          'Kemp',
          'Kennedy',
          'Kent',
          'Kerr',
          'Key',
          'Kidd',
          'Kim',
          'King',
          'Kinney',
          'Kirby',
          'Kirk',
          'Kirkland',
          'Klein',
          'Kline',
          'Knapp',
          'Knight',
          'Knowles',
          'Knox',
          'Koch',
          'Kramer',
          'Lamb',
          'Lambert',
          'Lancaster',
          'Landry',
          'Lane',
          'Lang',
          'Langley',
          'Lara',
          'Larsen',
          'Larson',
          'Lawrence',
          'Lawson',
          'Le',
          'Leach',
          'Leblanc',
          'Lee',
          'Leon',
          'Leonard',
          'Lester',
          'Levine',
          'Levy',
          'Lewis',
          'Lindsay',
          'Lindsey',
          'Little',
          'Livingston',
          'Lloyd',
          'Logan',
          'Long',
          'Lopez',
          'Lott',
          'Love',
          'Lowe',
          'Lowery',
          'Lucas',
          'Luna',
          'Lynch',
          'Lynn',
          'Lyons',
          'Macdonald',
          'Macias',
          'Mack',
          'Madden',
          'Maddox',
          'Maldonado',
          'Malone',
          'Mann',
          'Manning',
          'Marks',
          'Marquez',
          'Marsh',
          'Marshall',
          'Martin',
          'Martinez',
          'Mason',
          'Massey',
          'Mathews',
          'Mathis',
          'Matthews',
          'Maxwell',
          'May',
          'Mayer',
          'Maynard',
          'Mayo',
          'Mays',
          'Mcbride',
          'Mccall',
          'Mccarthy',
          'Mccarty',
          'Mcclain',
          'Mcclure',
          'Mcconnell',
          'Mccormick',
          'Mccoy',
          'Mccray',
          'Mccullough',
          'Mcdaniel',
          'Mcdonald',
          'Mcdowell',
          'Mcfadden',
          'Mcfarland',
          'Mcgee',
          'Mcgowan',
          'Mcguire',
          'Mcintosh',
          'Mcintyre',
          'Mckay',
          'Mckee',
          'Mckenzie',
          'Mckinney',
          'Mcknight',
          'Mclaughlin',
          'Mclean',
          'Mcleod',
          'Mcmahon',
          'Mcmillan',
          'Mcneil',
          'Mcpherson',
          'Meadows',
          'Medina',
          'Mejia',
          'Melendez',
          'Melton',
          'Mendez',
          'Mendoza',
          'Mercado',
          'Mercer',
          'Merrill',
          'Merritt',
          'Meyer',
          'Meyers',
          'Michael',
          'Middleton',
          'Miles',
          'Miller',
          'Mills',
          'Miranda',
          'Mitchell',
          'Molina',
          'Monroe',
          'Montgomery',
          'Montoya',
          'Moody',
          'Moon',
          'Mooney',
          'Moore',
          'Morales',
          'Moran',
          'Moreno',
          'Morgan',
          'Morin',
          'Morris',
          'Morrison',
          'Morrow',
          'Morse',
          'Morton',
          'Moses',
          'Mosley',
          'Moss',
          'Mueller',
          'Mullen',
          'Mullins',
          'Munoz',
          'Murphy',
          'Murray',
          'Myers',
          'Nash',
          'Navarro',
          'Neal',
          'Nelson',
          'Newman',
          'Newton',
          'Nguyen',
          'Nichols',
          'Nicholson',
          'Nielsen',
          'Nieves',
          'Nixon',
          'Noble',
          'Noel',
          'Nolan',
          'Norman',
          'Norris',
          'Norton',
          'Nunez',
          'Obrien',
          'Ochoa',
          'Oconnor',
          'Odom',
          'Odonnell',
          'Oliver',
          'Olsen',
          'Olson',
          'Oneal',
          'Oneil',
          'Oneill',
          'Orr',
          'Ortega',
          'Ortiz',
          'Osborn',
          'Osborne',
          'Owen',
          'Owens',
          'Pace',
          'Pacheco',
          'Padilla',
          'Page',
          'Palmer',
          'Park',
          'Parker',
          'Parks',
          'Parrish',
          'Parsons',
          'Pate',
          'Patel',
          'Patrick',
          'Patterson',
          'Patton',
          'Paul',
          'Payne',
          'Pearson',
          'Peck',
          'Pena',
          'Pennington',
          'Perez',
          'Perkins',
          'Perry',
          'Peters',
          'Petersen',
          'Peterson',
          'Petty',
          'Phelps',
          'Phillips',
          'Pickett',
          'Pierce',
          'Pittman',
          'Pitts',
          'Pollard',
          'Poole',
          'Pope',
          'Porter',
          'Potter',
          'Potts',
          'Powell',
          'Powers',
          'Pratt',
          'Preston',
          'Price',
          'Prince',
          'Pruitt',
          'Puckett',
          'Pugh',
          'Quinn',
          'Ramirez',
          'Ramos',
          'Ramsey',
          'Randall',
          'Randolph',
          'Rasmussen',
          'Ratliff',
          'Ray',
          'Raymond',
          'Reed',
          'Reese',
          'Reeves',
          'Reid',
          'Reilly',
          'Reyes',
          'Reynolds',
          'Rhodes',
          'Rice',
          'Rich',
          'Richard',
          'Richards',
          'Richardson',
          'Richmond',
          'Riddle',
          'Riggs',
          'Riley',
          'Rios',
          'Rivas',
          'Rivera',
          'Rivers',
          'Roach',
          'Robbins',
          'Roberson',
          'Roberts',
          'Robertson',
          'Robinson',
          'Robles',
          'Rocha',
          'Rodgers',
          'Rodriguez',
          'Rodriquez',
          'Rogers',
          'Rojas',
          'Rollins',
          'Roman',
          'Romero',
          'Rosa',
          'Rosales',
          'Rosario',
          'Rose',
          'Ross',
          'Roth',
          'Rowe',
          'Rowland',
          'Roy',
          'Ruiz',
          'Rush',
          'Russell',
          'Russo',
          'Rutledge',
          'Ryan',
          'Salas',
          'Salazar',
          'Salinas',
          'Sampson',
          'Sanchez',
          'Sanders',
          'Sandoval',
          'Sanford',
          'Santana',
          'Santiago',
          'Santos',
          'Sargent',
          'Saunders',
          'Savage',
          'Sawyer',
          'Schmidt',
          'Schneider',
          'Schroeder',
          'Schultz',
          'Schwartz',
          'Scott',
          'Sears',
          'Sellers',
          'Serrano',
          'Sexton',
          'Shaffer',
          'Shannon',
          'Sharp',
          'Sharpe',
          'Shaw',
          'Shelton',
          'Shepard',
          'Shepherd',
          'Sheppard',
          'Sherman',
          'Shields',
          'Short',
          'Silva',
          'Simmons',
          'Simon',
          'Simpson',
          'Sims',
          'Singleton',
          'Skinner',
          'Slater',
          'Sloan',
          'Small',
          'Smith',
          'Snider',
          'Snow',
          'Snyder',
          'Solis',
          'Solomon',
          'Sosa',
          'Soto',
          'Sparks',
          'Spears',
          'Spence',
          'Spencer',
          'Stafford',
          'Stanley',
          'Stanton',
          'Stark',
          'Steele',
          'Stein',
          'Stephens',
          'Stephenson',
          'Stevens',
          'Stevenson',
          'Stewart',
          'Stokes',
          'Stone',
          'Stout',
          'Strickland',
          'Strong',
          'Stuart',
          'Suarez',
          'Sullivan',
          'Summers',
          'Sutton',
          'Swanson',
          'Sweeney',
          'Sweet',
          'Sykes',
          'Talley',
          'Tanner',
          'Tate',
          'Taylor',
          'Terrell',
          'Terry',
          'Thomas',
          'Thompson',
          'Thornton',
          'Tillman',
          'Todd',
          'Torres',
          'Townsend',
          'Tran',
          'Travis',
          'Trevino',
          'Trujillo',
          'Tucker',
          'Turner',
          'Tyler',
          'Tyson',
          'Underwood',
          'Valdez',
          'Valencia',
          'Valentine',
          'Valenzuela',
          'Vance',
          'Vang',
          'Vargas',
          'Vasquez',
          'Vaughan',
          'Vaughn',
          'Vazquez',
          'Vega',
          'Velasquez',
          'Velazquez',
          'Velez',
          'Villarreal',
          'Vincent',
          'Vinson',
          'Wade',
          'Wagner',
          'Walker',
          'Wall',
          'Wallace',
          'Waller',
          'Walls',
          'Walsh',
          'Walter',
          'Walters',
          'Walton',
          'Ward',
          'Ware',
          'Warner',
          'Warren',
          'Washington',
          'Waters',
          'Watkins',
          'Watson',
          'Watts',
          'Weaver',
          'Webb',
          'Weber',
          'Webster',
          'Weeks',
          'Weiss',
          'Welch',
          'Wells',
          'West',
          'Wheeler',
          'Whitaker',
          'White',
          'Whitehead',
          'Whitfield',
          'Whitley',
          'Whitney',
          'Wiggins',
          'Wilcox',
          'Wilder',
          'Wiley',
          'Wilkerson',
          'Wilkins',
          'Wilkinson',
          'William',
          'Williams',
          'Williamson',
          'Willis',
          'Wilson',
          'Winters',
          'Wise',
          'Witt',
          'Wolf',
          'Wolfe',
          'Wong',
          'Wood',
          'Woodard',
          'Woods',
          'Woodward',
          'Wooten',
          'Workman',
          'Wright',
          'Wyatt',
          'Wynn',
          'Yang',
          'Yates',
          'York',
          'Young',
          'Zamora',
          'Zimmerman'
        );

        $first_name = $names[array_rand($names, 1)];
        $last_name = $names[array_rand($names, 1)];
        $randomType = array('Checking', 'Savings');
        $randomReceiver = $ranSz[array_rand($ranSz, 1)];

        $randomName = $first_name . ' ' . $last_name;
        $receiverBank = $randomReceiver;
        $transType = $this->request->getVar("type");
        $user_name = $this->request->getVar("name");
        $user_id = $this->request->getVar("user_id");
        $admin_id = $this->request->getVar("admin_id");
        $user_account = $this->request->getVar("acc");
        $from = $this->request->getVar("from");
        $to = $this->request->getVar("to");
        $recordsLimit = $this->request->getVar("num");
        $min = $this->request->getVar("min");
        $max = $this->request->getVar("max");

        $time = rand(strtotime($from), strtotime($to));
        $created_at = date("Y-m-d H:i:s", $time);

        $txMonth = date("F Y", $time);
        $randomAmount = rand($min, $max);
        $randomBalance = (rand(1000, 999999) + $randomAmount) - $min;
        $reference = rand(100000, 999999);
        $randomSender = $randomType[array_rand($randomType, 1)];

        if ($transType === 'Credit') {

          $value =
            [
              "user_id" => $user_id,
              "amount" => $randomAmount,
              "bank_name" => $site['company_name'],
              "receiver_name" => $user_name,
              "receiver_acc" => $user_account,
              "month" => $txMonth,
              "balance" => $randomBalance,
              "reference" => $reference,
              "sender_id" => $randomName,
              "type" => 'Credit',
              "sender_acc" => $randomSender,
              "bank_address" => $site['company_address'],
              "swift" => strtoupper($site['abrv']) . 'XXX',
              "routing" => $site['bank_routing'],
              "created_at" => $created_at,
              "remarks" => $reference . ' Credit'
            ];

          $TransferModel = new TransferModel();
          $TransferModel->save($value);
        } else {
          $value =
            [
              "user_id" => $user_id,
              "amount" => $randomAmount,
              "bank_name" => $receiverBank,
              "receiver_name" => $randomName,
              "receiver_acc" => rand(100000000000, 999999999999),
              "month" => $txMonth,
              "balance" => $randomBalance,
              "reference" => $reference,
              "sender_id" => $user_name,
              "type" => 'Debit',
              "sender_acc" => $user_account,
              "bank_address" => 'From ' . $site['company_name'],
              "swift" => $this->swift(),
              "routing" => rand(100000000, 999999999),
              "created_at" => $created_at,
              "remarks" => $reference . ' Debit'
            ];

          $TransferModel = new TransferModel();
          $TransferModel->save($value);
        }

        $i = isset($_SESSION['i']) ? $_SESSION['i'] : 0;
        $runningTime = ++$i;
        $_SESSION['i'] = $i;

        if ($runningTime < $recordsLimit) {
          $admin['page'] = 'Automatic Transaction History Generator';
          $admin['meta'] = '<meta http-equiv="refresh" content="1">';
          $admin['Anumber'] = $recordsLimit;
          $admin['runningTime'] = $runningTime;
          $data = array_merge($admin, $site);
          return view("admin/header", $data) .
            view("admin/records-generator", $data) .
            view("admin/footer", $data);
        } else {
          return $this->endGenerator($user_id, $admin_id);
        }
      } else {
        return redirect()->to("auth/admin");
      }
    }
  }


  /*******************
   * LOGOUT
   ********************/
  public function endGenerator($user_id, $admin_id)
  {
    session()->destroy();
    return redirect()->to("auth/generatorLogin?id=$admin_id&url=admin/manage?id=$user_id");
  }
  public function logout()
  {

    if ($this->request->getGet("url")) {
      $redirect = redirect()->to("auth/admin?url=" . $this->request->getGet("url"));
    } else {
      $redirect = redirect()->to("auth/admin");
    }
    session()->destroy();
    return $redirect;
  }
}
