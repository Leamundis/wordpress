<?php 


shell_exec("unzip ./../saved/backup.zip"); 
shell_exec("mysql -uroot -p0000 " . $_POST['db'] . " < ./../saved/backup.sql");


shell_exec("cp -r ./var/www/html/* ./../../");
shell_exec("rm -rf var/");

header("Location: http://192.168.33.10");
?>