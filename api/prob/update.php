<?php
  require '/var/www/hackjack/db/creds.php';

  if(isset($_POST['probId']) && isset($_POST['card']) && isset($_POST['cardVal']) && isset($_POST['total'])){
    $id = htmlspecialchars($_POST['probId']);
    $card = htmlspecialchars($_POST['card']);
    $cardVal = htmlspecialchars($_POST['cardVal']);
    $total = htmlspecialchars($_POST['total']));

    $sql = "UPDATE probability
            SET " . $card . " = '" . $cardVal "', total = '" . $total "'
            WHERE id = '" . $id . "';";
    if (!$result) {
            $response['message'] = "Query Failed" . mysql_error();
            die(json_encode($response));
        } else {
            $response['status'] = "ok";

            print json_encode($response);
        }
  }
 ?>