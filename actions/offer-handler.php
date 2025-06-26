<?php 
$offer_id = $_POST['offer_id'];
$status = $_POST['status'];
$sql = "UPDATE offers SET status = '$status' WHERE id = $offer_id";
$last_updated_id = make_update( $sql );

redirect( '/dashboard' );