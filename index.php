<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//echo phpinfo();

echo "start testing...";
$connection = ssh2_connect("be.stat.ubc.ca",22);
ssh2_auth_password($connection,"testuser","Id!!wtwh@tr");

$stream = ssh2_exec($connection, 'php -v');
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
echo stream_get_contents($stream_out);
echo "<br>...end testing";


?>