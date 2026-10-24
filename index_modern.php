<?php

function isValidInt($value): bool
{
    if ($value === '') return false;
    if (!is_numeric($value)) return false;
    $num = (float)$value;
    return $num == (int)$num;
}

function readValidInt(string $prompt): int
{
    while (true) {
        fwrite(STDOUT, $prompt);
        $line = trim(fgets(STDIN) ?? '');
        if (isValidInt($line)) {
            return (int)$line;
        }
        fwrite(STDERR, "Введите, пожалуйста, число\n");
    }
}

$a = readValidInt('Введите первое число: ');
$b = readValidInt('Введите второе число: ');

if ($b === 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}

echo ($a / $b) . PHP_EOL;
?>