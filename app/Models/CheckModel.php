<?php
namespace App\Models;

use CodeIgniter\Model;

class CheckModel extends Model
    {
    protected $DBGroup = "default";
    protected $table = "checks";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = [
        "user_id",	
        "front",
        "back",
        "remarks",	
        "created_at",	
        "updated_at"	
    ];
    }