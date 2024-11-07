<?
    //Setting MySQL database parameters
    $host = 'localhost';
    $user = 'root';
    $pass = '';

    //Connection in database using PDO
    //Beginning of a try block
    try{
        //Attempt to create a neq PDO object and connecting to a MySQL database
        //The connection string is contructed using the variables $host, $user and $pass

        $conn = new PDO("mysql:host=$host; $user, $pass");

        //If the connection is succesful
        echo "Connected";
    } catch (Exeption $e){
        echo "Not Connected";
    }
?>