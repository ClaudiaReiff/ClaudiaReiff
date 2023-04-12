package org.example;

import java.net.Inet4Address;
import java.net.InetAddress;
import java.net.UnknownHostException;

public class NSLookup {
    public NSLookup() {}

    public void myLookup(String host) throws UnknownHostException {
        try {
            if(Inet4Address.getByName(host).getHostAddress().equals(host)){
                System.out.println(InetAddress.getByName(host));
            }
            else{
                InetAddress[] inetAddresses = InetAddress.getAllByName(host);
                for (InetAddress inetAddress : inetAddresses) {
                    System.out.println(inetAddress);
                }
            }

        } catch (UnknownHostException e) {
            System.out.println(e);
        }
    }
}
