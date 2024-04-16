<?php
$title= 'Users';
require 'include/header.php'; ?>


<h1>Our Users:</h1>
<?php
if (!empty($_SESSION['username'])) 
{
    require 'include/db.php';
    $sql = "SELECT examusers.username AS USERNAME
     FROM examusers";

    $cmd = $db->prepare($sql);
    $cmd->execute();
    $names = $cmd->fetchAll();

    // start the list
    echo '<h1>Show Library</h1>';
    echo '<table><thead><th>Usernames</th>';
    echo '</thead>';
    foreach ($names as $name){
        echo '<tr>
            <td>' . $name['USERNAME'] . '</td>
            </tr>  ';   
    }
echo '</table>';

    $db = null;
} 
    
    
?>
</body>

</html>