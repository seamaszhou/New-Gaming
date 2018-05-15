<?php
class Email extends CI_Controller {
  function __construct(){
    parent::__construct();
  }

  function index(){
    $config = Array(
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'seamaszhou@gmail.com',
      'smtp_pass' => 'Seamas@yinmuhan0516'

  );
  $this->load->library('email',$config);
  $this->email->set_newline("\r\n");
  $this->email->from('seamaszhou@gmail.com','MyWebsite');
  $this->email->to('seamaszhou@gmail.com');
  $this->email->subject('How to send email via SMTP server in CodeIgniter');
  $this->email->message($htmlContent);


//Email content



//Send email
if ($this->email->send()) {
  echo 'Your email was sent';
  // code...
}
else{
  show_error($this->email->print_debugger());
}

  }


}


 ?>
