<?php

echo "Hostname: " . $_ENV['database-hostname'] . "<br/>";
echo "Username: " . $_ENV['database-user'] ."<br />";
echo "Password: " . $_ENV['database-password'] ."<br />";

echo "";

phpinfo();