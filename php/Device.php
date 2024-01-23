<?php
class Device {
    public $name = '';
    public $status = '';

    public function __construct($my_name)
    {
        $this->name = $my_name;
    }

    public function setStatus(string $new_status): void
    {
        $this->status = $new_status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}

class DeviceTest {
    public function test_KitchenLightOn() {
        $device = new Device('kitchen light');

        $device->setStatus('on');

        if ($device->getStatus() == 'on') {
            $myResult = TRUE;
        } else {
            $myResult = FALSE;
        }

	unset($device);
        return $myResult;
    }
}

$myTestSuite = new DeviceTest();
$myTestResult = $myTestSuite->test_KitchenLightOn();

if ($myTestResult == TRUE)
    echo 'passed';
else
    echo 'failed';
