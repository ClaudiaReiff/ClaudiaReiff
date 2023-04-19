package org.example;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.util.ArrayList;
import java.util.Random;

public class Server {
    private static final int BUFSIZE = 5000;

    public static void main(String[] args) {
        String path = "C:\\Users\\claudia.reiff\\IdeaProjects\\UDP-Server\\src\\main\\java\\org\\example\\quotes.txt";

        QuoteReader reader = new QuoteReader();
        ArrayList<Message> quotes = QuoteReader.readQuotes(path);
        System.out.println("Number of available quotes: " + quotes.toArray().length);

        String host = "localhost";
        int port = 50000;
        Message message = null;
        Serializer serializer = new Serializer();

        try (DatagramSocket socket = new DatagramSocket(port)) {
            InetAddress address = InetAddress.getByName(host);
            DatagramPacket packet = new DatagramPacket(new byte[BUFSIZE], BUFSIZE, address, port);

            while (true) {
                //Receive
                socket.receive(packet);
                //String data = new String(packet.getData(), 0, packet.getLength());
                //message = serializer.deserialize(data);

                //Send
                int rnd = new Random().nextInt(quotes.toArray().length);
                String msg = serializer.serialize(quotes.get(rnd));
                byte[] quoteData = msg.getBytes();
                packet.setData(quoteData);
                packet.setLength(quoteData.length);
                System.out.println(packet);
                socket.send(packet);
            }
        } catch (IOException e) {
            System.err.println(e);
        }
    }
}
