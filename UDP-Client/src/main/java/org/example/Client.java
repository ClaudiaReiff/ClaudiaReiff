package org.example;

import java.net.*;

public class Client {
    private static final int BUFSIZE = 5000;

    public static void main(String[] args) throws Exception{
        String host = "localhost";
        int port = 50000;
        Message receiveMsg = null;

        Serializer serializer = new Serializer();
        Message sendMsg = new Message("Claudia","Test");
        String message = serializer.serialize(sendMsg);

        try (DatagramSocket socket = new DatagramSocket()) {
            //Send
            InetAddress address = InetAddress.getByName(host);
            DatagramPacket packet = new DatagramPacket(new byte[BUFSIZE], BUFSIZE, address, port);
            byte[] data = message.getBytes();
            packet.setData(data);
            packet.setLength(data.length);
            socket.send(packet);

            //Receive
            packet = new DatagramPacket(new byte[BUFSIZE], BUFSIZE, address, port);
            socket.receive(packet);
            String packetData = new String(packet.getData(), 0, packet.getLength());
            receiveMsg = serializer.deserialize(packetData);

            System.out.println("Empfangene Daten: " + packetData);
            System.out.println("Daten des neuen Objektes: " + receiveMsg);

        } catch (SocketException | UnknownHostException e) {
            throw new RuntimeException(e);
        }
    }
}