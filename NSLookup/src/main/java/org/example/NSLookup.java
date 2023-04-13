package org.example;

import java.net.Inet4Address;
import java.net.InetAddress;
import java.net.UnknownHostException;

public class NSLookup {
    public NSLookup() {}

    public void myLookup(String host){
        try {
            if(Inet4Address.getByName(host).getHostAddress().equals(host)){
                System.out.println(host + " : " + InetAddress.getByName(host).getHostName());
            }
            else{
                InetAddress[] inetAddresses = InetAddress.getAllByName(host);
                for (InetAddress inetAddress : inetAddresses) {
                    System.out.println(host + " : " + inetAddress.getHostAddress());
                }
            }

        } catch (UnknownHostException e) {
            System.out.println("Host could not be found.");
        }
    }
}
