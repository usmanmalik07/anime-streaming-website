<!-- resources/views/checkout.blade.php
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include necessary head elements, like title, styles, etc. -->
</head>

<body>
    <div class="container">
        <h1 class="mt-4 text-white">Checkout</h1>

        <!-- Display Cart Items -->
        @if(count($cartItems) > 0)
            <ul class="list-group">
                @foreach($cartItems as $cartItem)
                    <li class="list-group-item">
                        {{ $cartItem['name'] }} - Quantity: {{ $cartItem['quantity'] }} - Total Price: ${{ $cartItem['total_price'] }}
                    </li>
                @endforeach
            </ul>

            <!-- Display Total Bill -->
            <h3 class="mt-4 text-white">Total Bill: ${{ array_sum(array_column($cartItems, 'total_price')) }}</h3>

            <!-- Checkout Form -->
            <form action="{{ route('checkout.process') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-success mt-4">Proceed to Checkout</button>
            </form>
        @else
            <p class="text-white">Your cart is empty.</p>
        @endif
    </div>
</body>

</html> -->
