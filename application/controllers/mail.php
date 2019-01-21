<?php
$this->load->library('email');
$this->load->helper('path');

$this->email->from('agrawalhimanshuah13@gmail.com', 'Himanshu');
$this->email->to('paridhiagrawal17@gmail.com'); 
$this->email->cc('another@another-example.com'); 
$this->email->bcc('them@their-example.com'); 

$this->email->subject('Email Test');
$this->email->message('Testing the email class.'); 

/* This function will return a server path without symbolic links or relative directory structures. */
$path = set_realpath('uploads/pdf/');
$this->email->attach($path . 'doc.pdf');  /* Enables you to send an attachment */


$this->email->send();

echo $this->email->print_debugger();
?>