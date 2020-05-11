<?php
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
     $pocetpand = $pocetpand - 1; 
     echo '<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0cc25e2e-d94d-42eb-a44c-a0dbb83598ae/d1x0kxu-81c4653a-fd15-441a-955f-0c9a36f3deea.png/v1/fill/w_100,h_100,q_80,strp/free_red_panda_icon_100x100_by_supertuffpinkpuff_d1x0kxu-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0xMDAiLCJwYXRoIjoiXC9mXC8wY2MyNWUyZS1kOTRkLTQyZWItYTQ0Yy1hMGRiYjgzNTk4YWVcL2QxeDBreHUtODFjNDY1M2EtZmQxNS00NDFhLTk1NWYtMGM5YTM2ZjNkZWVhLnBuZyIsIndpZHRoIjoiPD0xMDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.8dBISSG56Cyh75pW8lqN1dD5SDDxd8i-tpUWDutrjXc" alt="fuck off"/>';
 }   
 ?>
</body>
</html>