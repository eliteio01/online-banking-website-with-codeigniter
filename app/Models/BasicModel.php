<?php
namespace App\Models;
use CodeIgniter\Model;

class BasicModel extends Model {

  protected $DBGroup = 'default';
  protected $table = 'basic';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $allowedFields = [
    'title',
    'value',
    'created_at',
    'updated_at'
  ];
}