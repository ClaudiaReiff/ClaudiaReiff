package org.example;

public class MyHost {
    private String[] ipAddressList;
    private String hostname;

    public MyHost(String[] ipAddressList, String hostname) {
        this.ipAddressList = ipAddressList;
        this.hostname = hostname;
    }

    public String[] getIpAddressList() {
        return ipAddressList;
    }

    public void setIpAddressList(String[] ipAddressList) {
        this.ipAddressList = ipAddressList;
    }

    public String getHostname() {
        return hostname;
    }

    public void setHostname(String hostname) {
        this.hostname = hostname;
    }
}
