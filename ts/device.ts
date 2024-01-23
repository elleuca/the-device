class Device {
    name: string;
    status: string;

    constructor(my_name: string) {
        this.name = my_name;
        this.status = '';
    }

    setStatus(new_status: string): void {
        this.status = new_status;
    }

    getStatus(): string {
        return this.status;
    }
}

class DeviceTest {
    test_KitchenLightOn(): boolean {
        let device = new Device('kitchen light');

        device.setStatus('on');

        let myResult = device.getStatus() === 'on'

        return myResult;
    }
}

let myTestSuite = new DeviceTest();
let myTestResult = myTestSuite.test_KitchenLightOn();

console.log(myTestResult ? 'passed' : 'failed');
