<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_center{
        display:flex;
        justify-content: center;
        align-items: center;
        padding:30px
    }

    .detail-box
    {
        padding: 15px;
    }

  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
   
  </div>
  <!-- end hero area -->

 <!-- product details start hereeee NABO -->
 <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

      

        <div class="col-md-12">
          <div class="box">
           
              <div class="div_center" >
                <img width="400" src="/products/{{$data->image}}" alt="">  <!-- nabo: fetching from product table of the ecommerce_project database -->
              </div>

              <div class="detail-box">
                <h6>{{$data->title}}</h6> <!-- nabo: fetching from product table of the ecommerce_project database -->
                <h6>
                  Price   
                  <span>{{$data->price}}</span>
                </h6>                            <!-- nabo: fetching from product table of the ecommerce_project database -->
              </div>
             
 
              <div class="detail-box">
                <h6>Category: {{$data->category}}</h6> 
                <h6>Available Quantity
                  
                  <span>{{$data->quantity}}</span>
                </h6>                            
              </div>

              <div class="detail-box">
                
                  
                  <p>{{$data->description}}</p>
                                         
              </div>


             


          </div>
        </div>

     
       
       
      </div>
      
    </div>
  </section>






 <!-- product details end hereeee NABO -->

   

  <!-- info section -->
  @include('home.footer')
</body>

</html>