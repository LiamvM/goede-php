<?php
	$timeis = ", the time is:";
	$name = "Liam";
	$time = date("H");
  	$timezone = date("e");
    if ($time < "12") {
        echo "<body id='morningimage'id='morning'><p id='morning'>Good morning " . $name . $timeis . "</p></body>";
    } else
    if ($time >= "12" && $time < "18") {
        echo "<body id='afternoonimage'><p id='afternoon'>Good afternoon " . $name . $timeis . "</p></body>";
    } else
    if ($time >= "18" && $time < "20") {
        echo "<body id='eveningimage'><p id='evening'>Good evening " . $name . $timeis . "</p></body>";
    } else
    if ($time >= "20") {
        echo "<body id='nightimage'><p id='night'>Good night " . $name . $timeis . "</p></body>";
    }
?>