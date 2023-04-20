package org.example;

import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.ServerSocket;
import java.net.Socket;
import java.net.SocketAddress;

public class Server {
    public static void main(String[] args) {
        try (ServerSocket serverSocket = new ServerSocket(5000)) {
            System.out.println("TCPServer gestartet ...");
            process(serverSocket);
        } catch (IOException e) {
            System.err.println(e);
        }
    }

    public static void process(ServerSocket serverSocket) throws IOException{
        while (true){
            SocketAddress address = null;
            try(Socket socket = serverSocket.accept();
                ObjectOutputStream out = new ObjectOutputStream(socket.getOutputStream());
                ObjectInputStream in = new ObjectInputStream(socket.getInputStream())){

                address = socket.getRemoteSocketAddress();
                System.out.println("Verbindung zu " + address + " hergestellt");
            }
        }
    }
}