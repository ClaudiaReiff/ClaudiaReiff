package org.example;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Calculator extends Frame implements ActionListener {
    private TextField input;
    private Button[] operators;
    private double num1, num2, result;
    private char operator;

    public Calculator(){

        setLayout(new BorderLayout());

        setPanel();

        setVisible(true);
        setTitle("Calculator");
        setSize(400,400);
    }

    /**
     * Set panel for calculator
     */
    public void setPanel(){

        input = new TextField();
        add(input, BorderLayout.NORTH);

        Panel buttonPanel = new Panel(new GridLayout(4,4));
        add(buttonPanel, BorderLayout.CENTER);

        operators = new Button[16];
        String[] operatorLabels = {"7", "8", "9", "+", "4", "5", "6", "-", "1", "2", "3", "*", "C", "0", "=", "/"};

        for (int i = 0; i < 16; i++) {
            operators[i] = new Button(operatorLabels[i]);
            operators[i].addActionListener(this);
            buttonPanel.add(operators[i]);
        }
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String buttonLabel = e.getActionCommand();

        if (buttonLabel.equals("C")){
            input.setText("");
        } else if(buttonLabel.equals("=")){
            num2 = Double.parseDouble(input.getText());

            switch (operator) {
                case '+' -> result = num1 + num2;
                case '-' -> result = num1 - num2;
                case '*' -> result = num1 * num2;
                case '/' -> result = num1 / num2;
            }

            input.setText("" + result);
        } else if (buttonLabel.equals("+") || buttonLabel.equals("-") || buttonLabel.equals("*") || buttonLabel.equals("/")) {
            num1 = Double.parseDouble(input.getText());
            operator = buttonLabel.charAt(0);
            input.setText("");
        } else {
            input.setText(input.getText() + buttonLabel);
        }
    }
}

