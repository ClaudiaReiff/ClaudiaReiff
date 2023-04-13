package org.example;

import java.net.UnknownHostException;

public class Main {
    public static void main(String[] args) throws UnknownHostException {
        NSLookup nsLookup = new NSLookup();

        nsLookup.myLookup("www.google.com");
        nsLookup.myLookup("www.java2s.com");
        nsLookup.myLookup("8.8.8.8");
        nsLookup.myLookup("invalid-hostname.com");
    }
}