<?php

include 'model.php';
include 'functions.php';


addtransaction($_POST['productname'],$_POST['productprice'],$_POST['productquantity'],$_POST['user']);


