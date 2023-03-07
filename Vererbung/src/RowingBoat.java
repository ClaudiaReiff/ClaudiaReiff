/**
 * Rowing boat class
 * @author Claudia Emmy Reiff
 * @version 1.0
 */
public class RowingBoat extends NonMotorised {
    /**
     * Default constructor
     */
    public RowingBoat() {}

    /**
     * Boat category
     */
    private String category;

    /**
     * Number of paddles needed
     */
    private int paddleNr;

    /**
     * Number of rowers needed
     */
    private int rowerNr;
    public int getRowerNr() {
        return rowerNr;
    }
    public String getCategory() {
        return category;
    }
    public int getPaddleNr() {
        return paddleNr;
    }
    public void setRowerNr(int rowerNr) {
        this.rowerNr = rowerNr;
    }
    public void setCategory(String category) {
        this.category = category;
    }
    public void setPaddleNr(int paddleNr) {
        this.paddleNr = paddleNr;
    }

    /**
     * Calculate noise level of boat
     */
    public double calculateNoise() {
        return 0.0;
    }
    @Override
    public void drive() {
        System.out.println("Rowing boat drives!");
    }

    /**
     * @return
     */
    @Override
    public boolean windNeeded() {
        return false;
    }
}