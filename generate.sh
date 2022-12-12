docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs &&
rm -rf ./src/Messages &&
rm -rf ./GPBMetadata &&
rm -rf ./src/GPBMetadata &&
protoc --php_out=./ mainmessage.proto &&
mkdir -p ./src/Messages &&
mv ./Sealution/Messages ./src &&
mv ./GPBMetadata ./src/GPBMetadata &&
rm -rf ./Sealution