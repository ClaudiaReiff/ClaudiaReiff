package org.example;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;

public class Serializer {
    public Serializer() {}

    public Message deserialize(String data) {
        ObjectMapper mapper = new ObjectMapper();
        Message quote = new Message();
        try {
            quote = mapper.readValue(data, Message.class);
        } catch (JsonProcessingException e) {
            e.printStackTrace();
        }
        return quote;
    }
    public String serialize(Message msg) {
        ObjectMapper mapper = new ObjectMapper();
        String json = "";
        try {
            json = mapper.writeValueAsString(msg);
            return json;
        } catch (JsonProcessingException e) {
            e.printStackTrace();
        }
        return json;
    }
}
