<?php // RAY_curl_example.php
global $abc;

error_reporting(0);
  ob_start();
  include($_SERVER['DOCUMENT_ROOT'].'/index.php');
  ob_end_clean();
  $CI =& get_instance();
  $CI->load->library('session'); //if it's not autoloaded in your CI setup
  $abc = $CI->session->userdata();

?>