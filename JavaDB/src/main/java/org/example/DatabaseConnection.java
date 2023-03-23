package org.example;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DatabaseConnection {

    public Connection getConnection() {
        return connection;
    }

    private final Connection connection;

    public DatabaseConnection(String url, String username, String password) throws SQLException{
        connection = DriverManager.getConnection(url, username, password);
    }

    public void close() throws SQLException{
        if (connection != null) connection.close();
    }
}
