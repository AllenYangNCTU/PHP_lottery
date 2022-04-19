<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$zone1_end=38;
$zone2_end=8;
$zone1_start=1;
$zone2_start=1;
$catch1=6;
$catch2=1;
$zonearray1=[];
$zonearray2=[];
for($i=$zone1_start;$i<=$zone1_end;$i++){
    $zonearray1[]=$i;
}
for($i=$zone2_start;$i<=$zone2_end;$i++){
    $zonearray2[]=$i;
}
shuffle($zonearray1);
shuffle($zonearray2);
print("zone1(from ".$zone1_start." to ".$zone1_end." ) :");
for($i=1;$i<=$catch1;$i++){
    print($zonearray1[$i]." ");
}
print("<br>");
print("zone2(from ".$zone2_start." to ".$zone2_end." ) :");
for($i=1;$i<=$catch2;$i++){
    print($zonearray2[$i]." ");
}

    ?>
</body>
</html>