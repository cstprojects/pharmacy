<?php

include 'functions.php';
include 'model.php';

echo embed('tpl/home.register.tpl.php',array('login'=>
		embed('tpl/login.tpl.php',array()),'login_message'=>embed('controller.php',array()),'reg_form'=>
			embed('tpl/registration.tpl.php',array()))); 
