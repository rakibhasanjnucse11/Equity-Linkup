<?php 
$pitch_id = $_POST['pitch_id'];
$user_id = $_POST['user_id'];
$ask_amount = $_POST['ask_amount'];
$ask_percentage = $_POST['ask_percentage'];
$status = 'pending';

$sql = "INSERT INTO offers ( pitch_id, user_id, ask_amount, ask_percentage, status ) VALUES ( '$pitch_id', '$user_id', '$ask_amount', '$ask_percentage', '$status' )";

$last_inserted_id = insert_data( $sql );

if( intval( $last_inserted_id ) > 0 ) {
    redirect( '/' );
} else {
    redirect( '/deal?id=' . $pitch_id );
}