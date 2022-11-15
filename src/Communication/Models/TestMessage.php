<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Sealution\Messages\TestMsg;

class TestMessage implements ProtoModel
{
    public function __construct(protected readonly TestMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        //TODO
        $data = [

        ];

        return new static(new TestMsg($data));
    }

    public function toArray(): array
    {
        //TODO
        return [

        ];
    }

    public function toProto(): TestMsg
    {
        return $this->proto;
    }
}
