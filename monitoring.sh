#!/bin/zsh

BASEDIR=$(dirname $0)
cd $BASEDIR;

wget -m -p -E -k -q -np https://staging.api.groundspeak.com/Live/v6beta/geocaching.svc/help;

if [[ $(git ls-files -m | wc -l) -gt 0 ]];then
    FILES=$(git ls-files -m);
    git commit -am "Changes detected on:
$FILES";
    git push;
else
    echo "Nothing to do.";
fi
