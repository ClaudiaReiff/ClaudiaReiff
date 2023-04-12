package org.example;

import java.net.UnknownHostException;

public class Main {
    public static void main(String[] args) throws UnknownHostException {
        NSLookup nsLookup = new NSLookup();
        nsLookup.myLookup("52.216.145.50");
    }
}