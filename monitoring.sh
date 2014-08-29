#!/bin/zsh

cd $(dirname $0);

./monitoring.php;
wget -e robots=off -m -p -E -k -q -np "https://staging.api.groundspeak.com/Live/v6beta/geocaching.svc/help"
wget -e robots=off -m -p -E -k -q -np "https://api.groundspeak.com/LiveV6/geocaching.svc/help"

if [[ $(git ls-files -m | grep -E 'api.groundspeak.com|wsdl_' | wc -l) -gt 0 ]];then
    FILES=$(git ls-files -m | grep -E 'api.groundspeak.com|wsdl_');
    echo "Files found:
$FILES";
    git commit -am "Changes detected on:
$FILES";
    git push;
else
    echo "Nothing to do.";
fi
