<?php
$nameA = test_input($_POST["nameA"]);
file_put_contents("MyApplets/" . $nameA . ".json", '{"tooltip":"Logout","icon":"glyphicon glyphicon-off","code":"Hello World!"}');
wd_head($wd_type, $wd_app, 'MyPageApl.php', '&MyApp=' . $nameA . '.json');
?>