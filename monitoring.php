#!/usr/bin/php
<?php

$wsdl_url = ['staging' => 'https://staging.api.groundspeak.com/Live/V6Beta/geocaching.svc?singleWsdl',
             'live'    => 'https://api.groundspeak.com/LiveV6/geocaching.svc?singleWsdl',
            ];

echo "WSDL:\n";
foreach ($wsdl_url as $platform => $url) {
    echo $platform . "\n"; 
    $xml = new \DOMDocument();
    $xml->formatOutput = true;
    $xml->loadXML(file_get_contents($url));
    file_put_contents('wsdl_' . $platform . '.xml', $xml->saveXML());
}
echo "Check WSQL, done.\n";
