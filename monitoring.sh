#!/bin/zsh

cd $(dirname $0);

wget -e robots=off -m -p -E -k -q -np "https://staging.api.groundspeak.com/Live/v6beta/geocaching.svc/help"
wget -e robots=off -m -p -E -k -q -np "https://api.groundspeak.com/LiveV6/geocaching.svc/help"
./monitoring.php;

if [[ $(git ls-files -m | grep -E 'api.groundspeak.com|wsdl_|methods.md' | wc -l) -gt 0 ]];then
    FILES=$(git ls-files -m | grep -E 'api.groundspeak.com|wsdl_|methods.md');
    echo "Files found:
$FILES";
    git commit --author "Surfoo <surfooo@gmail.com>" -am "Changes detected on:
$FILES";
    git push;
else
    echo "Nothing to do.";
fi
