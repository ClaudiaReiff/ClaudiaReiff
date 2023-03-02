/**
 * Pedal boat class
 * @author Claudia Emmy Reiff
 * @version 1.0
 */
public class PedalBoat extends NonMotorised{
    /**
     * Default constructor
     */
    public PedalBoat() {}

    /**
     * Number of seats
     */
    private int seats;

    /**
     * If roof is installed for boat
     */
    private boolean hasRoof;
    public int getSeats() {
        return seats;
    }
    public boolean isHasRoof() {
        return hasRoof;
    }
    public void setSeats(int seats) {
        this.seats = seats;
    }
    public void setHasRoof(boolean hasRoof) {
        this.hasRoof = hasRoof;
    }

    /**
     * Number of paddlers needed
     */
    public int neededPaddlers() {
        // TODO implement here
        return 0;
    }

    @Override
    public void drive() {
        System.out.println("Liner drives!");
    }
}