package org.example;
import java.sql.SQLException;

public class Main {

    public static void main(String[] args) throws SQLException {

        DatabaseConnection connection = new DatabaseConnection
                ("jdbc:mysql://localhost:3306/holzlehen","root","");

        Database database = new Database(connection.getConnection());

        String[] strAr1=new String[] {"id"};
        String[] strAr2=new String[] {"INT"};

        database.createTable("test",strAr1,strAr2);
    }
}
