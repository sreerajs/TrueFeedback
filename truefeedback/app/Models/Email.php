<?php

/**
* Models/Email
* BytaCoin - PHPMailer Email Model
* Dependency - PHPMailer, phpmailer/phpmailer
* PHP Laravel Version 5.5
*
* @author Tittu Varghese (tittu@servntire.com)
*
* (c) Servntire Global (servntire.com)
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends PHPMailer
{
  public function __construct($exceptions, $body = '')
  {
    parent::__construct($exceptions);
    $this->setFrom('hello@telrpay.com', 'TrueFeedback Support');
    $this->isSMTP();
    $this->Host = 'ssl://smtp.zoho.com:465';
    $this->SMTPAuth = true;
    $this->Username = 'hello@telrpay.com';
    $this->Password = 'Tellercoin#159';
    $this->msgHTML($body);
    $this->SMTPDebug = 0;
    $this->Debugoutput = function ($str, $level) {
      echo "Debug level $level; message: $str\n";
    };
  }
  public function send()
  {
    $r = parent::send();
    return $r;
  }
}
