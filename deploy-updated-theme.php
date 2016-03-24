<?php

$DEPLOY_LOCATION = "/home/pga/portals/phasta/public/themes/phasta";

if ($_POST['payload']) {

    shell_exec("cd {$DEPLOY_LOCATION} && git pull");

    die("done " . mktime());
}

?>