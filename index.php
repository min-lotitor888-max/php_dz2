<?php

$firstLine = trim(fgets(STDIN));
$secondLine = trim(fgets(STDIN));

function isValidInt($value): bool
{
    if ($value === '') {
        echo "пустая строка" . "\n";
        return false;
    }

    if (!is_numeric($value)) {
        return false;
    }

    $num = (float)$value;
    return $num == (int)$num;
}

if (!isValidInt($firstLine)) {
    fwrite(STDERR, "Введите, пожалуйста, число:\n");
    exit(1);
}

if (!isValidInt($secondLine)) {
    fwrite(STDERR, "Введите, пожалуйста, число:\n");
    exit(1);
}

$a = (int)$firstLine;
$b = (int)$secondLine;

if ($b === 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}

$result = $a / $b;
echo $result . PHP_EOL;
?>