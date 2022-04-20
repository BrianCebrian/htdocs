<?php
$array = array();
foreach (range('a', 'z') as $letra) {
    array_push($array, $letra);
}
echo '<br />';
print_r($array);

echo '<ul>';
for ($i = 0; $i < count($array); $i++) {
    echo '<li>' . $array[$i] . '</li>';
    //echo $array[$i];
}
echo '</ul>';

echo '<hr />';
echo '<br />';
echo '<hr />';

echo '<ul>';
$dos = '';
for ($i = 0; $i < count($array); $i++) {
    $dos = $dos . $array[$i];
    echo '<li>' . $dos . '</li>';
    //echo $array[$i];
}
echo '</ul>';

echo '<hr />';
echo '<br />';
echo '<hr />';

echo '<ul>';
$tres = '';
for ($i = count($array) - 1; $i >= 0; $i--) {
    $tres = $tres . $array[$i];
    echo '<li>' . $tres . '</li>';
    //echo $array[$i];
}
echo '</ul>';
