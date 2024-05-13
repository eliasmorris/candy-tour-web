<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>From: {!! htmlspecialchars($mailfrom) !!}</h1>
    <h1>Name: {{$firstName}} {{$firstName}}</h1>
    <h1>Phone No:{{$phoneNumber}}</h1>
    <h1>Fisrst Date: {{$startdate}} Last Date: {{$enddate}}</h1>
    <h1>Package Name: {{$packagename}}</h1>
    <h1>Number of Vistors: {{$vistornumber}}</h1>
    <h1>Tour total Cost: {{$totalcost}}</h1>
</body>
</html>