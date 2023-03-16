public class Main {
    public static void main(String[] args) {

       Thread thread1 = new Thread(new MyThread());
       //Thread thread2 = new Thread(new RunnableThread());

       thread1.start();
       //thread2.start();
    }
}