<?php
echo 'Hello this is a calculator' . PHP_EOL;
echo 'Insert the number' . PHP_EOL;
$operationType1 = (int)fgets(STDIN);
$operationType2 = fgets(STDIN);
$operationType3 = (int)fgets(STDIN);
$chislo1 = $operationType1;
$chislo2 = $operationType3;
function plus($chislo1, $chislo2)
{
    return $chislo1 + $chislo2;
}

function minus($chislo1, $chislo2)
{
    return $chislo1 - $chislo2;
}

function multiplication($chislo1, $chislo2)
{
    return $chislo1 * $chislo2;
}

function division($chislo1, $chislo2)
{
    return $chislo1 / $chislo2;
}

$operationType2 = trim($operationType2);


if ($operationType2 === '+') {
    echo plus($chislo1, $chislo2);
} elseif ($operationType2 === '-') {
    echo minus($chislo1, $chislo2);
} elseif ($operationType2 === '*') {
    echo multiplication($chislo1, $chislo2);
} elseif ($operationType2 === '/') {
    echo division($chislo1, $chislo2);
}

