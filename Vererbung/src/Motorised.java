import Interfaces.IMotorised;

/**
 * Basic class for motorised water crafts
 * @author Claudia Emmy Reiff
 * @version 1.0
 */

public abstract class Motorised extends Watercraft implements IMotorised {
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
     * Motorboat speed
     */
    private String speed;

    /**
     * Implement abstract method drive
     */
    public abstract void drive();
}