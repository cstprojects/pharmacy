<?php

include 'functions.php';
include 'model.php';

echo embed('tpl/admin.tpl.php',array('body'=>embed('tpl/add_product.tpl.php',array())));