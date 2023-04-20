package org.example;
import com.fasterxml.jackson.annotation.JsonProperty;

public class Message {
    private String author;
    private String message;

    public Message() {}

    public Message(String author, String message) {
        this.author = author;
        this.message = message;
    }

    @JsonProperty("author")
    public void setAuthor(String user) {
        this.author = user;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    @Override
    public String toString(){
        return "author : "+ author + " message : "+message;
    }

    public String getAuthor(){ return author;
    }

    public String getMessage(){ return message;}
}
