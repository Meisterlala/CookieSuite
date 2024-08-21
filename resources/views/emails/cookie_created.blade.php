<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Cookie Created</title>
</head>
<body>
    <h1>A New Cookie Has Been Created!</h1>
    <p><strong>Cookie Name:</strong> {{ $cookie->name }}</p>
    <p><strong>Quantity:</strong> {{ $cookie->quantity }}</p>
    <p><strong>Production Date:</strong> {{ $cookie->production_date->format('Y-m-d') }}</p>
    <p>Thank you for using CookieSuite!</p>
</body>
</html>
