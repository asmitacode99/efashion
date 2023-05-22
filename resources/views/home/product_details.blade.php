
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
     

      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>FashionMart</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <style>
         /* rating */
.rating-css div {
    color: #ffe400;
    font-size: 5px;
    font-family: sans-serif;
    font-weight: 500;
    text-align: center;
    text-transform: uppercase;
    padding: 0px;
  }
  .rating-css input {
    display: none;
  }
  .rating-css input + label {
    font-size: 30px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
  }
  .rating-css input:checked + label ~ label {
    color: #b4afaf;
  }
  .rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
  }

/* End of Star Rating */
         </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
        
       <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding: 30px;">
                  
                     <div class="img-box" style="padding: 20px">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>

                        @if($product->discount_price!=null)
                        <h6 style="color:red">
                        Discount price
                        <br>
                           ${{$product->discount_price}}
                        </h6>
                        <h6 style="text-decoration: line-through; color:blue;">
                        Price
                        <br>
                           ${{$product->price}}
                        </h6>
                        @else
                        <h6 style="color:blue">
                        Price
                        <br>
                        ${{$product->price}}
                        </h6>
                        @endif

                        <h6>Product Category : {{$product->category}}</h6>
                        <h6>Product Category : {{$product->description}}</h6>
                        <h6>Available Quantity : {{$product->quantity}}</h6>
    

                        <form action="{{url('add_cart',$product->id)}}" method="POST">

                           @csrf

                              <div class="row">

                              <div class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                              </div>

                              <div class="col-md-4">
                              <input type="submit" value="Add To Cart">
                              </div>
                             

                </div>
                <button style= color:black; type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Rate this product</button>
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <form action="" method="POST">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Rate {{  $product->title}}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                      
                                    </form>

                              </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="rating-css">
                                       <div class="star-icon">
                                          <input type="radio" value="1" name="product_rating" checked id="rating1">
                                          <label for="rating1" class="fa fa-star"></label>
                                          <input type="radio" value="2" name="product_rating" id="rating2">
                                          <label for="rating2" class="fa fa-star"></label>
                                          <input type="radio" value="3" name="product_rating" id="rating3">
                                          <label for="rating3" class="fa fa-star"></label>
                                          <input type="radio" value="4" name="product_rating" id="rating4">
                                          <label for="rating4" class="fa fa-star"></label>
                                          <input type="radio" value="5" name="product_rating" id="rating5">
                                          <label for="rating5" class="fa fa-star"></label>
                                       </div>
                     </div>
                  </div>
                  </div>

           </form>
                      

                        

                       
                       
      </div>
   </div>
</div>


<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
   <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">FashionMart</a><br>
   
   
   </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>