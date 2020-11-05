<?php 

session_start(); //これ忘れないように。
$id = session_id();

// echo $id;


$_SESSION['name'] ='ふくしま';
$_SESSION['age'] ='99';
$_SESSION['love'] ='ラーメン次郎';

print_r($_SESSION);






?>