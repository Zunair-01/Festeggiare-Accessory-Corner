<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Order Confirmation</h2>
    <p>Dear {{ $order->user->name }},</p>
    <p>Thank you for your order. We have received your payment of ${{ $order->total_price }}.</p>
    <p>Order Details:</p>
    <ul>
        <li>Product: {{ $order->product->name }}</li>
        <li>Quantity: {{ $order->quantity }}</li>
        <li>Total Price: ${{ $order->total_price }}</li>
    </ul>
    <p>Thank you for shopping with us!</p>
</body>
</html>
