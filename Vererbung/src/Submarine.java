/**
 * Submarine class
 * @author Claudia Emmy Reiff
 * @version 1.0
 */
public class Submarine extends Motorised{
    /**
     * Default constructor
     */
    public Submarine() {}

    /**
     * Type of sonar installed
     */
    private String sonarType;

    /**
     * How many people can the submarine accommodated
     */
    private int accommodationCount;

    /**
     * Number of thrusters installed
     */
    private int thrusterNr;
    public String getSonarType() {
        return sonarType;
    }
    public int getAccommodationCount() {
        return accommodationCount;
    }
    public int getThrusterNr() {
        return thrusterNr;
    }
    public void setSonarType(String sonarType) {
        this.sonarType = sonarType;
    }
    public void setAccommodationCount(int accommodationCount) {
        this.accommodationCount = accommodationCount;
    }
    public void setThrusterNr(int thrusterNr) {
        this.thrusterNr = thrusterNr;
    }

    /**
     * Get total weight of passengers and boat
     */
    public double getTotalWeight() {
        return 0.0;
    }

    @Override
    public void drive() {
        System.out.println("Submarine drives!");
    }
}