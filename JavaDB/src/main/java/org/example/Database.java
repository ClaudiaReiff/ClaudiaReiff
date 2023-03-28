package org.example;

import java.sql.Connection;
import java.sql.SQLException;

public class Database {

    private final Connection connection;

    public Database(Connection connection) { this.connection = connection; }

    public void createTable(String tableName, String[] columns,String[] columnTypes) throws SQLException {

        PreparedStatement preparedStatement = new PreparedStatement(connection);

        StringBuilder sb = new StringBuilder();
        sb.append("CREATE TABLE IF NOT EXISTS ");
        sb.append(tableName);
        sb.append(" (");

        for (int i=0; i < columns.length; i++){
            sb.append(columns[i]).append(" ").append(columnTypes[i]);
            if (i < columns.length - 1) sb.append(", ");
        }

        sb.append(");");
        preparedStatement.createPreparedStatement(sb.toString());
        preparedStatement.executePreparedStatement();
        preparedStatement.closePreparedStatement();
    }
}
