<?php 
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = get_row( $sql );

if ( $result !== false ) {
    $password_valid = password_verify( $password, $result['password'] );
    
    if ( true === $password_valid ) {
        unset( $result['password'] );
        $_SESSION["user"] = $result;
        redirect( '/' );
    } else {
        redirect( '/sign-in' );
    }
} else {
    redirect( '/sign-in' );
}