<?php

include_once 'connection.php';

$q = json_decode(file_get_contents('php://input'), true);

$option = @$q['option'];

$selectAll = 'select * from conta'; // Default ou se option == 0
$selectContaWithId = "select * from conta where id = :id"; // option == 1
$selectContaWithName = "select * from conta where nome like '%:nome%'"; // option == 2
if ($q == null) {

  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $parameters = @explode("?", $actual_link)[1];
  $optionParam = @explode("&", $parameters)[0];
  $idParam = @explode("&", $parameters)[1];
  $option = @explode("=", $optionParam)[1];
  $id = @str_replace("%20", " ", explode("=", $idParam)[1]);

} elseif ($option != null) {
    $id = @$q['id'];
}
if ($option == '1') {
  $sth = $dbh->prepare($selectContaWithId, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $sth->execute(array(':id' => $id));
  $response = array();
  foreach($sth->fetchAll() as $row) {
    $newLine = array(
      'id' => $row[0],
      'nome' => $row[1],
      'saldo' => $row[2],
      'dataAbertura' => $row[3]
    );
    array_push($response, $newLine);
  }
  echo (json_encode($response));
}
elseif ($option == '2') {
  $query = "SELECT * FROM conta WHERE nome LIKE '%".$id."%'";
  $response = array();
  foreach($dbh->query($query) as $row) {
    $newLine = array(
      'id' => $row[0],
      'nome' => $row[1],
      'saldo' => $row[2],
      'dataAbertura' => $row[3]
    );
    array_push($response, $newLine);
  }
  echo (json_encode($response));
}
else {
  $response = array();
  foreach ($dbh->query($selectAll) as $row) {
    $newLine = array(
      'id' => $row[0],
      'nome' => $row[1],
      'saldo' => $row[2],
      'dataAbertura' => $row[3]
    );
    array_push($response,$newLine);
  }
  echo (json_encode($response));
}

?>
