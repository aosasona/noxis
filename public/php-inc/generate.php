<?php
  require $_SERVER["DOCUMENT_ROOT"]."/php-inc/connect.php";

  $users = "CREATE TABLE IF NOT EXISTS `users` (
    id INT(100) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_id VARCHAR(655) NOT NULL,
    email VARCHAR(655) NOT NULL,
    backup_email VARCHAR(655) NOT NULL,
    reg_date VARCHAR(50) NOT NULL,
    reg_time VARCHAR(50) NOT NULL)";

  mysqli_query($server, $users);
?>
