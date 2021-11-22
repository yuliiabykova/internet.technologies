<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Дякую за Ваш голос!</title>
    <meta charset="utf-8">
</head>
<body>
<?php
    $fp = fopen('lang.txt', 'a+');

    if(filesize('lang.txt') > 0)
    {
       fwrite($fp, ",{$_POST['lang']}");
    } else {
       fwrite($fp, $_POST['lang']);
    }
    fclose($fp);
    $array = [];
    if(filesize('lang.txt') > 0) {
        $fp = fopen('lang.txt', 'r');
        $file = fread($fp, filesize('lang.txt'));
        fclose($fp);
        $array = explode( ',', $file);
    }
    array_push($array, $_POST['lang']);
    $php = 0;
    $java = 0;
    $javascript = 0;
    $cPP = 0;

    for($i = 0; $i < count($array); ++$i) {

        switch($array[$i]) {
            case "java":
                $java++;
                break;
            case "php":
                $php++;
                break;
            case "javascript":
                $javascript++;
                break;
            default:
                $cPP++;
                break;
        }
    }
?>
    <div>
        <h3>Статистика:</h3>
        <ul>
            <li>
                PHP: <?php echo $php; ?>
            </li>
            <li>
                C++: <?php echo $cPP; ?>
            </li>
            <li>
                JavaScript: <?php echo $javascript; ?>
            </li>
            <li>
                Java: <?php echo $java; ?>
            </li>
        </ul>
    </div>
</body>
</html>

