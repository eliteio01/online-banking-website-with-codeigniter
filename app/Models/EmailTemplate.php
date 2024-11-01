<?php
namespace App\Models;
use CodeIgniter\Model;

class EmailTemplate extends Model {

  protected $DBGroup = 'default';
  protected $table = 'email_template';
  protected $allowedFields = [ 
    'name',
    'subject',
    'body',
    'created_at',
    'updated_at'
  ];
  
  
}