<?php 


$s = null;
$a = '1112031584';
for($i = 0; $i < strlen($a); $i++) {
  if ($a[$i] % 2 == $a[$i-1] % 2) {
    $s += max($a[$i] , $a[$i-1]);
  }
}
echo $s;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="h1">test</h1>
    <script> 
        s = '';
        a = '1112031584';
        for(i = 0; i < a.length; i++) {
            if (a[i] % 2 == a[i-1] % 2) {
                s += Math.max(a[i] , a[i-1]);
            }
        }
        console.log(a.length);
        console.log(s);
    </script>
</body>
</html>