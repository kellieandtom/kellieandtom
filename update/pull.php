<?php

// Let's execute 'git pull' and send the viewer back to the index with a query string
$output = exec('git pull');
header ('Location: ../update/?updated=1');

?>
