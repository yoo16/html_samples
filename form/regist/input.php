<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>
</head>

<body>

  <div class="container">
    <form action="confirm.php" method="post" enctype="multipart/form-data">
      <div>
        <h2>氏名</h2>
        <input type="text" name="name" value="">
      </div>

      <div>
        <h2>年齢</h2>
        <select name="age" class="form-control">
          <option value="">-- 年代を選択してください --</option>
          <option value="10">10代</option>
          <option value="20">20代</option>
          <option value="30">30代</option>
          <option value="40">40代</option>
        </select>
      </div>

      <div>
        <h2>性別</h2>
        <input id="male" type="radio" name="gender" value="male">
        <label for="male">男性</label>
        <input id="female" type="radio" name="gender" value="female">
        <label for="female">女性</label>
      </div>

      <div>
        <h2>質問</h2>
        <input id="question_1" type="checkbox" name="questions[]" value="1">
        <label for="question_1">回答1</label>
        <input id="question_2" type="checkbox" name="questions[]" value="2">
        <label for="question_2">回答2</label>
        <input id="question_3" type="checkbox" name="questions[]" value="3">
        <label for="question_3">回答3</label>
      </div>

      <h2>ファイル</h2>
      <input type="file" name="file">

      <div>
        <h2>その他</h2>
        <textarea name="body" rows="5" cols="50"></textarea>
      </div>

      <input type="hidden" name="user_id" value="1">

      <input type="submit" value="送信">

    </form>
  </div>

</body>

</html>