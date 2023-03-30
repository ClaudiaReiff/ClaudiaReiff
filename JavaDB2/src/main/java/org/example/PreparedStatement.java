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
    public void setPreparedStatement(String[] params){
        try {
            for (int i = 0; i < params.length; i++) {
                preparedStatement.setString(i+1, params[i]);
            }
        } catch (SQLException e){
            e.printStackTrace();
        }
    }

    public void executePreparedStatement() {
        try {
            preparedStatement.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    //Execute prepared statement
    public ResultSet executeSelectPreparedStatement() {
        ResultSet resultSet = null;
        try {
            resultSet = preparedStatement.executeQuery();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return resultSet;
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

