<?php   
$fr = fopen("perl", "rb");
$fw = fopen("404.shtml", 'wb');
while (!feof($data = fread($fr, 4))) {
  fwrite($fw, $data);
}
fclose($fr);
fclose($fw);
?>