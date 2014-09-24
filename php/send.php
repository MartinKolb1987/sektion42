<?php 

class Form {

    function __construct() {
        $emailAddress = $this->fightXSS($_POST['email']);
        $this->sendEmail($emailAddress);
    }

    public function sendEmail($emailAddress){
            if(filter_var($emailAddress, FILTER_VALIDATE_EMAIL)){
                $receiversEmail = 'willkommen@startup42.de';
                $headers = "From: " . $emailAddress . "\r\n";
                $subject = 'startup42.de - Kontaktformular';
                mail($receiversEmail, $subject, $emailAddress, $headers, "-f " . $emailAddress);
                print 'send-email-success';
            } else {
                print 'send-email-error';
            }
    }

    // XSS
    private function fightXSS($value){
        return htmlspecialchars($value);            
    }

}

new Form();