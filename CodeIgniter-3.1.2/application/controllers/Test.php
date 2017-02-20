<?php 
   class Test extends CI_Controller {  
	
      public function index() { 
         echo "This is default function."; 
      } 
  
      public function hello() { 
         echo "This is hello function."; 
      } 
	  
	  public function page() { 
         $this->load->view('test'); 
      }
   } 
?>