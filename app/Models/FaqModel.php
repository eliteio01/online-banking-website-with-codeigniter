<?php
namespace App\Models;
use CodeIgniter\Model;

class FaqModel extends Model {

  protected $DBGroup = 'default';
  protected $table = 'faqs';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $allowedFields = [
    'question',
    'answer',
    'created_at',
    'updated_at'
  ];
}