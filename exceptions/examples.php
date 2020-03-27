<?php

/*
 * Basic Exception
 * Unable to connect: could not find driver in File: .../connection.php on line x
 */
try {
   $db = new PDO("sqllite:".__DIR__."/database.db");
} catch (Exception $e) {
   echo "Unable to connect: " . $e->getMessage()
       . " in File: " . $e->getFile()
       . " on line " . $e->getLine();
}

/*
 * Silencing Exceptions. NOT good practice
 */
try {
    // do something that raises an exception
}
catch (Exception $e) {}
