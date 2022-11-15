<?php

namespace Sealution\Communication\Models;

use Sealution\Communication\Interfaces\ProtoModel;
use Carbon\Carbon;
use Sealution\Messages\MQTTSensorDataMsg;

class SensorDataFromProto implements ProtoModel
{
    public function __construct(protected readonly MQTTSensorDataMsg $proto)
    {
    }

    public static function fromData(array $data): static
    {
        $data = [
            'date_time_bt' => new \Google\Protobuf\Timestamp([
                'seconds' => $data['date_time_bt'] instanceof Carbon ? $data['date_time_bt']->unix() : Carbon::parse($data['date_time_bt'])->unix(),
                'nanos' => $data['date_time_bt'] instanceof Carbon ? $data['date_time_bt']->microsecond * 1000 : Carbon::parse($data['date_time_bt'])->microsecond * 1000,
            ]),
            'date_time_rm' => new \Google\Protobuf\Timestamp([
                'seconds' => $data['date_time_rm'] instanceof Carbon ? $data['date_time_rm']->unix() : Carbon::parse($data['date_time_rm'])->unix(),
                'nanos' => $data['date_time_rm'] instanceof Carbon ? $data['date_time_rm']->microsecond * 1000 : Carbon::parse($data['date_time_rm'])->microsecond * 1000,
            ]),
            'date_time_cm' => new \Google\Protobuf\Timestamp([
                'seconds' => $data['date_time_cm'] instanceof Carbon ? $data['date_time_cm']->unix() : Carbon::parse($data['date_time_cm'])->unix(),
                'nanos' => $data['date_time_cm'] instanceof Carbon ? $data['date_time_cm']->microsecond * 1000 : Carbon::parse($data['date_time_cm'])->microsecond * 1000,
            ]),
            'mac_bt' => $data['sensor_mac'],
            'mac_rm' => $data['room_module_mac'],
            'mac_cm' => $data['central_module_mac'],
            'rssi' => $data['rssi'],
            'data' => $data['data'],
        ];

        return new static(new MQTTSensorDataMsg($data));
    }

    public function getSensorTimestamp(): Carbon
    {
        $timestamp = $this->proto->getDateTimeBt();

        return Carbon::createFromTimestamp($timestamp->getSeconds() + $timestamp->getNanos() / 1000000000);
    }

    public function getRoomModuleTimestamp(): Carbon
    {
        $timestamp = $this->proto->getDateTimeRm();

        return Carbon::createFromTimestamp($timestamp->getSeconds() + $timestamp->getNanos() / 1000000000);
    }

    public function getCentralModuleTimestamp(): Carbon
    {
        $timestamp = $this->proto->getDateTimeCm();

        return Carbon::createFromTimestamp($timestamp->getSeconds() + $timestamp->getNanos() / 1000000000);
    }

    public function getSensorMac(): string
    {
        return $this->proto->getMacBt();
    }

    public function getRoomModuleMac(): string
    {
        return $this->proto->getMacRm();
    }

    public function getCentralModuleMac(): string
    {
        return $this->proto->getMacCm();
    }

    public function getRssi(): int
    {
        return $this->proto->getRssi();
    }

    public function getData(): string
    {
        return $this->proto->getData();
    }

    public function toArray(): array
    {
        return [
            'date_time_bt' => $this->getSensorTimestamp()->toIso8601ZuluString(),
            'date_time_rm' => $this->getRoomModuleTimestamp()->toIso8601ZuluString(),
            'date_time_cm' => $this->getCentralModuleTimestamp()->toIso8601ZuluString(),
            'sensor_mac' => $this->getSensorMac(),
            'room_module_mac' => $this->getRoomModuleMac(),
            'central_module_mac' => $this->getCentralModuleMac(),
            'rssi' => $this->getRssi(),
            'data' => $this->getData(),
        ];
    }

    public function toProto(): MQTTSensorDataMsg
    {
        return $this->proto;
    }
}
