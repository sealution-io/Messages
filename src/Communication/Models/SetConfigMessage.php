<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Sealution\Messages\SetConfigMsg;

class SetConfigMessage implements ProtoModel
{
    public function __construct(protected readonly SetConfigMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'configuration' => $data['configuration'],
        ];

        return new static(new SetConfigMsg($data));
    }

    public function getConfiguration(): string
    {
        return $this->proto->getConfiguration();
    }


    public function toArray(): array
    {
        return [
            'configuration' => $this->getConfiguration(),
        ];
    }

    public function toProto(): SetConfigMsg
    {
        return $this->proto;
    }
}
