<?php

$config = array(
    'entityid' => 'https://was-preprod1.digid.nl/saml/idp/metadata',
    'privatekey' => __DIR__.'/../../../../app/cert/'.$_SERVER['HTTP_HOST'].'.pem',
    'certificate' => __DIR__.'/../../../../app/cert/'.$_SERVER['HTTP_HOST'].'.crt',
);
