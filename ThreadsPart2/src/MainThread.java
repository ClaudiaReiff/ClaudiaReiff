import java.util.Enumeration;
import java.util.Random;
import java.util.Vector;

public class MainThread {
    private final Vector<Integer> vec = new Vector<Integer>(20);
    private boolean wait = true;

    public MainThread() {
        new Producer().start();
        new Consumer().start();
    }

    public class Producer extends Thread{
        public void run(){
            produce(vec);
            synchronized (vec){
                wait = false;
                vec.notify();
            }
        }

        public void produce( Vector<Integer> vec){
            Random random = new Random();
            int max = 100;
            int min = 0;

            for(int i=0;i<5;i++){
                int randomNr = random.nextInt(max - min + 1) + min;
                vec.addElement(randomNr);
            }
        }
    }
    public class Consumer extends Thread{
        public void run(){
            consume(vec);
            synchronized (vec){
                while (wait){
                    try {
                        vec.wait();
                        wait(100);
                    }
                    catch (InterruptedException e){
                        System.out.println("");
                    }
                }
            }
        }

        public void consume(Vector<Integer> vec){
            Enumeration<Integer> en = vec.elements();
            System.out.println("\nElements are:");

            while(en.hasMoreElements())
                System.out.print(en.nextElement() + " ");

            vec.clear();
        }
    }
}
