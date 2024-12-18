<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

      
      @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">  <!-- nabo: fetching from product table of the ecommerce_project database -->
              </div>
              <div class="detail-box">
                <h6>{{$products->title}}</h6> <!-- nabo: fetching from product table of the ecommerce_project database -->
                <h6>
                  Price   
                  <span>{{$products->price}}</span>
                </h6>                            <!-- nabo: fetching from product table of the ecommerce_project database -->
              </div>
             
              <div style="padding:15px"> <!-- nabo: adds details button to the product viewing section -->

                  <a class="btn btn-danger" href="
                  {{url('product_details',$products->id)}}">Details</a>


                  <a class="btn btn-primary" href="{{url('add_cart',$products->id)}}">Add to Cart</a>

              </div> 


          </div>
        </div>

      @endforeach
       
       
      </div>
      
    </div>
  </section>