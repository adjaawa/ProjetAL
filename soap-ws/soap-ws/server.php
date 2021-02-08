<?php

    require_once ('./nusoap-0/lib/nusoap.php');
    require ('../../modele/dao/dao_authentification_soap.php');

    // $user = new UsersDao();

    // Create the server instance
    $server = new soap_server();
    $server-> configureWSDL ('server', 'urn:server');

    $server -> register ("get_users_soap", array (), array('return' => 'xsd:string'));
    $server -> register ('add_user_soap',
                        array ('prenom' => 'xsd:string',
                        'nom' => 'xsd:string',
                        'email' => 'xsd:string',
                        'username' => 'xsd:string',
                        'password' => 'xsd:string',
                        'profil' => 'xsd:string'),
                        array ('return' => 'xsd:string')
                    );
    $server -> register ('delete_user_soap',
                        array ('user' => 'xsd:string'),
                        array ('return' => 'xsd:string')
                    );
    $server -> register ('update_user_soap',
                        array ('prenom' => 'xsd:string',
                        'nom' => 'xsd:string',
                        'email' => 'xsd:string',
                        'username' => 'xsd:string',
                        'password' => 'xsd:string',
                        'profil' => 'xsd:string',
                        'id' => 'xsd:int'),
                        array ('return' => 'xsd:string')
                    );


    $HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA)
        ? $HTTP_RAW_POST_DATA : '';
    @$server->service(file_get_contents("php://input"));
?>