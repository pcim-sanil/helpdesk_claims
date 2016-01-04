
<?php
require('includes/config.inc.php');
require(MYSQL);
require_once('includes/Utility.php');

	if (filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
    	$id = $_GET['id'];

    	$q = "SELECT caller_number,eligible_amount,propose_amount,ticket_id from email where userkey = $id";

    	$result = mysql_query($q);
    	$row = mysql_fetch_array($result);

    	if(!empty($row)){
    		include 'includes/header.php'; 
 			include('./includes/form.php');
 			include 'includes/footer.php'; 

 			die();
    	}

    } 

include 'includes/header.php';
include('./error.php');
include 'includes/footer.php';


