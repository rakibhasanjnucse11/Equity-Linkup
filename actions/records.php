<?php
$page_title = 'Records';

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
ORDER BY p.id DESC;
";
$pitches = get_results( $sql );

require 'views/records.view.php';
