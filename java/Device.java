public class Device {

    String name;
    String status;

    public Device(String name) {
        this.name = name;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getStatus() {
        return this.status;
    }
}

class DeviceTest {
    public boolean test_KitchenLightOn() {
        Device device = new Device("kitchen light");

        device.setStatus("on");

        boolean myResult;

        if (device.getStatus().equals("on")) {
            myResult = true;
        } else {
            myResult = false;
        }

        device = null;
        return myResult;
    }
    
    public static void main(String[] args) {
        DeviceTest myTestSuite = new DeviceTest();
        boolean myTestResult = myTestSuite.test_KitchenLightOn();

        if (myTestResult)
            System.out.println("passed");
        else
            System.out.println("failed");
    }
}
