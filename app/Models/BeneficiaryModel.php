<?php
namespace App\Models;

use CodeIgniter\Model;

class BeneficiaryModel extends Model
    {
    protected $DBGroup = "default";
    protected $table = "beneficiary";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = [
        	"name",	
            "address",	
            "bank",	
            "swift",	
            "rtn",	
            "acc_no",	
            "image",	
            "email",	
            "donor",	
            "created_at",	
            "updated_at"
    ];
    }