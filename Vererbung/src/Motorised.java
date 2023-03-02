/**
 *
 */
public abstract class Motorised extends Watercraft{
    /**
     * Default constructor
     */
    public Motorised() {}

    /**
     * Type of motor installed
     */
    private String motorType;

    /**
     * Power of motor in KW
     */
    private String power;

    /**
     * Speed of motor boat
     */
    private String speed;

    /**
     * Implement abstract method drive
     */
    public abstract void drive();
}