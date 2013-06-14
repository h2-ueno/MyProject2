<?php
$domain="http://www.yahoo.co.jp/";
$path="index.html";
$saveDir="out/";

saveHtml($domain, $path, $saveDir);

function saveHtml($domain, $path, $saveDir) {
  $html=file_get_contents($domain . $path);
  $fp = fopen($saveDir.$path, "w");
  fwrite($fp, $html);
  fclose($fp);
}

