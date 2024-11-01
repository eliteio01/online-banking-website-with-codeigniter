<?php
namespace App\Models;
use CodeIgniter\Model;

class TestimonialModel extends Model {

  protected $DBGroup = 'default';
  protected $table = 'testimonials';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $allowedFields = [
    'name',
    'image',
    'content',
    'created_at',
    'updated_at'
  ];
}