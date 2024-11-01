<?php
namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $DBGroup = "default";
    protected $table = "news";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = ["id", "title", "body", "status", "created_at", "updated_at"];
}
