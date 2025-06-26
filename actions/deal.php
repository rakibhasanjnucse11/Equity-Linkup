<?php 
$page_title = 'Deal';
$pitch_id = empty( $_GET['id'] ) ? 0 : $_GET['id'];
$logged_in_user = get_logged_in_user();

$sql = "SELECT 
p.*, u.first_name, u.last_name, um.meta_value
FROM pitches as p 
JOIN users as u ON p.user_id = u.id
JOIN usermeta as um ON um.user_id = u.id AND um.meta_key = 'entrepreneur_company_name'
WHERE p.id = $pitch_id
ORDER BY p.id DESC;
";
$pitch = get_row( $sql );

require 'views/deal.view.php';