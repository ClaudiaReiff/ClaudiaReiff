package org.example;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.PrintWriter;
import java.net.DatagramPacket;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class Server {
    private static final int BUFSIZE = 508;

    public static void main(String[] args) {
        ArrayList<Quote> quotes = new ArrayList<>();

        try {
            File file = new File("C:\\Users\\claudia.reiff\\IdeaProjects\\UDP-Server\\src\\main\\java\\org\\example\\quotes.txt");
            Scanner scanner = new Scanner(file);

            while (scanner.hasNext()){
                String line = scanner.nextLine();
                String[] quoteSplit = line.split("#");
                String text = quoteSplit[0];
                String author = quoteSplit[1];
                Quote quote = new Quote(text,author);
                quotes.add(quote);
            }
            scanner.close();
        } catch (FileNotFoundException e){
            System.out.println("File not found.");
        }
        System.out.println("Number of available quotes: " + quotes.toArray().length);

        try(ServerSocket serverSocket = new ServerSocket(3000)){
            Socket clientSocket = serverSocket.accept();

            String request = Arrays.toString(clientSocket.getInputStream().readAllBytes());

            if(request.equals("SEND_QUOTE")){
                System.out.println("Client request!");
            }

        } catch (IOException exception){
            exception.printStackTrace();
        }
    }
}
