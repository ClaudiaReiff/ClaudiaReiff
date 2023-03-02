import java.util.Date;

/**
 * Basic class for water crafts
 * @author Claudia Emmy Reiff
 * @version 1.0
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
    private Date lastServiced;

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
        return true;
    }
}