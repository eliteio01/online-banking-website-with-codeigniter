<?php
namespace App\Models;
use CodeIgniter\Model;

class PaymentGateway extends Model {

  protected $DBGroup = 'default';
  protected $table = 'payment_gateways';
  protected $primaryKey = 'id';
  protected $returnType = 'array';
  protected $allowedFields = [
    'name',
    'status',
    'ticker',
    'api',
    'barcode',
    'created_at',
    'updated_at'
  ];
}