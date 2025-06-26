<?php
$page_title = 'Dashboard';
$logged_in_user = get_logged_in_user();
$logged_in_user_id = $logged_in_user['id'];
$logged_in_user_role = get_user_role();

$sql = "SELECT * from usermeta WHERE user_id = $logged_in_user_id AND meta_key = 'investor_company_name';";
$investor_company = get_row( $sql );

$sql = "SELECT * from usermeta WHERE user_id = $logged_in_user_id AND meta_key = 'entrepreneur_company_name';";
$entrepreneur_company = get_row( $sql );

$sql = "SELECT 
p.id, p.startup_name, p.startup_category, p.ask_amount, p.ask_percentage
FROM pitches as p 
WHERE p.user_id = $logged_in_user_id
ORDER BY p.id DESC;
";
$pitches = get_results( $sql );

foreach ($pitches as $key => $pitch) {
    $pitch_id = $pitch['id'];
    $sql = "SELECT 
    o.id, o.user_id, o.pitch_id, o.ask_amount, o.ask_percentage, o.status,
    u.first_name, u.last_name, um.meta_value
    FROM offers as o 
    JOIN users as u ON o.user_id = u.id
    JOIN usermeta as um ON um.user_id = u.id
    WHERE o.pitch_id = $pitch_id AND um.meta_key = 'investor_company_name'
    ORDER BY o.id DESC;
    ";
    $pitches[$key]['offers'] = get_results( $sql );
}

$sql = "SELECT 
o.id, o.pitch_id, o.ask_amount, o.ask_percentage, o.status, p.startup_name, p.startup_category
FROM offers as o 
JOIN pitches as p ON o.pitch_id = p.id
WHERE o.user_id = $logged_in_user_id
ORDER BY o.id DESC;
";
$offers = get_results( $sql );

$sql = "SELECT 
p.id, p.user_id, o.ask_amount, o.ask_percentage, o.status
FROM pitches as p
JOIN offers as o ON o.pitch_id = p.id
WHERE p.user_id = $logged_in_user_id
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
WHERE o.user_id = $logged_in_user_id
AND o.status = 'accepted'
ORDER BY o.id DESC;
";
$accepted_offers = get_results( $sql );
$total_accepted_offers = count( $accepted_offers );
$total_accepted_offer_amount = 0;
foreach ($accepted_offers as $accepted_offer) {
    $total_accepted_offer_amount += $accepted_offer['ask_amount']; 
}

require 'views/dashboard.view.php';