package org.example;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;

public class Main {

    private static final Logger logger = LogManager.getLogger("logfile");

    public static void main(String[] args) {
        logger.info("Test");
    }
}