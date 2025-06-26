<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$password = password_hash( $password, PASSWORD_DEFAULT );

$sql = "INSERT INTO users ( first_name, last_name, email, address, phone_number, gender, password) VALUES ('$first_name', '$last_name', '$email', '$address', '$phone_number', '$gender', '$password')";
$last_inserted_id = insert_data( $sql );

if( intval( $last_inserted_id ) > 0 ) {
    redirect( '/sign-in' );
} else {
    redirect( '/sign-up' );
}