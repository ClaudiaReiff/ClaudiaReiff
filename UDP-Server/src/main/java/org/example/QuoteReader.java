package org.example;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.ArrayList;
import java.util.Scanner;

public class QuoteReader {
    public QuoteReader() {}

    public static ArrayList<Message> readQuotes(String path){
        ArrayList<Message> quotes = new ArrayList<>();

        try {
            File file = new File("C:\\Users\\claudia.reiff\\IdeaProjects\\UDP-Server\\src\\main\\java\\org\\example\\quotes.txt");
            Scanner scanner = new Scanner(file);

            while (scanner.hasNext()){
                String line = scanner.nextLine();
                String[] quoteSplit = line.split("#");
                String text = quoteSplit[0];
                String author = quoteSplit[1];
                Message quote = new Message(author,text);
                quotes.add(quote);
            }
            scanner.close();
        } catch (FileNotFoundException e){
            System.out.println("File not found.");
        }
        return quotes;
    }
}
