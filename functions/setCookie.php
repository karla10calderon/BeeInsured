<?php
if(!empty($_POST)) {
    $value = $_POST['lang'];

    // Add headers
    header("Content-type: application/json");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Origin: https://www.beeinsured.co" ); // *.ampproject.org");
    header("AMP-Access-Control-Allow-Source-Origin: https://www.beeinsured.co"); // .$domain_url);

    // Expire in 15 days
    if ($value) {
        header("AMP-Redirect-To: https://www.beeinsured.co");
        header("Access-Control-Expose-Headers: AMP-Redirect-To, Another-Header, And-Some-More");
        setcookie("lang", $value, time() + (3600 * 24 * 15), "/");
        echo json_encode(array('msg'=>'Done!'));
    } else {
        header("HTTP/1.0 412 Precondition Failed", true, 412);
        echo json_encode(array('msg'=>'Error'));
    }
 } else {
    header("HTTP/1.0 412 Precondition Failed", true, 412);
    echo json_encode(array('msg'=>'Error'));
 }
?> 
