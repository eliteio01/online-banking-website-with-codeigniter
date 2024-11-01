<?php
namespace App\Models;
use CodeIgniter\Model;

class SiteModel extends Model {

  protected $DBGroup = 'default';
  protected $table = 'settings';
  protected $primaryKey = 'id';
  protected $returnType     = 'array';
  protected $allowedFields = [
    'company_name',
    'company_description',
    'company_keyword',
    'company_email',
    'noreply',
    'company_address',
    'company_phone',
    'abrv',
    'chat_code',
    'theme_color',
    'secondary_color',
    'theme',
    'template',
    'max_upload',
    'company_logo',
    'company_favicon',
    'min_deposit',
    'recaptcha',
    'captchaPublicKey',
    'captchaPrivateKey',
    'live_chat',
    'im_chat',
    'im_position',
    'whatsapp',
    'telegram',
    'email_header',
    'email_footer',
    'otp',
    'wire_fee',
    'login_notify',
    'loan',
    'bank_routing',
    'allow_register',
    'created_at',
    'updated_at'
  ];
}