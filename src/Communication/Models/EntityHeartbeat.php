<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Carbon\Carbon;
use Sealution\Messages\HeartBeatMsg;

class EntityHeartbeat implements ProtoModel
{
    public function __construct(protected readonly HeartBeatMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'date_time' => new \Google\Protobuf\Timestamp([
                'seconds' => $data['date_time'] instanceof Carbon ? $data['date_time']->unix() : Carbon::parse($data['date_time'])->unix(),
                'nanos' => $data['date_time'] instanceof Carbon ? $data['date_time']->microsecond * 1000 : Carbon::parse($data['date_time'])->microsecond * 1000,
            ]),
            'mac_address' => $data['mac_address'],
        ];

        return new static(new HeartBeatMsg($data));
    }

    public function getTimestamp(): Carbon
    {
        $timestamp = $this->proto->getDateTime();

        return Carbon::createFromTimestamp($timestamp->getSeconds() + $timestamp->getNanos() / 1000000000);
    }

    public function getMacId(): string
    {
        return $this->proto->getMacAddress();
    }


    public function toArray(): array
    {
        return [
            'mac_id' => $this->getMacId(),
            'timestamp' => $this->getTimestamp()->toIso8601ZuluString(),
        ];
    }

    public function toProto(): HeartBeatMsg
    {
        return $this->proto;
    }
}
