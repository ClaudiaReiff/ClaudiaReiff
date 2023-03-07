/**
 * Motorboat class
 * @author Claudia Emmy Reiff
 * @version 1.0
 */
public class MotorBoat extends Motorised {
    /**
     * Default constructor
     */
    public MotorBoat() {}

    /**
     * Number of engines built-in
     */
    private int engineCount;

    /**
     * License needed to drive motorboat
     */
    private boolean licenseNeeded;
    public boolean isLicenseNeeded() {
        return licenseNeeded;
    }
    public int getEngineCount() {
        return engineCount;
    }

    public void setLicenseNeeded(boolean licenseNeeded) {
        this.licenseNeeded = licenseNeeded;
    }
    public void setEngineCount(int engineCount) {
        this.engineCount = engineCount;
    }

    /**
     * Check if license is still valid
     */
    public String validLicense() {
        return "";
    }
    @Override
    public void drive() {
        System.out.println("Motorboat drives!");
    }

    /**
     * @param litres
     */
    @Override
    public void refuelBoat(int litres) {

    }
}