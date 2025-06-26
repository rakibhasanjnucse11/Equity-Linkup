<?php 
$page_title = 'User';
$user_id = !empty( $_GET['id'] ) ? $_GET['id'] : 0;
$user_role = get_user_role( $user_id );

$sql = "SELECT first_name, last_name FROM users WHERE id = '$user_id'";
$user = get_row( $sql );

$sql = "SELECT * from usermeta WHERE user_id = $user_id AND meta_key = 'investor_company_name';";
$investor_company = get_row( $sql );

$sql = "SELECT * from usermeta WHERE user_id = $user_id AND meta_key = 'entrepreneur_company_name';";
$entrepreneur_company = get_row( $sql );

$sql = "SELECT 
p.id, p.user_id, o.ask_amount, o.ask_percentage, o.status
FROM pitches as p
JOIN offers as o ON o.pitch_id = p.id
WHERE p.user_id = $user_id
AND o.status = 'accepted'
ORDER BY p.id DESC;
";
$accepted_pitches = get_results( $sql );
$total_accepted_pitches = count( $accepted_pitches );
$total_accepted_pitch_amount = 0;
foreach ($accepted_pitches as $accepted_pitch) {
    $total_accepted_pitch_amount += $accepted_pitch['ask_amount']; 
}

$sql = "SELECT 
o.id, o.pitch_id, o.user_id, o.ask_amount, o.status
FROM offers as o 
WHERE o.user_id = $user_id
AND o.status = 'accepted'
ORDER BY o.id DESC;
";
$accepted_offers = get_results( $sql );
$total_accepted_offers = count( $accepted_offers );
$total_accepted_offer_amount = 0;
foreach ($accepted_offers as $accepted_offer) {
    $total_accepted_offer_amount += $accepted_offer['ask_amount']; 
}

require 'views/user.view.php';