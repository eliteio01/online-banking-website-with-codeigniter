<?php
namespace App\Models;
use CodeIgniter\Model;

class NotificationModel extends Model {
  protected $DBGroup = "default";
  protected $table = "notifications";
  protected $primaryKey = "id";
  protected $returnType = "array";
  protected $allowedFields = [
    "user_id",
    "reference",
    "subject",
    "description",
    "file",
    "status",
    "notice",
    'created_at',
    'updated_at'
  ];
}