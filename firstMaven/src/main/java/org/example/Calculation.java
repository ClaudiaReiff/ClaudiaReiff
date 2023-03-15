package org.example;
import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;

public class Calculation {
    public static final Logger logger = LogManager.getLogger(Calculation.class);
    public Calculation() {}

    public void addition(int a,int b){
        int sum = a +b;
        logger.info("Die Addition ergibt: " + sum);
    };
    public void division(double a, double b){
        double result = a / b;
        logger.info("Die Division ergibt: " + result);
    }
}
