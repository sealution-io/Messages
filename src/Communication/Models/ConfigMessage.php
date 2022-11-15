<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Sealution\Messages\ConfigMsg;


class ConfigMessage implements ProtoModel
{
    public function __construct(protected readonly ConfigMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'configuration' => $data['configuration'],
        ];

        return new static(new ConfigMsg($data));
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

    public function toProto(): ConfigMsg
    {
        return $this->proto;
    }
}
