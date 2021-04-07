<?php

    class PHP_Email_Form{
        
        public $to, $from_name, $from_email, $subject, $message;
        
        public function send(){
            $this->headers= "From: ".$this->from_email;
            if(mail($this->to, $this->subject, $this->message, $this->headers)){
                echo "mail sent";
            }
            else{
                echo "sending fail";
            }
        }
        
    }

?>