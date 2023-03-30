package org.example;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) throws SQLException {

        DatabaseConnection connection = new DatabaseConnection("jdbc:mysql://localhost:3306/holzlehen","root","");
        Database database = new Database(connection.getConnection());

        Scanner scanner = new Scanner(System.in);

        System.out.println("When do you want to check-in?");
        String checkIn = scanner.nextLine();

        System.out.println("When do you want to check-out?");
        String checkOut = scanner.nextLine();

        String availabilitySql = "SELECT id FROM apartment WHERE id NOT IN ( " +
                " SELECT apartment_id FROM booking WHERE check_in <= ? AND check_out >= ? " +
                " );";

        String[] params = new String[] { checkIn,checkOut };

        connection.setAutoCommit();
        ResultSet rs = database.selectStatement(availabilitySql,params);
        connection.commitConnection();

        while (rs.next()){
            System.out.println(rs.getString("id"));
        }
    }
}