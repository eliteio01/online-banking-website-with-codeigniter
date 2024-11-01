<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
  {

  protected $DBGroup = 'default';
  protected $table = 'accounts';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = [
    'account_id',
    'name',
    'status',
    'savings_acc',
    'check_acc',
    'savings_balance',
    'check_balance',
    'email',
    'currency',
    'password',
    'phone',
    'city',
    'country',
    'address',
    'zip',
    'dob',
    'gender',
    'occupation',
    'pin',
    'cot',
    'tax',
    'imf',
    'otp',
    'image',
    'creditCard',
    'expire',
    'ip',
    'lastDate',
    'lastTime',
    'lastUrl',
    'allow_upload',
    'allow_codes',
    'allow_beneficiary',
    'created_at',
    'updated_at'

  ];


  }