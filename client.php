<?php

try {
    $client = new SoapClient(null, array(
            'uri' => 'http://practicesdwes.infinityfreeapp.com/Automoviles/service-automoviles.php',
            'location' => 'http://practicesdwes.infinityfreeapp.com/Automoviles/service-automoviles.php',
            'trace' => 1
    )
  );

  $client->__setCookie('__test', '38f110652a1a85b357d38e8930ab257c');

  $auth_params = new stdClass();
  $auth_params->username = "ies";
  $auth_params->password = "daw";
  $header_params = new SoapVar($auth_params,SOAP_ENC_OBJECT);
  $header = new SoapHeader('http://practicesdwes.infinityfreeapp.com/Automoviles/service-automoviles.php', 'authenticate', $header_params, false);
  $client->__setSoapHeaders(array($header));

} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}

?>