<?php
// connect
include('../include/db.php');

$username=null;
if (!empty($_GET['USERNAME'])) {
    $username = $_GET['USERNAME'];
}
$sql="SELECT * FROM examusers ";


if (!empty($username)) {
    $sql = "SELECT * FROM examusers WHERE $username = :username";
}

$cmd = $db->prepare($sql);

if (!empty($username)) {
    $cmd->bindParam(':username', $username, PDO::PARAM_STR, 50);
}

$cmd->execute();
$users = $cmd->fetchAll(PDO::FETCH_ASSOC);

if (empty($users)) {
    echo '{ code: 404, response: "Not Found" }';
}
else {
    // output the json
    echo json_encode($users);
}

// disconnect
$db = null;
?>
