<?php
if(isset($_POST['submit'])){
  $msg = 'Name: ' .$_POST['name'] ."\n"
    .'Email: ' .$_POST['email']   ."\n"
    .'Comment' .$_POST['comment'];
    mail('bastienrrapaud@gmail.com', 'sample test', $msg);
    header('location: Contactyes.php');
  )else (
    header('location: Contact.php');
    exit(0);
  }
  ?>