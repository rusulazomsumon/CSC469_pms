<?php
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: http://www.example.com/new-page");
  exit();
?>
<?php
  wp_redirect( 'http://www.example.com/new-page', 301 );
  exit;
?>
