composer install &&
rm -rf ./src &&
rm -rf ./GPBMetadata &&
protoc --php_out=./ mainmessage.proto &&
mkdir -p ./src/Messages &&
mv ./Sealution/Messages ./src &&
mv ./GPBMetadata ./src/GPBMetadata &&
rm -rf ./Sealution