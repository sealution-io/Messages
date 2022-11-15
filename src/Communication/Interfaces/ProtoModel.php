<?php

namespace Sealution\Communication\Interfaces;

use Google\Protobuf\Internal\Message;

interface ProtoModel
{
    public function toArray(): array;

    public function toProto(): Message;

    public static function fromData(array $data): static;
}
