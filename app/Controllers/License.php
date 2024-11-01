<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\SiteModel;
use App\Models\EmailTemplate;
abstract class License extends Controller
{
	protected $request;
	protected $helpers = ['url', 'html', 'file', 'form', 'text', 'number', 'database', 'filesystem', 'directory', 'path'];
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);
		$this->db = \Config\Database::connect();
		$this->api = $client = \Config\Services::curlrequest();
		$this->mail = \Config\Services::email();
		$Site = new SiteModel();
		$this->site = $Site->where('id', 1)->first();
		$this->theme = $this->site['theme'];
		$this->template = $this->site['template'];
		$this->site['front_theme'] = base_url('templates/' . $this->template);
		$this->site['back_theme'] = base_url('themes/' . $this->theme);
		$this->site['user_ip'] = $this->request->getIPAddress();
		$this->validation = \Config\Services::validation();
		//$license = 'cycloneverse.org';
		// if (strpos(base_url(), $license) == false) {
		// 	echo "<script language='javascript'>\r\n\talert('Please Activate License');\r\n\twindow.location = '//thekinsmen.net/license/activate_script.php?url=http://{$license}&domain={$license}&script=bank';\r\n\t</script>";
		// }
	}
	protected function sendmail($arrays, $template, $receiver, $file)
	{
		$mailModel = new EmailTemplate();
		$mail_data = $mailModel->where("name", $template)->first();
		$subject = $mail_data["subject"];
		$body = $mail_data["body"];
		$data = $this->site;
		$message = $data["email_header"] . $body . $data["email_footer"];
		$array = [];
		$array["site_url"] = base_url();
		$array["site_theme_color"] = $this->site["theme_color"];
		$array["site_upload_folder"] = base_url('uploads/');
		$array["site_logo"] = $this->site["company_logo"];
		$array["site_name"] = $this->site["company_name"];
		$array["site_email"] = $this->site["company_email"];
		$array["current_year"] = date("Y");
		$array["current_date"] = date("jS F\\, Y h:i A");

		foreach ($arrays as $keys => $values) {
			$subject = str_replace($keys, $values, $subject);
			$message = str_replace($keys, $values, $message);
		}
		foreach ($array as $key => $value) {
			$subject = str_replace($key, $value, $subject);
			$message = str_replace($key, $value, $message);
		}
		$this->mail->setFrom($data["noreply"], $data["company_name"]);
		if ($template !== 'Email') {
			$this->mail->setTo($receiver);
		} else {
			$this->mail->setTo('');
			$this->mail->setBCC($receiver);
		}if($template === 'Email'){
			$this->mail->setTo($receiver);
		}
		if ($file !== 'NoFile') {
			$this->mail->attach($file);
		}
		$this->mail->setSubject($subject);
		$this->mail->setMessage($message);
		
		return $this->mail->send();
		
	}
	protected function swift($length = 3)
	{
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString . 'XXX';
	}
}