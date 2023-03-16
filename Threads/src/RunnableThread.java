/**
 * Class that implements interface runnable
 */
public class RunnableThread implements Runnable{

    public String name = "Thread2";

    @Override
    public void run() {
        System.out.println(name);
        System.out.println(new java.util.Date());
    }
}
