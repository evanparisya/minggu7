<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "tidak ada huruf kecil!";
}

echo "<br><br>";
$pattern ='/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo "<br><br>";
$pattern = '/[o]{1,3}/';
$text ='god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: ". $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>