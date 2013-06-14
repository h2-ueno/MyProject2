<?php
$domain = "http://www.yahoo.co.jp/";
$path = "index.html";
$saveDir = "out/";

saveHtml($domain, $path, $saveDir);

/**
 * @param $domain スクレイピング対象ドメイン
 * @param $path スクレイピング対象URLパス
 * @param $saveDir 保存先ディレクトリ
 */
function saveHtml($domain, $path, $saveDir)
{
    $html = file_get_contents($domain . $path);
    $fp = fopen($saveDir . $path, "w");
    fwrite($fp, $html);
    fclose($fp);
}

