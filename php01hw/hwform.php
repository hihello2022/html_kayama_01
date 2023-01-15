<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アンケート入力</title>
</head>
<body>
    <h1>ボランティアアンケートフォーム</h1>
    <form method="post" action="write.php">
        <p>お名前：<input type="text" name="name" size="20" required></p>
        <p>メールアドレス：<input type="text" name="email" size="20"></p>
        <p>電話番号：<input type="number" name="number" size="20"></p>
        <p>年齢：<select name="age">
            <option hidden>選択してください</option>
            <option value="1">20代</option>
            <option value="2">30代</option>
            <option value="3">40代</option>
            <option value="4">50代以上</option>
        </select></p>
        説明会への参加を希望しますか？：</p>
        <p> <input type = "radio" name = "exp" value = "1" checked>希望しない
            <input type = "radio" name = "exp" value = "2">2月1日10時～参加希望希望
            <input type = "radio" name = "exp" value = "3">2月1日14時～参加希望希望
            <input type = "radio" name = "exp" value = "4">個別説明会を希望</p>
            <p>質問などありましたら、ご記入ください。：</p>
            <p><textarea area name="questions" cols="40" rows="5" maxlength="400">
                </textarea></p>
        <input type="submit" value="送信" size="20">
        </form>

</body>
</html>