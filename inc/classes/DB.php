<?php
class DB {
    protected static $con;

    private function __construct() {
        try {
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=8889;dbname=phplogin', 'root', 'root');
            self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);
        } catch (PDOException $e) {
            echo "Could not connect to Database.\r\n";
            exit;
        }
    }

    public static function getConnection() {
        if (!self::$con) {
            new DB();
        }
        // return the writeable db connection
        return self::$con;
    }
}

?>