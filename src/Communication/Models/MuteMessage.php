<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Carbon\Carbon;
use Sealution\Messages\SetTimeMsg;
use Sealution\Messages\TestMuteBTMsg;

class MuteMessage implements ProtoModel
{
    public function __construct(protected readonly TestMuteBTMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'mute' => $data['mute'],

        ];

        return new static(new TestMuteBTMsg($data));
    }

    public function getMute(): bool
    {
        return $this->proto->getMute();
    }


    public function toArray(): array
    {
        return [
            'mute' => $this->getMute(),
        ];
    }

    public function toProto(): TestMuteBTMsg
    {
        return $this->proto;
    }
}
