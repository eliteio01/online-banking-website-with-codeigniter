<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PaymentGateway;
use App\Models\TransferModel;
use App\Models\EmailTemplate;
use App\Models\NotificationModel;
use App\Models\SupportModel;
use App\Models\AdminModel;
use App\Models\FaqModel;
use App\Models\TestimonialModel;
use Hermawan\DataTables\DataTable;

class Tables extends License
  {
  public function index()
    {
    /**************************
     * USERS
     ***************************/
    if ($this->request->getGet("users") && session()->get("admin")) {
      $builder = new UserModel();
      $builder->select("id, account_id, name, email, created_at, status, check_balance, savings_balance, currency");
      return DataTable::of($builder)
        ->edit("id", function ($row) {
          return '<div class="custom-control custom-control-inline custom-checkbox float-right">
					<input type="checkbox" name="all[]" value="' . $row->id . '" class="custom-control-input checkbox" id="' . $row->id . '" onclick="showbtn()"> <label class="custom-control-label" for="' . $row->id . '"></label>
			    </div>';
          })
        ->edit("created_at", function ($row) {
          return date("jS F\, Y H:i A", strtotime($row->created_at));
          })
        ->edit("check_balance", function ($row) {
          return $row->currency.' '.number_format($row->check_balance, 2);
          })
        ->edit("savings_balance", function ($row) {
          return $row->currency.' '.number_format($row->savings_balance, 2);
          })
        ->add("action", function ($row) {
          return '<a href="' . base_url("admin/manage?id=" . $row->id) . '" class="btn btn-sm btn-primary">Manage</a> 
                                <a href="' . base_url("admin/delete_records?id=" . $row->id . "&delete_user=1") . '" class="btn btn-sm btn-danger" onClick="return(confirm(\'Are you sure that you want to delete?\'))">Delete</a>';
          }, "last")
        ->hide("currency")
        ->toJson();
      }

    /**************************
     * ADMIN ACCOUNTS
     ***************************/
    elseif ($this->request->getGet("accounts") && session()->get("admin")) {
      $builder = new AdminModel();
      $builder->select("admin_username, admin_email, updated_at, role, id");
      return DataTable::of($builder)
        ->edit("updated_at", function ($row) {
          return date("jS F\, Y H:i A", strtotime($row->updated_at));
          })
        ->edit("role", function ($row) {
          if ($row->role == 1) {
            return 'Super Admin';
            }
          else {
            return 'Moderator';
            }
          })
        ->add("action", function ($row) {
          if ($row->role == 1) {
            return '
                            <a href="' . base_url('admin/accounts?manage=1&id=' . $row->id) . '" class="btn btn-sm btn-primary">Edit</a>';
            }
          else {
            return '
                            <a href="' . base_url('admin/accounts?manage=1&id=' . $row->id) . '" class="btn btn-sm btn-primary">Edit</a>
                            <a href="' . base_url('admin/delete_records?delete_admin=1&id=' . $row->id) . '" onClick="return(confirm(\'Are you sure that you want to delete?\'))" class="btn btn-sm btn-danger">Delete</a>
                            ';
            }
          }, "last")
        ->hide("id")
        ->toJson();
      }

    /**************************
     * WALLETS
     ***************************/
    elseif ($this->request->getGet("wallets") && session()->get("admin")) {
      if ($this->request->getGet("wallets") === 'Auto') {
        $value = ["api" => 1];
        }
      else if ($this->request->getGet("wallets") === 'Manual') {
        $value = ["api" => 0];
        }
      $builder = new PaymentGateway();
      $builder->select("name, status, updated_at, ticker,  id, api")->where($value);
      return DataTable::of($builder)
        ->edit("updated_at", function ($row) {
          return date("jS F\, Y H:i A", strtotime($row->updated_at));
          })
        ->edit("ticker", function ($row) {
          return strtoupper($row->ticker);
          })
        ->edit("status", function ($row) {
          if ($row->status == 1) {
            return '<div class="badge badge-success"><strong>ACTIVE</strong></div>';
            }
          else {
            return '<div class="badge badge-danger"><strong>INACTIVE</strong></div>';
            }
          })
        ->add("action", function ($row) {
          if ($row->status == 1) {
            $txt = '<input type="submit" name="status" value="Deactivate" class="btn btn-danger">';
            }
          else {
            $txt = '<input type="submit" name="status" value="Activate" class="btn btn-success">';
            }

          if ($row->api == 0) {
            $del =
              '
                              &nbsp;
                            <form method="post" action="' . base_url('admin/delete_records') . '" onSubmit="return(confirm(\'Are you sure that you want to delete?. This action is not reversible!\'))">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="submit" name="delete_wallet" value="Delete" class="btn btn-info">
                            </form>
                              ';
            }
          else {
            $del = '';
            }

          return '
                          <div class="d-xl-flex d-flex flex-row">
                            <form method="post" action="' . base_url('admin/wallets') . '">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="hidden" name="stat" value="' . $row->status . '">
                              ' . $txt . '
                            </form>
                            &nbsp;
                            <form method="post" action="' . base_url('admin/wallets') . '">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="submit" name="manage" value="Edit" class="btn btn-primary">
                            </form>
                            ' . $del . '
                          </div>
                            ';
          }, "last")
        ->hide("id")
        ->hide("api")
        ->toJson();


        
      }
      


    /**************************
     * FAQS
     ***************************/
    elseif ($this->request->getGet("faqs") && session()->get("admin")) {

      $builder = new FaqModel();
      $builder->select("id, question, updated_at");
      return DataTable::of($builder)
        ->edit("updated_at", function ($row) {
          return date("jS F\, Y H:i A", strtotime($row->updated_at));
          })
        ->add("action", function ($row) {


          return '
                          <div class="d-xl-flex d-flex flex-row">
                            <form method="post" action="' . base_url('admin/faqs') . '">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                            </form>
                            &nbsp;
                            <form method="post" action="' . base_url('admin/faqs') . '" onSubmit="return(confirm(\'Are you sure that you want to Delete?\'))">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="submit" name="delete" value="Delete" class="btn btn-info">
                            </form>
                          </div>
                            ';
          }, "last")
        ->hide("id")
        ->toJson();

      }


    /**************************
     * TESTIMONIALS
     ***************************/
    elseif ($this->request->getGet("testimonials") && session()->get("admin")) {

      $builder = new TestimonialModel();
      $builder->select("id, name, image, updated_at");
      return DataTable::of($builder)
        ->edit("updated_at", function ($row) {
          return date("jS F\, Y H:i A", strtotime($row->updated_at));
          })
        ->edit("image", function ($row) {
          if (empty($row->image)) {
            return '<img src="' . base_url('uploads/user-default.png') . '" style="height:50px;width:50px;border-radius:50%">';
            }
          else {
            return '<a href="' . base_url('uploads/' . $row->image) . '" target="_blank"><img src="' . base_url('uploads/' . $row->image) . '" style="height:50px;width:50px;border-radius:50%"></a>';
            }
          })
        ->add("action", function ($row) {

          return '
                          <div class="d-xl-flex d-flex flex-row">
                            <form method="post" action="' . base_url('admin/testimonials') . '">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                            </form>
                            &nbsp;
                            <form method="post" action="' . base_url('admin/testimonials') . '" onSubmit="return(confirm(\'Are you sure that you want to Delete?\'))">
                              <input type="hidden" name="id" value="' . $row->id . '">
                              <input type="submit" name="delete" value="Delete" class="btn btn-info">
                            </form>
                          </div>
                            ';
          }, "last")
        ->hide("id")
        ->toJson();

      }

    /**************************
     * SUPPORT TICKETS
     ***************************/
    elseif ($this->request->getGet("tickets") && session()->get("admin")) {
      $builder = new SupportModel();
      $builder->select("id, name, email, created_at, subject, reference, status, user_id");
      return DataTable::of($builder)
        ->edit("id", function ($row) {
          return '<div class="custom-control custom-control-inline custom-checkbox float-right">
					<input type="checkbox" name="all[]" value="' . $row->id . '" class="custom-control-input checkbox" id="' . $row->id . '" onclick="showbtn()"> <label class="custom-control-label" for="' . $row->id . '"></label>
			</div>';
          })
        ->edit("email", function ($row) {
          return '<a href="' . base_url('admin/manage?id=' . $row->user_id) . '">' . $row->email . '</a>';
          })
        ->edit("created_at", function ($row) {
          return date("jS F\, Y H:i A", strtotime($row->created_at));
          })
        ->edit("status", function ($row) {
          if ($row->status == 0) {
            return '<span class="badge badge-danger">PENDING</span>';
            }
          else {
            return '<span class="badge badge-success">SEEN</span>';
            }
          })
        ->add("action", function ($row) {
          return '
                            <a href="' . base_url('admin/tickets?open=1&id=' . $row->id) . '" class="btn btn-sm btn-primary">Open</a>
                            <a href="' . base_url('admin/delete_records?ticket=1&id=' . $row->id) . '" onClick="return(confirm(\'Are you sure that you want to delete?\'))" class="btn btn-sm btn-danger">Delete</a>
                            ';
          }, "last")
        ->hide("user_id")
        ->toJson();
      }


    /**************************
     * EMAIL TEMPLATES
     ***************************/
    elseif ($this->request->getGet("template") && session()->get("admin")) {
      $builder = new EmailTemplate();
      $builder->select("name, id");
      return DataTable::of($builder)
        ->add("action", function ($row) {
          return '
                            <form method="POST" class="d-xl-flex d-flex flex-row">
																<input type="hidden" name="id" value="' . $row->id . '">
																<input type="submit" name="edit" value="Edit" class="btn btn-sm btn-primary" style="margin-top: 3px">
															</form>
                            ';
          }, "last")
        ->hide("id")
        ->toJson();
      }

    /**************************
     * USERS MANAGEMENT
     ***************************/
    else if ($this->request->getGet("statement") && session()->get("admin")) {

      $Model = new TransferModel();
      $main = $this->request->getGet("main");
      $Model->select("id, created_at,type,remarks,amount,reference,sender_acc,bank_name,receiver_acc")->where("receiver_acc", $main)->orwhere("sender_acc", $main);

      return DataTable::of($Model)
        ->edit("id", function ($row) {
          return '<div class="custom-control custom-control-inline custom-checkbox float-right">
					<input type="checkbox" name="all[]" value="' . $row->id . '" class="custom-control-input checkbox" id="' . $row->id . '" onclick="showbtn'. $this->request->getGet("acc").'()"> <label class="custom-control-label" for="' . $row->id . '"></label>
			</div>';
          })
        ->edit("created_at", function ($row) {
          return date("jS F\, Y", strtotime($row->created_at));
          })
        ->edit("amount", function ($row) {
          return $this->request->getGet("currency") . number_format($row->amount, 2);
          })
        ->edit("remarks", function ($row) {
          return $row->sender_acc . '/' . $row->bank_name . '/'. $row->remarks . '...';
          })
        ->edit("type", function ($row) {
          if ($row->receiver_acc === $this->request->getGet("main") && $row->sender_acc !== $this->request->getGet("main")) {
            return '<span class="text-success">Credit</span>';
            }
          else {
            return '<span class="text-danger">Debit</span>';
            }
          })
        ->add("action", function ($row) {
          return '<a href="' . base_url('admin/receipt?ref=' . $row->reference . '&id=receipt') . '" class="btn btn-sm btn-success">RECEIPT</a>
                  <a href="' . base_url('admin/edit?edit=' . $row->id) . '" class="btn btn-sm btn-primary">Edit</a>';
          }, "last")
        ->hide("sender_acc")
        ->hide("receiver_acc")
        ->hide("bank_name")
        ->toJson();
      }
    else {
      return redirect()->to("admin");
      }
    }


  /**************************
   * USER TABLES 
   ***************************/
  public function user()
    {
     if ($this->request->getGet("statement") && session()->get("user_id")) {

      $Model = new TransferModel();
      $main = $this->request->getGet("main");
      $Model->select("created_at,type,amount,reference,sender_acc,receiver_acc")->where("receiver_acc", $main)->orwhere("sender_acc", $main);

      return DataTable::of($Model)
        ->edit("created_at", function ($row) {
          return date("jS F\, Y", strtotime($row->created_at));
          })
        ->edit("amount", function ($row) {
          return $this->request->getGet("currency") . number_format($row->amount, 2);
          })
        ->edit("type", function ($row) {
          if ($row->receiver_acc === $this->request->getGet("main") && $row->sender_acc !== $this->request->getGet("main")) {
            return '<span class="text-success">Credit</span>';
            }
          else {
            return '<span class="text-danger">Debit</span>';
            }
          })
        ->add("action", function ($row) {
          return '<a href="' . base_url('user/success?ref=' . $row->reference . '&id=receipt') . '" class="btn btn-sm btn-primary">RECEIPT</a>';
          }, "last")
        ->hide("reference")
        ->hide("sender_acc")
        ->hide("receiver_acc")
        ->toJson();
      }
    else if ($this->request->getGet("Notifications") && session()->get("user_id")) {

      $id = session()->get("user_id");
      $value = ["user_id" => $id];
      $Model = new NotificationModel();
      $Model->select("created_at, id, subject, reference, status")->where($value);

      return DataTable::of($Model)
        ->edit("created_at", function ($row) {
          return date("jS F\, Y", strtotime($row->created_at));
          })
        ->edit("id", function ($row) {
          return '<form method="post" action="' . base_url('user/notifications') . '">
									                 <input type="hidden" name="id" value="' . $row->id . '">
									                 <input type="submit" class="btn btn-sm btn-primary" value="Open" name="read">
								                  </form>';
          })
        ->edit("status", function ($row) {
          if ($row->status == 0) {
            return '<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%">NOT SEEN</div>';
            }
          else {
            return '<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">SEEN</div>';
            }
          })
        ->add("action", function ($row) {
          return '
                                <form method="post" action="' . base_url('user/notifications') . '" onSubmit="return(confirm(\'Click OK to Delete\'))">
									               <input type="hidden" name="id" value="' . $row->id . '">
									               <input type="submit" class="btn btn-sm btn-danger" value="Delete" name="delete">
                                </form>';
          }, "last")
        ->toJson();
      }
    else if ($this->request->getGet("Loan") && session()->get("user_id")) {
      $Model = new SupportModel();
      $id = session()->get("user_id");
      $value = ["user_id" => "$id", "loan" => 1];
      $Model->select("created_at, subject, reference, status")->where($value);
      return DataTable::of($Model)
        ->edit("created_at", function ($row) {
          return date("jS F\, Y", strtotime($row->created_at));
          })
        ->edit("status", function ($row) {
          if ($row->status == 0) {
            return '<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%">Pending</div>';
            }
          else {
            return '<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">Received</div>';
            }
          })
        ->toJson();
      }
    else if ($this->request->getGet("Support") && session()->get("user_id")) {
      $Model = new SupportModel();
      $id = session()->get("user_id");
      $value = ["user_id" => "$id", "loan" => 0];
      $Model->select("created_at, subject, reference, status")->where($value);
      return DataTable::of($Model)
        ->edit("created_at", function ($row) {
          return date("jS F\, Y", strtotime($row->created_at));
          })
        ->edit("status", function ($row) {
          if ($row->status == 0) {
            return '<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%">Pending</div>';
            }
          else {
            return '<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">Received</div>';
            }
          })
        ->toJson();
      }


    }

  }