<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .shop_section {
            padding: 50px 0;
        }

        .heading_container {
            text-align: center;
            margin-bottom: 30px;
        }

        .heading_container h2 {
            font-size: 36px;
            color: #333;
        }

        .buttons-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .buttons-container a {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #2ecc71;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .buttons-container a:hover {
            background-color: #27ae60;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .col {
            flex: 1 1 calc(30% - 20px);
            max-width: calc(30% - 20px);
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s ease;
        }

        .col:hover {
            transform: translateY(-5px);
        }

        .img-box {
            height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f1f1f1;
        }

        .img-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .detail-box h6 {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        .detail-box h6 span {
            color: #e74c3c;
            font-weight: bold;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .actions a {
            padding: 10px 15px;
            font-size: 14px;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .actions a.btn-danger {
            background-color: #e74c3c;
        }

        .actions a.btn-danger:hover {
            background-color: #c0392b;
        }

        .actions a.btn-primary {
            background-color: #3498db;
        }

        .actions a.btn-primary:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .col {
                flex: 1 1 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .col {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<section class="shop_section">
    <div class="container">
        

        <!-- Navigation Button -->
        <div class="buttons-container">
            <a href="{{ url('/') }}">Home</a>
        </div>

        <!-- Page Header -->
        <div class="heading_container">
            <h2>Product</h2>
        </div>

        <!-- Products -->
        <div class="row">
            @if($product->isEmpty())
                <p>No products found.</p>
            @else
                @foreach($product as $products)
                    <div class="col">
                        <!-- Product Image -->
                        <div class="img-box">
                            <img src="products/{{$products->image}}" alt="Product Image">
                        </div>

                        <!-- Product Details -->
                        <div class="detail-box">
                            <h6>{{ $products->title }}</h6>
                            <h6>Price: <span>{{ $products->price }}</span></h6>
                        </div>

                        <!-- Action Buttons -->
                        <div class="actions">
                            <a class="btn-danger" href="{{ url('product_details', $products->id) }}">Details</a>
                            <a class="btn-primary" href="{{ url('add_cart', $products->id) }}">Add to Cart</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

</body>
</html>