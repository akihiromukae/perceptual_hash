<?php
// @see https://github.com/jenssegers/imagehash
require __DIR__ . '/vendor/autoload.php';

use Jenssegers\ImageHash\Implementations\DifferenceHash;
use Jenssegers\ImageHash\ImageHash;

$dir = __dir__.'/images/';
$a_img = 'lena.jpg';
$b_img = 'girl.jpg';

$implementation = new DifferenceHash;
$hasher = new ImageHash($implementation);
//$hash = $hasher->hash('path/to/image.jpg');

$distance = $hasher->compare(
    $dir.$a_img,
    $dir.$b_img
            );

echo 'distance: '.$distance."\n";
echo '<img src="'.$dir.$a_img.'" width="100px"><br>'."\n";
echo '<img src="'.$dir.$b_img.'" width="100px"><br>'."\n";
