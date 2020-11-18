<?php

    require_once ('./nusoap-0/lib/nusoap.php');

    // Webservice server WSDL URL address
    $wsdl = "http://localhost/tp_al/mvc/avec_mvc/soap-ws/soap-ws/server.php?wsdl";

    // Create client object
    $client = new nusoap_client($wsdl, 'wsdl');

    $result1 = $client->call('get_users_soap');
    // $result2 = $client->call('hello', array("username" => "ok"));

    echo $result1;
?>