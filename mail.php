<?php
 $from="antoninamilner@gmail.com";
$name = $_POST['name'];
$number = $_POST['number'];
$event = $_POST['event'];
$date = $_POST['date'];

mail($name, $number, $event, $date);
?>
