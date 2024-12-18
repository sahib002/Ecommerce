<!DOCTYPE html>
<html>

<head>
  @include('admin.css')
  <style type = "text/css">
    .div_deg{
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
    }
    .table_deg{
      border: 2px solid white;
    }

    th{
      background-color: skyblue;
      color: white;
      font-size: 20;
      font-weight: bold;
      padding: 15px;
    }

    td{
      border: 1px solid skyblue;
      text-align: center;
      color: white;
    }

    input[type='search']{
      width: 500px;
      height: 40px;
      margin-left: 50px;
      
    }
  </style>
</head>

<body>
  @include('admin.header')
  
  @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
        <form action="{{url('product_search')}}" method="get">
          
          @csrf

          <input type="search" name="search">
          <input class="btn btn-secondary" type="submit" value="search">
        </form>
        <div class="div_deg">
          <table class="table_deg">
            <tr>

              <th>Product Title</th>
              <th>Description</th>
              <th>Category</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Image</th>
              <th> Edit </th>
              <th> Delete </th>

            </tr>

            @foreach ($product as $products)

            <tr> 

              <td>{{$products->title}}</td>
              <td>{!!Str::limit($products->description,50)!!}</td>
              <td>{{$products->category}}</td>
              <td>{{$products->price}}</td>
              <td>{{$products->quantity}}</td>
              
              <td>
                <img height="100" width="100" src="products/{{$products->image}}">
              </td>

              <td>
                <a class="btn btn-success" href="{{url('update_product',$products->id)}}"> Edit </a>
              </td>

              <td>
                <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}"> Delete </a>
              </td>

            </tr>

            @endforeach

            

          </table>

          

        </div>

        <div class="div_deg">
        {{$product->onEachSide(1)->links()}}
        </div>
        
          
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
  <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
  <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('admincss/js/charts-home.js')}}"></script>
  <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>