<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
<?php
$doc = new DOMDocument();
$doc->Load('employees.xml');
$xpath = new DOMXPath($doc);
$entries = $xpath->query("/employees/employee/@EmpType");
$entries1 = $xpath->query("/employees/employee");

foreach ($entries as $entry) 
{
   echo "結果：" . $entry->nodeValue . "<br>";

}
?>

</body>
</html>
