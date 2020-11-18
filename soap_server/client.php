<?php
   // client.php
   $options = array(
       'uri' => 'http://localhost/namespace',
       'location' => 'http://localhost/location',
       'trace'    => true
   );
   $client = new SoapClient(null, $options);
   $client->__getLastResponse();
   $client->__getLastRequest();
    
   
   echo $client->display();
?>