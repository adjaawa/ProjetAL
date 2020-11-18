<?php

    require_once ('./nusoap-0/lib/nusoap.php');
    require ('../../modele/dao/dao_authentification.php');

    // $user = new UsersDao();

    // Create the server instance
    $server = new soap_server();
    $server-> configureWSDL ('server', 'urn:server');


    // Register the "hello" method to expose it
    $server -> register ('hello',
                        array ('username' => 'xsd:string'),
                        array ('return' => 'xsd:string')

                    );
    $server -> register ("UsersDao.get_users_soap", array (), array('return' => 'xsd:json'));
    $server -> register ('UsersDao.add_user_soap',
                        array ('prenom' => 'xsd:string',
                        'nom' => 'xsd:string',
                        'email' => 'xsd:string',
                        'username' => 'xsd:string',
                        'password' => 'xsd:string',
                        'profil' => 'xsd:string'),
                        array ('return' => 'xsd:arrays')
                    );
    $server -> register ('UsersDao.delete_user_soap',
                        array ('user' => 'xsd:string'),
                        array ('return' => 'xsd:arrays')
                    );
    $server -> register ('UsersDao.update_user_soap',
                        array ('prenom' => 'xsd:string',
                        'nom' => 'xsd:string',
                        'email' => 'xsd:string',
                        'username' => 'xsd:string',
                        'password' => 'xsd:string',
                        'id' => 'xsd:int'),
                        array ('return' => 'xsd:arrays')
                    );

    function hello ($username) {
        return 'Hello, '.$username. '!';
    }

    // $u = new UsersDao();
    // $res = $u->get_users();

    // echo json_encode($res);

    $HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA)
        ? $HTTP_RAW_POST_DATA : '';
    @$server->service(file_get_contents("php://input"));
?>