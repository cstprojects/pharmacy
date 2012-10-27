<?php

include 'model.php';
include 'functions.php';


$result = addtransaction($_POST['productname'],$_POST['productprice'],$_POST['productquantity'],$_POST['user']);
