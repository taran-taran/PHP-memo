
<?= print "kitty<br>";?>
<!-- 結果
     kitty
     1
 -->
<?="<br>"?>

<?php print "kitty<br>";?>
<!-- 結果
     kitty
 -->
<?="<br>"?>

<? print "kitty<br>"?>
<!-- 結果
     "?>
 -->
<?="<br>"?>

<?="kitty<br>"?>
<!-- 結果
     kitty
 -->
<?="<br>"?>

<?php
/* 
環境＝chrome
print は常に 1 を返す。

? print    ⇒html処理される。使わないほうがよさそう。
?= print   ⇒戻り値「1」もついてくる。
?php print ⇒指定したデータ型だけ返される。

*/
