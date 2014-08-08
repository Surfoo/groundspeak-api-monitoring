#!/bin/zsh

cd $(dirname $0);

wget -m -p -E -k -q -np https://staging.api.groundspeak.com/Live/v6beta/geocaching.svc/help;

if [[ $(git ls-files -m | grep staging.api.groundspeak.com | wc -l) -gt 0 ]];then
    FILES=$(git ls-files -m | grep staging.api.groundspeak.com);
    echo "Files found:
$FILES";
    git commit -am "Changes detected on:
$FILES";
    git push;
else
    echo "Nothing to do.";
fi
