<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Sealution\Messages\TestThroughPutMsg;


class TestThroughputMessage implements ProtoModel
{
    public function __construct(protected readonly TestThroughPutMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'data_pattern' => $data['data_pattern'],
            'nof_data_patterns_in_packet' => $data['nof_data_patterns_in_packet'],
            'time_between_packets' => $data['time_between_packets'],
            'nof_packets' => $data['nof_packets'],
        ];

        return new static(new TestThroughPutMsg($data));
    }

    public function getDataPattern(): string
    {
        return $this->proto->getDataPattern();
    }

    public function getNofDataPatternsInPacket(): int
    {
        return $this->proto->getNofDataPatternsInPacket();
    }

    public function getTimeBetweenPackets(): int
    {
        return $this->proto->getTimeBetweenPackets();
    }

    public function getNofPackets(): int
    {
        return $this->proto->getNofPackets();
    }


    public function toArray(): array
    {
        return [
            'data_pattern' => $this->getDataPattern(),
            'nof_data_patterns_in_packet' => $this->getNofDataPatternsInPacket(),
            'time_between_packets' => $this->getTimeBetweenPackets(),
            'nof_packets' => $this->getNofPackets(),
        ];
    }

    public function toProto(): TestThroughPutMsg
    {
        return $this->proto;
    }
}
