<?php
$user = get_logged_in_user();
$user_id = $user['id'];

if (!file_exists('./uploads')) {
    mkdir('./uploads', 0777, true);
}

// role
$role = $_POST["role"];
$meta_key = 'role';
$meta_value = serialize([$role]);
$sql = "SELECT * FROM usermeta WHERE user_id = '$user_id' AND meta_key = '$meta_key'";
$result = get_row( $sql );

if ( $result === false ) {
    $sql = "INSERT INTO usermeta ( user_id, meta_key, meta_value) VALUES ('$user_id', '$meta_key', '$meta_value')";
    $last_inserted_id = insert_data( $sql );
} else {
    $id = $result['id'];
    $meta_value = unserialize( $result['meta_value'] );
    array_push( $meta_value, $role );
    array_unique( $meta_value );
    $meta_value = serialize($meta_value);
    $sql = "UPDATE usermeta SET meta_value = '$meta_value' WHERE id = $id";
    $last_updated_id = make_update( $sql );
}

// company_name
$meta_key = $role . '_' . 'company_name';
$meta_value = $_POST["company_name"];
$sql = "INSERT INTO usermeta ( user_id, meta_key, meta_value) VALUES ('$user_id', '$meta_key', '$meta_value')";
$last_inserted_id = insert_data( $sql );

// tin_no
$meta_key = $role . '_' . 'tin_no';
$meta_value = $_POST["tin_no"];
$sql = "INSERT INTO usermeta ( user_id, meta_key, meta_value) VALUES ('$user_id', '$meta_key', '$meta_value')";
$last_inserted_id = insert_data( $sql );

// bank_account_no
$meta_key = $role . '_' . 'bank_account_no';
$meta_value = $_POST["bank_account_no"];
$sql = "INSERT INTO usermeta ( user_id, meta_key, meta_value) VALUES ('$user_id', '$meta_key', '$meta_value')";
$last_inserted_id = insert_data( $sql );

// trade_license
$document = $_FILES["trade_license"];
$document_name = $document['name'];
$document_path = './uploads/' . $document_name;

if ( move_uploaded_file($document['tmp_name'], $document_path) ) {
    $meta_key = $role . '_' . 'trade_license';
    $meta_value = $document_path;
    $sql = "INSERT INTO usermeta ( user_id, meta_key, meta_value) VALUES ('$user_id', '$meta_key', '$meta_value')";
    $last_inserted_id = insert_data( $sql );
}

// necessary_doc
$document = $_FILES["necessary_doc"];
$document_name = $document['name'];
$document_path = './uploads/' . $document_name;

if ( move_uploaded_file($document['tmp_name'], $document_path) ) {
    $meta_key = $role . '_' . 'necessary_doc';
    $meta_value = $document_path;
    $sql = "INSERT INTO usermeta ( user_id, meta_key, meta_value) VALUES ('$user_id', '$meta_key', '$meta_value')";
    $last_inserted_id = insert_data( $sql );
}

redirect( '/' );