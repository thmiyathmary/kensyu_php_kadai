<table border='1' align='left'>
<tr> <td>VARIABLES</td> <td>VALUES</td> </tr>
<?php
    foreach ($_REQUEST as $key => $value) {
        $variables = '$_REQUEST["' . $key . '"]';
        $values = is_array($value) ? print_r($value) : $value;
        echo "<tr> <td>${variables}</td> <td>${values}</td> </tr>";
    }
?>
</table>
<br>
<form action="kadai4.php" method="post">
 名前: <input type="text" name="name" />
 名前: <input type="text" name="name2" />
 名前: <input type="text" name="name3" />
 <input type="submit" />
</form>
