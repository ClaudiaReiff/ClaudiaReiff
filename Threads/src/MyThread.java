/**
 * Class that implements thread
 */
public class MyThread extends Thread{
    @Override
    public void run(){
        while (true){
            try{
                System.out.println("LBS");
                System.out.println(new java.util.Date());
            }
            catch (Exception e){}
        }
    }
}
