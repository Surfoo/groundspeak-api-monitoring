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


// Parsing of JSON requests
$files = glob('api.groundspeak.com/LiveV6/geocaching.svc/help/operations/*.html');

ob_start();
foreach($files as $file) {
    $content = file_get_contents($file);
    preg_match('#<span class="method">(GET|POST)</span>#', $content, $method);
    $method = $method[1];
    preg_match('#<span class="uri-template">(.*)</span>#', $content, $url);
    $url = html_entity_decode($url[1]);
    $url_parts = parse_url($url);

    $title = substr(basename($file), 0, -5);

    echo '## ' . $title."\n\n";
    echo '**Method**: ' . $method . "\n\n";
    echo '**URL**: ' . $url . "\n\n";

    $queryParams = '';
    if($method == 'POST') {
        preg_match('#<pre class="request-json">([^<]+)</pre>#msU', $content, $request);
        $request = $request[1];
        $queryParams = json_decode($request, true, 512, JSON_BIGINT_AS_STRING);
    } elseif ($method == 'GET' && array_key_exists('query', $url_parts)) {
        parse_str($url_parts['query'], $queryParams);
    }

    if(is_array($queryParams)) {
        echo '**Parameters**:' . "\n\n";
        echo '```php'."\n";
        print_r($queryParams);
        echo '```';
    }

    echo "\n\n";
}

$content = ob_get_contents();
ob_end_clean();
file_put_contents('methods.md', $content);