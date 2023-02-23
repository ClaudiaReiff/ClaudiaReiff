import java.util.InputMismatchException;
import java.util.Scanner;

public class BMICalculator {

    public void calculateBMI(){
        Scanner scanner = new Scanner(System.in);

        double weight = 0;
        double height = 0;
        double bmi = 0;

        while(true){
            try {
                System.out.println("Please enter your weight(kg): ");
                weight = scanner.nextDouble();
                if(weight <= 0) throw new ArithmeticException();
                break;
            }
            catch (InputMismatchException ime){
                System.out.println("Invalid data entered!");
                scanner.nextLine();
            }
            catch (ArithmeticException ae){
                System.out.println("The value cannot be less than or equal to 0!");
                scanner.nextLine();
            }
        }

        while (true){
            try{
                System.out.println("Please enter your height(cm): ");
                height = scanner.nextDouble();
                if(height <= 0) throw new ArithmeticException();
                break;
            }
            catch (InputMismatchException ime){
                System.out.println("Invalid data entered!");
                scanner.nextLine();
            }
            catch (ArithmeticException ae){
                System.out.println("The value cannot be less than or equal to 0!");
                scanner.nextLine();
            }
        }

        bmi = (100 * 100 * weight)/(height * height);
        System.out.println("Your BMI is: " + bmi);
        scanner.close();
    }
}
