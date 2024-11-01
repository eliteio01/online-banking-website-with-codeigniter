<?php

namespace App\Controllers;

use App\Models\FaqModel;
use App\Models\TestimonialModel;
use App\Models\BasicModel;

class Pages extends License
{

  public

  function index()
  {
    return redirect()->to(base_url());
  }

  public

  function view($page = 'home')
  {

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

    $data['page'] = ucfirst(str_replace('-', ' ', $page));
    return view("template/$this->template/header", $data)
      . view("template/$this->template/$page", $data)
      . view("template/$this->template/footer", $data);
  }

  public function otp_verification()
  {
    $data = $this->site;
    $data['page'] = 'OTP Verification';
    return view("template/$this->template/header", $data)
      . view("template/$this->template/otp_verification", $data)
      . view("template/$this->template/footer", $data);
  }
  public function verify_otp()
  {
    
    $inputOtp = $this->request->getPost('otp');
    $sessionOtp = session()->get('otp');
  
      if ($inputOtp == $sessionOtp) {
          $ses_data = [
              "user_id" => session()->get('otp_user_id'),
          ];
  
          session()->set($ses_data);
  
          // Remove OTP and related session data
          session()->remove('otp');

          // OTP is correct, proceed with login or next steps
          session()->setFlashdata('msg', 'OTP verified successfully.');
          // Redirect to the user dashboard or another page
          return redirect()->to("user");
      } else {
          // OTP is incorrect
          session()->setFlashdata('msg', 'Invalid OTP. Please try again.');
          return redirect()->to('otp-verification');
      }
  }
  
}
