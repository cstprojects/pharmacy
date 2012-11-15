<?php

include 'model.php';
include 'functions.php';

$result = bill($_POST['creditcardtype'],
				$_POST['creditcardnumber'],
				$_POST['firstname'],
				$_POST['lastname'],
				$_POST['country'],
				$_POST['address'],
				$_POST['amount']);