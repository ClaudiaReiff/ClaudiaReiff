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
        final String path = "C:\\Users\\claudia.reiff\\IdeaProjects\\UDP-Server\\src\\main\\java\\org\\example\\quotes.txt";

        QuoteReader reader = new QuoteReader();
        ArrayList<Message> quotes = QuoteReader.readQuotes(path);
        Integer connections = 0;
        System.out.println("Number of available quotes: " + quotes.size());

        String host = "localhost";
        int port = 50000;
        Serializer serializer = new Serializer();
        Random random = new Random();

        try (DatagramSocket socket = new DatagramSocket(port)) {
            InetAddress address = InetAddress.getByName(host);
            DatagramPacket packet = new DatagramPacket(new byte[BUFSIZE], BUFSIZE, address, port);

            while (true) {
                socket.receive(packet);

                int rnd = random.nextInt(quotes.size());
                String msg = serializer.serialize(quotes.get(rnd));
                byte[] quoteData = msg.getBytes();
                packet.setData(quoteData);
                packet.setLength(quoteData.length);
                socket.send(packet);

                connections++;
                System.out.println("Verbundene Clients: " + connections.toString());
            }
        } catch (IOException e) {
            System.err.println(e);
        }
    }
}
