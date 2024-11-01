<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model {

  protected $DBGroup = 'default';
  protected $table = 'admin';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $allowedFields = [
    'admin_username',
    'role',
    'admin_password',
    'admin_email',
    'token',
    'created_at',
    'updated_at'
  ];
}