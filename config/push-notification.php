<?php

return array(

    'ios'     => array(
        'environment' =>'development',
        'certificate' =>'/app/perm/pushcert.pem',
        'passPhrase'  =>'password',
        'service'     =>'apns'
    ),
    'AppAndroid' => array(
        'environment' =>'development',
        'apiKey'      =>'AIzaSyDzQJrCy3sr_E6PG03j0tHkXNsTUo7EU1w',
        'service'     =>'gcm'
    )

);
