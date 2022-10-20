composer install &&
php ./vendor/bin/protobuf --include-descriptors -i . -o ./ ./mainmessage.proto &&
mv ./Sealution/Messages ./Messages &&
rm -rf ./Sealution