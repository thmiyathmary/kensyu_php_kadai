<?php
require_once("Cookie.php");
// $cookie = new Cookie(20);			// 20日後を有効期限とする
$cookie = new Cookie(Cookie::EXPIRE_BROWSER);	// ブラウザー限りとする
// $cookie = new Cookie();				// デフォルトの有効期限とする
$cookie->getAttribute("viewer_id");
$cookie->setAttribute("viewer_id", "123456789");
?>
<table border='1' align='left'>
<tr> <td>VARIABLES</td> <td>VALUES</td> </tr>
<?php
    foreach ($_COOKIE as $key => $value) {
        $variables = '$_COOKIE["' . $key . '"]';
        $values = $cookie->getAttribute($key);
        echo "<tr> <td>${variables}</td> <td>${values}</td> </tr>";
    }
?>
</table>
<br>
