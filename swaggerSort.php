<?php

unset($argv[0]);

$keysToSort = ['type', 'logType', 'size', 'status'];

foreach($argv as $file) {
    $contentFile = json_decode(file_get_contents($file), true);

    foreach ($contentFile['definitions'] as $key => &$content) {
        foreach ($keysToSort as $keyToSort) {
            if (isset($content['properties'][$keyToSort]) && isset($content['properties'][$keyToSort]['enum'])) {
                sort($content['properties'][$keyToSort]['enum']);
            }
        }
    }

    foreach ($contentFile['paths'] as $route => &$method) {
        if (isset($method['get']['responses']['200']['schema']['items']['enum'])) {
            sort($method['get']['responses']['200']['schema']['items']['enum']);
        }
    }

    file_put_contents($file, json_encode($contentFile, JSON_PRETTY_PRINT));
}
