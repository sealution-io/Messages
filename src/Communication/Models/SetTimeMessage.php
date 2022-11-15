<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Carbon\Carbon;
use Sealution\Messages\SetTimeMsg;

class SetTimeMessage implements ProtoModel
{
    public function __construct(protected readonly SetTimeMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'date_time' => new \Google\Protobuf\Timestamp([
                'seconds' => $data['date_time'] instanceof Carbon ? $data['date_time']->unix() : Carbon::parse($data['date_time'])->unix(),
                'nanos' => $data['date_time'] instanceof Carbon ? $data['date_time']->microsecond * 1000 : Carbon::parse($data['date_time'])->microsecond * 1000,
            ])
        ];

        return new static(new SetTimeMsg($data));
    }

    public function getTimestamp(): Carbon
    {
        $timestamp = $this->proto->getDateTime();

        return Carbon::createFromTimestamp($timestamp->getSeconds() + $timestamp->getNanos() / 1000000000);
    }


    public function toArray(): array
    {
        return [
            'timestamp' => $this->getTimestamp()->toIso8601ZuluString(),
        ];
    }

    public function toProto(): SetTimeMsg
    {
        return $this->proto;
    }
}
