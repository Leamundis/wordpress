<?php 

//var_dump($_POST['db']); die;

shell_exec("mkdir ./../../backup");
shell_exec("mkdir ./../../backup/saved");
shell_exec("zip -r ./../../backup/saved/backup.zip /var/www/html/ "); 
shell_exec("mysqldump -uroot -p0000 " . $_POST['db'] . " > ./../../backup/saved/backup.sql"); 
shell_exec("cp -r ./../../wp-backup/* ./../../backup/");



?>  