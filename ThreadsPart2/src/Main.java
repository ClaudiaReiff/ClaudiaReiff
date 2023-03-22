import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        MainThread thread = new MainThread();
        Scanner scanner = new Scanner(System.in);

        while(true){
            try{

                String x = scanner.nextLine();
                if (x.equals("p")){
                    thread.setRunning(false);
                }
                else if (x.equals("s")){
                    thread.setRunning(true);
                }
            } catch(Exception e){
                System.out.println("Wrong input!");
            }
        }
    }
}