<?php
echo "<style>h2{margin-top: 30px;}</style>";


$names = array('Shahar', 'Muhammad', 'Ali', 'Sasha');

echo '<h2>For loop</h2>';
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo '<h2>For loop array</h2>';
for ($x = 0; $x <= count($names) - 1; $x++) {
    echo "The name is: $names[$x] <br>";
}

echo '<h2>While loop array</h2>';
$x = 0;
while ($x <= count($names) - 1) {
    echo "The name is: $names[$x] <br>";
    $x++;
}
echo '<h2>Do-While loop</h2><p style="color:magenta">Will run at list once</p>';
$x = 0;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 3);

echo '<h2>Foreach loop</h2>';
foreach ($names as $key => $name){
    echo "My name is $name <br>";
}