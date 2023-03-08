import java.util.ArrayList;
import java.util.List;
import java.util.Objects;
import java.util.Scanner;

/**
 * Program starting point
 * @author Claudia Emmy Reiff
 * @version 1.0
*/
public class Main {
    public static void main(String[] args) {

        List<Watercraft> insuredBoats = new ArrayList<Watercraft>();
        int selection;

        Scanner input = new Scanner(System.in);

        do{
            System.out.println("What action would you like to perform?");
            System.out.println("1-Add boat");
            System.out.println("2-Remove boat");

            selection = input.nextInt();

            switch (selection) {
                case 1 -> insuredBoats = setBoatInsurance(insuredBoats);
                case 2 -> insuredBoats = removeInsurance(insuredBoats);
                default -> System.out.println("Wrong selection!");
            }
        } while(selection == 1 || selection ==2);

        System.out.println("Number of boats insured: " + insuredBoats.toArray().length);
    }

    /**
     * Set insurance for boats
     */
    public static List<Watercraft> setBoatInsurance(List<Watercraft> insuranceList){
        int boatSelection;
        String boatName = "";

        Scanner input = new Scanner(System.in);

        do{
            System.out.println("Which boat do you want to insure?");
            System.out.println("1-Motor boat");
            System.out.println("2-Rowing boat");
            System.out.println("3-None");

            boatSelection = input.nextInt();

            if( boatSelection == 1 || boatSelection == 2){
                System.out.println("What name does the boat have?");
                boatName = input.toString();
            }

            switch (boatSelection){
                case 1:
                    MotorBoat motorBoat = new MotorBoat();
                    motorBoat.setName(boatName);
                    insuranceList.add(motorBoat);
                    break;
                case 2:
                    RowingBoat rowingBoat = new RowingBoat();
                    rowingBoat.setName(boatName);
                    insuranceList.add(rowingBoat);
                    break;
                case 3:
                    break;
                default:
                    System.out.println("Invalid choice given.");
            }

        } while(boatSelection == 1 || boatSelection ==2);

        input.close();
        return  insuranceList;
    }

    /**
     * Remove insured boats from list
     */
    public static List<Watercraft> removeInsurance(List<Watercraft> insuredBoats){
        String boatName;
        Scanner input = new Scanner(System.in);

        System.out.println("What did the insured boat cost that you want to remove?");
        boatName = input.toString();

        insuredBoats.removeIf(el -> Objects.equals(el.getName(), boatName));
        input.close();
        return insuredBoats;
    }
}
