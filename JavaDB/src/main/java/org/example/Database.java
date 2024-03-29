package org.example;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;

public class Database {

    private final Connection connection;

    public Database(Connection connection) { this.connection = connection; }

    public void createTable(String sql) throws SQLException {

        PreparedStatement preparedStatement = new PreparedStatement(connection);

        preparedStatement.createPreparedStatement(sql);
        preparedStatement.executePreparedStatement();
        preparedStatement.closePreparedStatement();
    }

    public ResultSet selectStatement(String query, String[] params) throws SQLException{
        PreparedStatement preparedStatement = new PreparedStatement(connection);
        preparedStatement.createPreparedStatement(query);

        preparedStatement.setPreparedStatement(params);
        ResultSet rs = preparedStatement.executeSelectPreparedStatement();
        return rs;
    }
}
