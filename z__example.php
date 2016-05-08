<?  session_start();
    $Ol=$_SESSION['Ol'];
    $l1=strtolower($_POST[$Ol]);	

if(count($_POST)>0)isset($_SESSION['kap4a'])&&$_SESSION['kap4a']===$l1?$n=1:$n=0;
if(!isset($_SESSION['kap4a'])||!isset($_SESSION['Ol']))
  {
    echo"<meta http-equiv=Refresh content='0; url=http://{$_SERVER['HTTP_HOST']}/z__example.php'>";
    $hid4a=1; require_once("index.php"); exit;
}
?>
<center>
<form method=POST>
<p>Введите текст, показанный ниже:</p>
<p><img src="http://<?=$_SERVER['HTTP_HOST']?>/kap4a/index.php?s&c&r=5"></p>
<?$lO=$_SESSION['Ol']=$_SESSION['nam4a']?>
<p><input name=<?=$lO?> type=text size=16 maxlength=10></p>
<p><input type=submit value='  Подтвердить ввод  '></p>
<?="Результат ввода : "?><?=$n?"СОВПАДЕНИЕ":"ОШИБКА"?>
</form>
</center>
