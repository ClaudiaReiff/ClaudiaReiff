/**
 * Liner class
 * @author Claudia Emmy Reiff
 * @version 1.0
 */
public class Liner extends Motorised {
    /**
     * Default constructor
     */
    public Liner() {}

    /**
     * Number of passengers the liner can accommodate
     */
    private int passengers = 0;

    /**
     * Name of the company that runs the liner
     */
    private String company;
    public String getCompany() {
        return company;
    }
    public int getPassengers() {
        return passengers;
    }
    public void setCompany(String company) {
        this.company = company;
    }
    public void setPassengers(int passengers) {
        this.passengers = passengers;
    }

    /**
     * Get room price per night
     */
    public double getRoomPrice(int passengers) {
        return 0.0;
    }
    @Override
    public void drive() {
        System.out.println("Liner drives!");
    }

    /**
     * @param litres
     */
    @Override
    public void refuelBoat(int litres) {

    }
}