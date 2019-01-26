<?php

unset($argv[0]);

foreach($argv as $file) {
    $contentFile = json_decode(file_get_contents($file), true);

    foreach ($contentFile['definitions'] as $key => &$content) {
        if (isset($content['properties']['type']) && isset($content['properties']['type']['enum'])) {
            sort($content['properties']['type']['enum']);
        }
    }

    file_put_contents($file, json_encode($contentFile, JSON_PRETTY_PRINT));
}
