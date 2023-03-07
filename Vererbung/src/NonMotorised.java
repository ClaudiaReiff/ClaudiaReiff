import Interfaces.INonMotorised;

/**
 * Basic class for non-motorised water crafts
 *  @author Claudia Emmy Reiff
 *  @version 1.0
 */

public abstract class NonMotorised extends Watercraft implements INonMotorised {
    /**
     * Default constructor
     */
    public NonMotorised() {}

    /**
     * Implement abstract method drive from watercraft
     */
    public abstract void drive();
}