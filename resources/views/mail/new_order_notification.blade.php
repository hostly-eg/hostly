<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Order Notification</title>
</head>
<body>
    <h1>New Order Notification</h1>
    <p>User Name: {{ $user->name }}</p>
    <p>User Email: {{ $user->email }}</p>
    <p>Order Total: {{ $order->total }}</p>
    <p>Order Status: {{ $order->status }}</p>
    <p>Order Created At: {{ $order->created_at }}</p>
    <p>Order Updated At: {{ $order->updated_at }}</p>
    <p>Order ID: {{ $order->id }}</p>
</body>
</html>