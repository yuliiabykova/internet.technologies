<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Голосування</title>
    <meta charset="utf-8">
</head>
<body>
    <h4>Ваша улюблена мова програмування:</h4>
    <form method="post" action="handle.php">
        <div>
            <input type="radio" id="php" name="lang" value="php">
            <label for="php">PHP</label>
        </div>
        <div>
            <input type="radio" id="c++" name="lang" value="c++">
            <label for="c++">C++</label>
        </div>
        <div>
            <input type="radio" id="javascript" name="lang" value="javascript">
            <label for="javascript">JavaScript</label>
        </div>
        <div>
            <input type="radio" id="java" name="lang" value="java">
            <label for="java">Java</label>
        </div>
        <div>
            <button type="submit">Вiдправити</button>
        </div>
    </form>
</body>
</html>
