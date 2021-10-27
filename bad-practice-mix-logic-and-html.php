<h1>New Users</h1>

<?php

$sql = "SELECT * FROM users ORDER BY date_registered DESC";
$result = mysql_query($sql) or die(mysql_error());
?>
<table class="my-table-class">
<?php
while($row = mysql_fetch_assoc($result)){
    echo '<tr><td style="color: aquamarine">' . $row['username'] . '</td><td>' . $row['date_registered'] . '</td></tr>';
}
?>
</table>
<?php
function random_custom_function($var){
    $var = $var + 1;
    return '<span style="font-weight:bold;">' . $var . '</span>';
}

$sql = "SELECT * FROM table WHERE column = 'test'";
$result = mysql_query($sql) or die(mysql_error());

?>

<div id="test">
<?php
$i = 0;
while($row = mysql_fetch_assoc($result)){
    if($row['type'] == 3){
        echo '<div style="margin-bottom:20px;">' . random_custom_function($row['val']) . '</div>';
        $i++;
    }
    else{
        echo '<div style="margin-bottom:20px;">' . $row['val'] . '</div>';
    }
}

if($i == 0){
    echo '<table>';
    echo '<tr><td>Found none!</td></tr>';
    echo '</table>';
}