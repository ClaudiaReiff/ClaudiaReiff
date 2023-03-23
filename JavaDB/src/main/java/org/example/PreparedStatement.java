package org.example;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;

public class PreparedStatement {
    private Connection connection = null;
    private java.sql.PreparedStatement preparedStatement = null;

    public PreparedStatement(Connection connection) {
        this.connection = connection;
    }

    //Create a prepared statement
    public void createPreparedStatement(String query){
        try{
            preparedStatement = connection.prepareStatement(query);
        } catch (SQLException e){
            e.printStackTrace();
        }
    }

    //Set parameter values for statement
    public void setPreparedStatement(Object... params){
        try {
            for (int i = 0; i < params.length; i++) {
                preparedStatement.setObject(i+1, params[i]);
            }
        } catch (SQLException e){
            e.printStackTrace();
        }
    }

    //Execute prepared statement
    public ResultSet executePreparedStatement() {
        try {
            return preparedStatement.executeQuery();
        } catch (SQLException e) {
            e.printStackTrace();
            return null;
        }
    }

    //Close prepared statement
    public void closePreparedStatement() {
        try {
            preparedStatement.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
