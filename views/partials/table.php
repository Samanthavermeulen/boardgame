<?php

$addnew = true;

echo '<table class="table">';
echo '<tr class="trow header green">';
foreach ($displayHeaders as $value)
{
    echo '<td class="cell">'.$value.'</td>';
}
echo '</tr>';

foreach ($sqlResult as $row)
{
    echo '<tr class="trow">';
    foreach ($row as $column)
    {
        echo '<td class="cell">'.$column.'</td>';
    }
    echo '</tr>';
}


if ($addnew) {
    echo '<tr class="trow">';
    foreach ($displayHeaders as $value) {
        echo '<td class="cell"><input type="text" name=' . $value . '></td>';
    }
}
echo '</tr>';

echo '</table>';


