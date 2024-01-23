class Device:
    def __init__(self, my_name):
        self.name = my_name
        self.status = ''

    def set_status(self, new_status):
        self.status = new_status

    def get_status(self):
        return self.status


class DeviceTest:
    def test_KitchenLightOn(self):
        device = Device('kitchen light')
        device.set_status('on')
        return device.get_status() == 'on'


myTestSuite = DeviceTest()
myTestResult = myTestSuite.test_KitchenLightOn()
print('passed' if myTestResult else 'failed')
