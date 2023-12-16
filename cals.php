<?php 
if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operatoin'])) {
    return 'Не передана операция';
}

if ((empty($_GET['x1']) && $_GET['x1'] != 0) || (empty($_GET['x2']) && $_GET['x2'] != 0)) {
    return 'Не переданы аргументы';
}


if (!is_numeric($_GET['x1']) || !is_numeric($_GET['x2'])) {
    return 'Нет числа';
}

$x1 = (float)$_GET['x1'];
$x2 = (float)$_GET['x2'];

$expression = $x1 . ' ' . $_GET['operatoin'] . ' ' . $x2 . ' = ';

switch ($_GET['operatoin']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
        case '*':
            $result = $x1 * $x2;
            break;
        case '/':
            if($_GET['x2'] == 0) {
                return 'На ноль делить нельзя!';
            } else {
            $result = $x1 / $x2;
            break;
            }
    default:
     return 'Операция не поддерживается';
}

return $expression . $result;
?>