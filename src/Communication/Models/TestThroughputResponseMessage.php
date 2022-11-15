<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Sealution\Messages\TestThroughPutMsg;
use Sealution\Messages\TestThroughPutRespMsg;


class TestThroughputResponseMessage implements ProtoModel
{
    public function __construct(protected readonly TestThroughPutRespMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'idx' => $data['idx'],
            'test_data' => $data['test_data'],
        ];

        return new static(new TestThroughPutRespMsg($data));
    }

    public function getIdx(): int
    {
        return $this->proto->getIdx();
    }



    public function getTestData(): string
    {
        return $this->proto->getTestData();
    }



    public function toArray(): array
    {
        return [
            'idx' => $this->getIdx(),
            'test_data' => $this->getTestData(),
        ];
    }

    public function toProto(): TestThroughPutRespMsg
    {
        return $this->proto;
    }
}
