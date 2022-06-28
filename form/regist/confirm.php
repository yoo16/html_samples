<?php
if (isset($_POST)) $posts = $_POST;
if (isset($_FILES['file'])) $file = $_FILES['file'];

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
</head>

<body>
    <div>
        <h2>氏名</h2>
        <?= @$posts['name'] ?>
    </div>

    <div>
        <h2>年代</h2>
        <?= @$posts['age'] ?>
    </div>

    <div>
        <h2>性別</h2>
        <?= @$posts['gender'] ?>
    </div>

    <div>
        <h2>質問</h2>
        <?php if (isset($posts['questions'])) : ?>
        <?php foreach (@$posts['questions'] as $question) : ?>
            <p><?= $question ?></p>
        <?php endforeach ?>
        <?php endif ?>
    </div>

    <div>
        <h2>ファイル</h2>
        <p><?= @$file['name'] ?></p>
        <p><?= @$file['tmp_name'] ?></p>
    </div>

    <div>
        <h2>その他</h2>
        <?= nl2br(@$posts['body']) ?>
    </div>
    
    <div>
        <h2>user_id</h2>
        <?= @$posts['user_id'] ?>
    </div>
    <p>
        <a href="input.php">Back</a>
    </p>
</body>

</html>