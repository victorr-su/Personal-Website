<?php

$connect = mysqli_connect('sql209.epizy.com', 'epiz_30670908', 'tietaIRfkT','epiz_30670908_commentsection');

if (!$connect){
    die("Connection failed: " .mysqli_connect_error());
}