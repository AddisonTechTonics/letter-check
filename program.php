<?php
$in = $_POST['in'];
echo '<p>', $in, '</p>';

if (ctype_alpha($in)) {
 strtolower($in);
 if (in_array($in, array("a", "e", "i", "o", "u"))) {
  echo 'This letter is a vowel';
 }
 else {echo 'This letter is a consanant';}
}
else {
  echo "that is not a valid letter";
}

?>