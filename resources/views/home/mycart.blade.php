<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    table {
      border: 2px solid black;
      text-align: center;
      width: 800px;
    }

    th {
      border: 2px solid black;
      text-align: center;
      color: white;
      font: 20px;
      font-weight: bold;
      background-color: skyblue;
    }

    td {
      border: 1px solid skyblue;
    }

    .cart_value {
      text-align: center;
      margin-bottom: 70px;
      padding: 18px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>

  <div class="div_deg">
    <table>
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Remove</th>
      </tr>

      <?php $totalCartValue = 0; ?>

      <!-- Group cart items by product_id -->
      @foreach($cart->groupBy('product_id') as $productId => $groupedItems)
      @php
        $firstItem = $groupedItems->first(); // Get the first cart item in the group
        $product = $firstItem->product; // Get the product details
        $productPrice = $product->price ?? DB::table('products')->where('id', $productId)->value('price'); // Fetch price if missing
        $totalQuantity = $groupedItems->count(); // Total items of this product in cart
        $totalPrice = $productPrice * $totalQuantity; // Calculate total price for the product
      @endphp

      <tr>
        <!-- Product Title -->
        <td>{{ $product->title ?? 'Unknown Product' }}</td>

        <!-- Total Price -->
        <td>{{ $totalPrice }}</td>

        <!-- Total Quantity -->
        <td>{{ $totalQuantity }}</td>

        <!-- Product Image -->
        <td>
          <img width="150" src="/products/{{ $product->image ?? 'default.png' }}" alt="{{ $product->title }}">
        </td>

        <!-- Remove Button -->
        <td>
          <a class="btn btn-danger" href="{{ url('delete_cart', $firstItem->id) }}">Remove</a>
        </td>
      </tr>

      <?php $totalCartValue += $totalPrice; ?>
      @endforeach
    </table>
  </div>

  <div class="cart_value">
    <h3>Total Value of Cart is: Taka {{ $totalCartValue }}</h3>
  </div>

  @include('home.footer')
</body>

</html>