<?php
// hello
// hello2
// hello3
$file = "out/index.html";
$xpaths = array(
	"/html/body/center/table/tr/td/table[5]/tr/td[1]/table[3]/tr/td[1]/table/tr[2]/td/a/@href"
);

function parse($file, $xpaths) {
  $html = file_get_contents($file);
  $dom  = @DOMDocument::loadHTML($html);
  $xml  = simplexml_import_dom($dom);
  
  foreach($xpaths as $xpath) {
    $item = $xml->xpath($xpath);

    $search  = array("\t", "\n", "\r");
    $replace = array("", "<br/>", "");
    $str = @str_replace($search, $replace, $item[0][0]);
    
    print "\"".$str."\",";
  }
  print "\n";
}

  parse($file, $xpaths);
