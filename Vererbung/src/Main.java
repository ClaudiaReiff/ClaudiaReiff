import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

/**
 * Program starting point
 * @author Claudia Emmy Reiff
 * @version 1.0
*/
public class Main {

    public static void buyBoat(){
        int selection;
        double price = 0.0;

        List<Watercraft> insuredBoats = new ArrayList<Watercraft>();
        Scanner input = new Scanner(System.in);

        do{
            System.out.println("Which boat do you want to insure?");
            System.out.println("1-Motor boat");
            System.out.println("2-Rowing boat");
            System.out.println("3-None");
            selection = input.nextInt();

            if(selection == 1 || selection == 2){
                System.out.println("What does your boat cost?");
                price = input.nextDouble();
            }

            switch (selection){
                case 1:
                    MotorBoat motorBoat = new MotorBoat();
                    motorBoat.setPrice(price);
                    insuredBoats.add(motorBoat);
                    break;
                case 2:
                    RowingBoat rowingBoat = new RowingBoat();
                    rowingBoat.setPrice(price);
                    insuredBoats.add(rowingBoat);
                    break;
                case 3:break;
                default:
            }

        } while(selection == 1 || selection ==2);

        System.out.println("Number of boats to be insured: " +insuredBoats.toArray().length);
    }

    public static void main(String[] args) {
        buyBoat();
    }
}