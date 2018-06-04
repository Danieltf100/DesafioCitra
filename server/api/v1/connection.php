<?php

$dir = 'sqlite:../../data/src/database.db';

$dbh  = new PDO($dir) or die("cannot open the database");

?>
