<?php

// Let's execute the updater script and send the viewer back to the index with a query string
$output = exec('cd ../ | git pull');
header ('Location: ../update/?updated=1');

?>
