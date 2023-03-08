import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

/**
 * Program starting point
 * @author Claudia Emmy Reiff
 * @version 1.0
*/
public class Main {
    public static void main(String[] args) {
        insureBoats();
    }

    /**
     * Set insurance for boats
     */
    public static void insureBoats(){
        int boatSelection;
        double insurancePrice = 0.0;

        List<Watercraft> insuredBoats = new ArrayList<Watercraft>();
        Scanner input = new Scanner(System.in);

        do{
            System.out.println("Which boat do you want to insure?");
            System.out.println("1-Motor boat");
            System.out.println("2-Rowing boat");
            System.out.println("3-None");

            boatSelection = input.nextInt();

            if(boatSelection == 1 || boatSelection == 2){
                System.out.println("What does your boat cost?");
                insurancePrice = input.nextDouble();
            }

            switch (boatSelection){
                case 1:
                    MotorBoat motorBoat = new MotorBoat();
                    motorBoat.setPrice(insurancePrice);
                    insuredBoats.add(motorBoat);
                    break;
                case 2:
                    RowingBoat rowingBoat = new RowingBoat();
                    rowingBoat.setPrice(insurancePrice);
                    insuredBoats.add(rowingBoat);
                    break;
                case 3:
                    break;
                default:
                    System.out.println("Invalid choice given.");
            }

        } while(boatSelection == 1 || boatSelection ==2);

        System.out.println("Number of boats to be insured: " +insuredBoats.toArray().length);
        removeInsurance(insuredBoats);
    }

    public static void removeInsurance(List<Watercraft> insured){
        double insurancePrice;
        Scanner input = new Scanner(System.in);

        System.out.println("What did the insured boat cost that you want to remove?");
        insurancePrice = input.nextDouble();

        insured.forEach(el -> {
            if(el.getPrice() == insurancePrice){
                insured.remove(el);
            }
        });

        System.out.println("Number of boats to be insured: " + insured.toArray().length);
    }
}