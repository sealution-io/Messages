<?php

namespace Tests\Unit;

use Sealution\Communication\Models\ConfigMessage;
use Sealution\Communication\Models\EntityHeartbeat;
use Sealution\Communication\Models\SensorDataFromProto;
use Sealution\Communication\Models\SetTimeMessage;
use Sealution\Communication\Models\TestThroughputMessage;
use Sealution\Communication\Models\TestThroughputResponseMessage;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Sealution\Messages\HeartBeatMsg;
use Sealution\Messages\MainMsg;

class ModelTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testHeartbeatModel()
    {
        $data = [
            'date_time' => $time = Carbon::now(),
            'mac_address' => $mac = 'test',
            'entity_type' => $type = 'test',
        ];

        $heartbeat = EntityHeartbeat::fromData($data);

        //$heartbeat->toProto()->serializeToString();

        $this->assertEquals($mac, $heartbeat->getMacId());

        $this->assertEquals($time, $heartbeat->getTimestamp());

        //$this->assertEquals($type, $heartbeat->getEntityType());

        $this->assertInstanceOf(HeartBeatMsg::class, $heartbeat->toProto());
    }

    public function testConfigMessage()
    {
        $data = [
            'configuration' => 'config',
        ];

        $config = ConfigMessage::fromData($data);

        $this->assertEquals($data['configuration'], $config->getConfiguration());
    }

    public function testSetConfigMessage()
    {
        $data = [
            'configuration' => 'config',
        ];

        $config = ConfigMessage::fromData($data);

        $this->assertEquals($data['configuration'], $config->getConfiguration());
    }

    public function testSetTimeMessage()
    {
        $data = [
            'date_time' => $time = Carbon::now(),
        ];

        $config = SetTimeMessage::fromData($data);

        $this->assertEquals($time, $config->getTimestamp());
    }

    public function testTestMessage()
    {
        //TODO
    }

    public function testTestResponseMessage()
    {
        //TODO
    }

    public function testTestThroughputMessage()
    {
        $data = [
            'data_pattern' => 'testdatapattern',
            'nof_data_patterns_in_packet' => 2,
            'time_between_packets' => 3,
            'nof_packets' => 4,
        ];

        $throughput = TestThroughputMessage::fromData($data);

        $this->assertEquals($data['data_pattern'], $throughput->getDataPattern());
        $this->assertEquals($data['nof_data_patterns_in_packet'], $throughput->getNofDataPatternsInPacket());
        $this->assertEquals($data['time_between_packets'], $throughput->getTimeBetweenPackets());
        $this->assertEquals($data['nof_packets'], $throughput->getNofPackets());

    }

    public function testTestThroughputResponseMessage()
    {
        $data = [
            'idx' => 1,
            'test_data' => 'test',
        ];

        $throughputResponse = TestThroughputResponseMessage::fromData($data);

        $this->assertEquals($data['idx'], $throughputResponse->getIdx());
        $this->assertEquals($data['test_data'], $throughputResponse->getTestData());

    }

    public function testSensorDataModel()
    {
        $data = [
            'date_time_bt' => $timeSensor1 = Carbon::now(),
            'date_time_rm' => $timeSensor2 = Carbon::now(),
            'date_time_cm' => $timeSensor = Carbon::now(),
            'sensor_mac' => $sensor_mac = '54:ce:45',
            'room_module_mac' => $room_module_mac = 'RM:ce:45',
            'central_module_mac' => $central_module_mac = 'CM:ce:45',
            'rssi' => $rssi = 5,
            'data' => $data2 = '454',
        ];

        $sensorData = SensorDataFromProto::fromData($data);

        //$sensorData->toProto()->serializeToString();

        $this->assertEquals($sensor_mac, $sensorData->getSensorMac());

        $this->assertEquals($room_module_mac, $sensorData->getRoomModuleMac());

        $this->assertEquals($central_module_mac, $sensorData->getCentralModuleMac());

        $this->assertEquals($timeSensor1, $sensorData->getSensorTimestamp());

        $this->assertEquals($timeSensor2, $sensorData->getRoomModuleTimestamp());

        $this->assertEquals($timeSensor, $sensorData->getCentralModuleTimestamp());

        $this->assertEquals($rssi, $sensorData->getRssi());

        $this->assertEquals($data2, $sensorData->getData());
    }

    public function testMessageInit()
    {
        $test = new MainMsg();
        $heartbeat = new HeartBeatMsg();
        $heartbeat->setDateTime((new \Google\Protobuf\Timestamp())->setSeconds(time()));
        $heartbeat->setMacAddress('test');
        $test->setMsgType(MainMsg\eMsgType::MSG_TYPE_HEARTBEAT);
        $test->setHeartBeat($heartbeat);
        $data = $test->serializeToString();
        $test2 = $test->serializeToStream();
        $to = new MainMsg();
        try {
            $to->mergeFromString($data);
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
        $this->assertTrue(true);
    }

    public function testRabbitMQ()
    {
        $connection = new \PhpAmqpLib\Connection\AMQPStreamConnection('rat-01.rmq2.cloudamqp.com', 5672, 'mtjftdlv', 'pVT0orqHhZnzPt6a_ROdUhozr2jiZoUl', 'mtjftdlv');
        $channel = $connection->channel();
        $channel->queue_declare('hello', false, false, false, false);
        $msg = new \PhpAmqpLib\Message\AMQPMessage('Hello World!');
        $channel->basic_publish($msg, '', 'hello');
        echo " [x] Sent 'Hello World!'\n";
        $channel->close();
        $connection->close();
        $this->assertTrue(true);
    }

    public function testConsumeRabbitMQ()
    {
        $connection = new \PhpAmqpLib\Connection\AMQPStreamConnection('rat-01.rmq2.cloudamqp.com', 5672, 'mtjftdlv', 'pVT0orqHhZnzPt6a_ROdUhozr2jiZoUl', 'mtjftdlv');
        $channel = $connection->channel();
        $channel->queue_declare('hello', false, false, false, false);
        echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
        $callback = function ($msg) {
            echo ' [x] Received ', $msg->body, "\n";
        };
        $channel->basic_consume('hello', '', false, true, false, false, $callback);
        while (count($channel->callbacks)) {
            $channel->wait();
        }
        $channel->close();
        $connection->close();
        $this->assertTrue(true);
    }
}