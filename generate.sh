composer install &&
rm -rf ./src/Messages &&
rm -rf ./GPBMetadata &&
rm -rf ./src/GPBMetadata &&
protoc --php_out=./ mainmessage.proto &&
mkdir -p ./src/Messages &&
mv ./Sealution/Messages ./src &&
mv ./GPBMetadata ./src/GPBMetadata &&
rm -rf ./Sealution