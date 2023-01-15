<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果表示</title>
</head>
<body>
<?php

echo htmlspecialchars($_POST['name'], ENT_QUOTES);
echo htmlspecialchars($_POST['email'], ENT_QUOTES);
echo htmlspecialchars($_POST['number'], ENT_QUOTES);
echo htmlspecialchars($_POST['age'], ENT_QUOTES);
echo '<br>';
if($_POST['exp']=="1") echo"20代";
if($_POST['exp']=="2") echo"30代";
if($_POST['exp']=="3") echo"40代";
if($_POST['exp']=="4") echo"50代以上";
echo htmlspecialchars($_POST['exp'], ENT_QUOTES);
echo '<br>';
if($_POST['exp']=="1") echo"希望しない";
if($_POST['exp']=="2") echo"2月1日10時～参加希望希望";
if($_POST['exp']=="3") echo"2月1日14時～参加希望希望";
if($_POST['exp']=="4") echo"個別説明会を希望";
echo htmlspecialchars($_POST['questions'], ENT_QUOTES);
?> 
</body>
</html>
