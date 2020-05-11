<?php
$panda = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0cc25e2e-d94d-42eb-a44c-a0dbb83598ae/d1x0kxu-81c4653a-fd15-441a-955f-0c9a36f3deea.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMGNjMjVlMmUtZDk0ZC00MmViLWE0NGMtYTBkYmI4MzU5OGFlXC9kMXgwa3h1LTgxYzQ2NTNhLWZkMTUtNDQxYS05NTVmLTBjOWEzNmYzZGVlYS5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.l1Y-AJt3hRs0gIaHkE6TQAu9o1ecUacdlGr6dCLOLfk"
define ('MAX_MINION', 50);
define ('MIN_MINION', 10);
$pocetpand = rand(MIN_MINION, MAX_MINION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 while ($pocetpand > 0) { 
     $pocetpand = $pocetpand - 1
     echo $panda
 }   
 ?>
</body>
</html>