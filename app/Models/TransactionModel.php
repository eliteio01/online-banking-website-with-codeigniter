<?php
namespace App\Models;
use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $DBGroup = "default";
    protected $table = "transactions";
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowedFields = [
        "user_id",
        "name",
        "email",
        "status",
        "coin_type",
        "coin_id",
        "transaction_type",
        "amount",
        "reference",
        "token",
    'created_at',
    'updated_at'
    ];
}
