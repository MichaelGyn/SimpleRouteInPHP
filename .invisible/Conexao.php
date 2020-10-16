<php

class Connection {


public static $dsn = 'mysql:dbname=mysql;host=127.0.0.1';
public static $user = 'root';
public static $password = '12345';
public static $pdo = '';

public static function getInstance() {

    if(isset($pdo)) {
        echo "Já existe uma conexão";
        } else {

               try {
                $pdo = new PDO($dsn, $user, $password);
              } catch (PDOException $e) {
                    echo 'Connection failed: ' . $e->getMessage();
            }

        }

       return $pdo;

    }

}
