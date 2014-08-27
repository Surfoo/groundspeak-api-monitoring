#!/bin/zsh

cd $(dirname $0);

./monitoring.php;
wget -m -p -E -k -q -np https://staging.api.groundspeak.com/Live/v6beta/geocaching.svc/help;

if [[ $(git ls-files -m | grep -E 'staging.api.groundspeak.com|wsdl.xml' | wc -l) -gt 0 ]];then
    FILES=$(git ls-files -m | grep -E 'staging.api.groundspeak.com|wsdl.xml');
    echo "Files found:
$FILES";
    git commit -am "Changes detected on:
$FILES";
    git push;
else
    echo "Nothing to do.";
fi
