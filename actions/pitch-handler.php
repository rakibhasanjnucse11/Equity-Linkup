<?php 
$user = get_logged_in_user();
$user_id = $user['id'];

if (!file_exists('./uploads')) {
    mkdir('./uploads', 0777, true);
}

$startup_name = $_POST['startup_name'];
$startup_category = $_POST['startup_category'];
$email = $_POST['email'];
$website = $_POST['website'];
$address = $_POST['address'];
$executive_summary = $_POST['executive_summary'];
$financial_information = $_POST['financial_information'];
$market_analysis = $_POST['market_analysis'];
$business_plan = $_POST['business_plan'];
$management_team = $_POST['management_team'];
$use_of_funds = $_POST['use_of_funds'];
$exit_strategy = $_POST['exit_strategy'];
$legal_risk_disclosures = $_POST['legal_risk_disclosures'];
$pitch = $_POST['pitch'];
$ask_amount = $_POST['ask_amount'];
$ask_percentage = $_POST['ask_percentage'];

$document = $_FILES['document'];
$document_name = $document['name'];
$document_path = './uploads/' . $document_name;
move_uploaded_file($document['tmp_name'], $document_path);

$cover_photo = $_FILES['cover_photo'];
$cover_photo_name = $cover_photo['name'];
$cover_photo_path = './uploads/' . $cover_photo_name;
move_uploaded_file($cover_photo['tmp_name'], $cover_photo_path);

$sql = "INSERT INTO pitches ( user_id, startup_name, startup_category, email, website, address, executive_summary, financial_information, market_analysis, business_plan, management_team, use_of_funds, exit_strategy, legal_risk_disclosures, pitch, ask_amount, ask_percentage, document, cover_photo ) VALUES ( '$user_id', '$startup_name', '$startup_category', '$email', '$website', '$address', '$executive_summary', '$financial_information', '$market_analysis', '$business_plan', '$management_team', '$use_of_funds', '$exit_strategy', '$legal_risk_disclosures', '$pitch', $ask_amount, $ask_percentage, '$document_path', '$cover_photo_path' )";

$last_inserted_id = insert_data( $sql );

if( intval( $last_inserted_id ) > 0 ) {
    redirect( '/' );
} else {
    redirect( '/pitch' );
}