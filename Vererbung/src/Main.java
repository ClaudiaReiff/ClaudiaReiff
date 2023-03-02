/**
 * Program starting point
 * @author Claudia Emmy Reiff
 * @version 1.0
*/
public class Main {
    public static void main(String[] args) {
        Motorised[] motorisedBoats = new Motorised[2];
        motorisedBoats[0] = new MotorBoat();
        motorisedBoats[1] = new Liner();

        motorisedBoats[0].drive();
        motorisedBoats[1].drive();

        Liner liner = new Liner();
        liner.setPassengers(2000);
        System.out.println("Passenger capacity for the liner: " +liner.getPassengers());
    }
}