<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Sealution\Messages\TestRespMsg;

class TestResponseMessage implements ProtoModel
{
    public function __construct(protected readonly TestRespMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        //TODO
        $data = [

        ];

        return new static(new TestRespMsg($data));
    }

    public function toArray(): array
    {
        //TODO
        return [

        ];
    }

    public function toProto(): TestRespMsg
    {
        return $this->proto;
    }
}
