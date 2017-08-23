<?php
session_start();
$link = mysqli_connect('localhost','root','','upatu_db');
if(!$link){
    echo die("Error: ". mysqli_error($link));
}
