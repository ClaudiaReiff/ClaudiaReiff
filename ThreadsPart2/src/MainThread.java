import java.io.IOException;
import java.util.Enumeration;
import java.util.Random;
import java.util.Vector;

public class MainThread {
    private final Vector<Integer> randomList = new Vector<Integer>();
    private final Object lock = new Object();
    private boolean isRunning = true;

    public boolean isRunning() {
        return isRunning;
    }
    public void setRunning(boolean running) {
        isRunning = running;
    }

    public MainThread() {
        new Producer().start();
        new Consumer().start();
    }


    /**
     * Notifier class
     */
    public class Producer extends Thread{
        public void run(){
            while (true){
                while(isRunning){
                    synchronized (lock){
                        while (randomList.size() >=5){
                            try{
                                lock.wait();
                            }
                            catch (InterruptedException e){
                                System.out.println("Error");
                            }
                        }
                        produce(randomList);
                        lock.notify();
                        try{
                            Thread.sleep(500);
                        }catch (Exception e){
                            System.out.println("Error");
                        }
                    }
                }
            }
        }

        /**
         * Produces a set of 5 random integers
         */
        private void produce(Vector<Integer> vec){
            Random random = new Random();
            int max = 100;
            int min = 0;

            for(int i=0;i<5;i++){
                int randomNr = random.nextInt(max - min + 1) + min;
                vec.addElement(randomNr);
            }
            Enumeration<Integer> en = vec.elements();
            System.out.println("\nElements produced are:");

            while(en.hasMoreElements())
                System.out.print(en.nextElement() + " ");
        }
    }

    /**
     * Waiter class
     */
    public class Consumer extends Thread{
        public void run(){

            while(true){
                synchronized (lock){
                    while (randomList.isEmpty()){
                        try{
                            lock.wait();
                        }catch(InterruptedException e){
                            System.out.println("Error");
                        }
                    }
                    consume(randomList);
                    lock.notify();

                    try{
                        Thread.sleep(500);
                    }catch (Exception e){
                        System.out.println("Error");
                    }
                }
            }
        }

        /**
         * Consumes a set of 5 random integers
         */
        private void consume(Vector<Integer> vec){
            Enumeration<Integer> en = vec.elements();
            System.out.println("\nElements consumed are:");

            while(en.hasMoreElements())
                System.out.print(en.nextElement() + " ");

            vec.clear();
        }
    }
}
