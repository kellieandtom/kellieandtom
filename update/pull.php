<?php

// Let's execute 'git pull' and send the viewer back to the index with a query string
$output = exec('sh pull.sh');
header ('Location: ../update/?updated=1');

?>
