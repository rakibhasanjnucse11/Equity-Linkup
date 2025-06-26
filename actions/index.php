<?php
$page_title = ' A befitting platform to connect the entrepreneurs and the investors across the country';


$sql = "SELECT 
o.pitch_id
FROM offers as o 
WHERE o.status = 'accepted'
ORDER BY o.id DESC;
";
$accepted_offers = get_results( $sql );
$accepted_offers = array_column( $accepted_offers, 'pitch_id' );

$where = '';

if ( count( $accepted_offers ) > 0 ) {
    $where = "WHERE p.id NOT IN (" . implode( ',', $accepted_offers ) . ")";
}

$sql = "SELECT 
p.id, p.user_id, p.startup_name, p.startup_category, p.executive_summary, p.cover_photo,
p.ask_amount, p.ask_percentage, p.created_at, u.first_name, u.last_name, um.meta_value
FROM pitches as p 
JOIN users as u ON p.user_id = u.id
JOIN usermeta as um ON um.user_id = u.id AND um.meta_key = 'entrepreneur_company_name'
$where
ORDER BY p.id DESC LIMIT 3;
";
$pitches = get_results( $sql );


$sql = "SELECT 
o.pitch_id
FROM offers as o 
WHERE o.status = 'accepted'
ORDER BY o.id DESC;
";
$accepted_offers = get_results( $sql );
$accepted_offers = array_column( $accepted_offers, 'pitch_id' );

$where = '';

if ( count( $accepted_offers ) > 0 ) {
    $where = "WHERE p.id IN (" . implode( ',', $accepted_offers ) . ")";
}

$sql = "SELECT 
p.id, p.user_id, p.startup_name, p.startup_category, p.executive_summary, p.cover_photo,
p.ask_amount, p.ask_percentage, p.created_at, u.first_name, u.last_name, um.meta_value
FROM pitches as p 
JOIN users as u ON p.user_id = u.id
JOIN usermeta as um ON um.user_id = u.id AND um.meta_key = 'entrepreneur_company_name'
$where
ORDER BY p.id DESC LIMIT 3;
";
$records = get_results( $sql );


require 'views/index.view.php';
?>
