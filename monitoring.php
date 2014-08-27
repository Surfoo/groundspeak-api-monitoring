#!/usr/bin/php
<?php

define('GS_API_WEBSERVICE_URL', 'https://staging.api.groundspeak.com/Live/V6Beta/geocaching.svc?singleWsdl');

$xml = new \DOMDocument();
$xml->formatOutput = true;
$xml->loadXML(file_get_contents(GS_API_WEBSERVICE_URL));

file_put_contents('wsdl.xml', $xml->saveXML());
