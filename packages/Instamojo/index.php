<?php
include('Instamojo.php');
$api = new Instamojo\Instamojo('689162a09ff4f8476966dfc6d3abefd2', '273104ef8ca202e6a61dc9b14b4ce649');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "FIFA 16",
        "amount" => "3499",
        "send_email" => true,
        "email" => "foo@example.com",
        "redirect_url" => "http://www.example.com/handle_redirect.php"
        ));
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>