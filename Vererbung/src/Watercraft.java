/**
 *
 */
public abstract class Watercraft {
    /**
     * Default constructor
     */
    public Watercraft() {}

    /**
     * Brand type of watercraft
     */
    private String brand;

    /**
     *Weight of watercraft
     */
    private int weight;

    /**
     * Last service date for watercraft
     */
    private DateTime lastServiced;

    /**
     * Price of watercraft
     */
    private double price;

    /**
     * Drive behaviour of watercraft
     */
    public abstract void drive();

    /**
     * Does watercraft need service
     */
    public boolean needsService() {
        return false;
    }
}