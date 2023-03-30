package org.example;

import org.apache.logging.log4j.LogManager;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Logger;

public class Database {

    public static final Logger logger = (Logger) LogManager.getLogger(Database.class);

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