<?php
namespace App\Models;

use CodeIgniter\Model;

class TempTransferModel extends Model
    {
    protected $DBGroup = "default";
    protected $table = "temp_transfer";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = [
        "user_id",	
        "amount",	
        "bank_name",	
        "bank_address",	
        "sender_id",	
        "sender_acc",	
        "reference",	
        "receiver_name",	
        "receiver_acc",	
        "type",	
        "swift",	
        "routing",	
        "remarks",	
        "status",	
        "balance",
        "month",	
        "created_at",	
        "updated_at"
    ];
    }