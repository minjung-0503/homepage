<?php
  echo "<script>alert('완료!')</script>";
  $myfile = fopen("db.txt", "a+");
  $txt = "\n".$_POST['memberId']."\n".$_POST['memberName']."\n".$_POST['memberPw'];
  fwrite($myfile , $txt);
  fclose($myfile);

echo("<script>location.href='index.php';</script>");
 ?>
