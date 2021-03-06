#!/bin/bash

date;

cd $(dirname $0);

wget -e robots=off -m -E -q -A.html "https://staging.api.groundspeak.com/documentation" -O "staging/documentation.html"
wget -e robots=off -m -E -q -A.html "https://staging.api.groundspeak.com/api-docs/v1/swagger" -O "staging/swagger.json"

wget -e robots=off -m -E -q -A.html "https://api.groundspeak.com/documentation" -O "production/documentation.html"
wget -e robots=off -m -E -q -A.html "https://api.groundspeak.com/api-docs/v1/swagger" -O "production/swagger.json"

SWAGGER_FILES=$(git ls-files -m | grep -E 'swagger.json');
php swaggerSort.php $SWAGGER_FILES

if [[ $(git ls-files -m | grep -E 'staging|production' | wc -l) -gt 0 ]];then
    FILES=$(git ls-files -m | grep -E 'staging|production');
    printf "Files found:\n%s\n\n" "$FILES";
    git commit --author "Surfoo <surfooo@gmail.com>" -am "Changes detected on:
$FILES" && git push;
else
    printf 'Nothing to do.\n\n';
fi

exit 0;
