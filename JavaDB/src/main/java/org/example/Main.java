package org.example;
import java.sql.SQLException;

public class Main {

    public static void main(String[] args) throws SQLException {
        PreparedStatement preparedStatement = null;

        String availabilitySql = "";

        DatabaseConnection connection = new DatabaseConnection
                ("jdbc:mysql://localhost:3306/holzlehen","root","");

       preparedStatement = new PreparedStatement(connection.getConnection());
    }
}
