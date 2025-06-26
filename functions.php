<?php 
session_start();

// 
function dd( $data ) {
    echo '<pre>';
    var_dump( $data );
    echo '</pre>';
}

//
function get_logged_in_user() {
    if ( false === empty( $_SESSION['user'] ) && count( $_SESSION['user'] ) > 0 ) {
        return $_SESSION['user'];
    } 
    
    return false;
}

//
function get_user_role( $user_id = null ) {
    if ( $user_id == null ) {
        $user = get_logged_in_user();
        $user_id = $user['id'];
    }

    if ( $user_id !== null ) {
        $sql = "SELECT * FROM usermeta WHERE user_id = '$user_id' AND meta_key = 'role'";
        $result = get_row( $sql );
        
        if ( $result === false ) {
            return [];
        } else {
            return unserialize( $result['meta_value'] );
        }
    }

    return [];
}

//
function get_available_role_for_user() {
    $available_roles = ['investor', 'entrepreneur'];
    $picked_roles = get_user_role();
    
    if ( empty( $picked_roles ) === false ) {
        $result = array_diff( $available_roles, $picked_roles );
        return $result;
    } else {
        return $available_roles;
    }
    
}

// 
function session_delete() {
    session_unset();
    session_destroy();
}

//
function redirect( $url ) {
    header( 'Location: '.$url );
    die();
}

//
function connect_db() {
    $host = DB_HOST;
    $user = DB_USER;
    $password = DB_PASSWORD;
    $db = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        return false;
    }
}

//
function insert_data( $sql ) {
    $conn = connect_db();

    if ( false === $conn ) {
        return 'Connection failed';
    }

    $conn->exec($sql);
    $last_inserted_id = $conn->lastInsertId();

    return $last_inserted_id;
}

//
function get_results( $sql ) {
    $conn = connect_db();

    if ( false === $conn ) {
        return 'Connection failed';
    }

    $stmt = $conn->prepare( $sql );
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    return $result;
}

//
function get_row( $sql ) {
    $conn = connect_db();

    if ( false === $conn ) {
        return 'Connection failed';
    }

    $stmt = $conn->prepare( $sql );
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    return $result;
}

//
function make_update( $sql ) {
    $conn = connect_db();

    if ( false === $conn ) {
        return 'Connection failed';
    }

    $stmt = $conn->prepare( $sql );
    $stmt->execute();
    $result = $stmt->rowCount();
    
    if ( $result > 0 ) {
        return $result;
    } else { 
        return false;
    }
}