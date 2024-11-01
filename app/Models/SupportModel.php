<?php
namespace App\Models;
use CodeIgniter\Model;

class SupportModel extends Model {
  protected $DBGroup = "default";
  protected $table = "support_tickets";
  protected $primaryKey = "id";
  protected $returnType = "array";
  protected $allowedFields = [
    'reference',
    'dept',
    'user_id',
    'email',
    'name',
    'description',
    'subject',
    'loan',
    'status',
    'created_at',
    'updated_at'
  ];
}