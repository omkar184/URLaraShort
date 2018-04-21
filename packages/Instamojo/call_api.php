<?php
include('Instamojo.php');
$api = new Instamojo\Instamojo('689162a09ff4f8476966dfc6d3abefd2', '273104ef8ca202e6a61dc9b14b4ce649');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Test",        
        "amount" => "9",
        "send_email" => true,
        "email" => "foo@example.com",
        "phone" => '+91 9975585901',
        "buyer_name" => "Omkar",
        "redirect_url" => "http://forlancer.com/hire-freelancers"
        ));
    // print_r($response);
    //  exit;
    echo $response['longurl'];
}
catch (Exception $e) {
    return $e->getMessage();
}

?>