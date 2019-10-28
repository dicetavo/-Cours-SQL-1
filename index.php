<?php

  echo "Bienvenue";

  $server = "localhost";
  $user = "root";
  $password = "root";
  $dbname = "cours";
  $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
  //$conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

  echo "Connexion Tip Top";

  $res = $conn->query('SELECT * FROM utilisateurs');

print_r( $res->fetch());
/*
try {
        $server = "localhost";
        $user = "root";
        $password = "root" ;
        $dbname = "cours";

        $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

        foreach($db->query('SELECT * from utilisateurs') as $row) {
            print_r($row);
        }

        $db = null;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }*/



?>
