
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
      <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

      <style type="text/css">

        .center{
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;

        }

        table,th,td{
            border: 1px solid grey;
        }

        .th_deg{
            font-size: 25px;
            padding: 5px;
            background: skyblue;
        }
        .img_deg{
            height: 200px;
            width: 200px;
        }
        .total_deg{
            font-size: 20px;
            padding: 40px;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

         @if(session()->has('message'))
           <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
           </div>
           @endif
      
      
      <div class="center">

        <table>
            
            <tr>

                <th class="th_deg">Product title</th>
                <th class="th_deg">Product quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>

            </tr>

            <?php $totalprice=0;  ?>

            @foreach($cart as $cart)

            <tr>

                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>${{$cart->price}}</td>
                <td><img class="img_deg"src="/product/{{$cart->image}}"></td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product ?')" href="{{url('/remove_cart',$cart->id)}}">Remove Product</a>
                </td>

            </tr>

            <?php $totalprice=$totalprice + $cart->price  ?>

            @endforeach


        </table>

        <div>

           <h1 class="total_deg">Total Price : ${{$totalprice}}</h1>

        </div>

        <div>

        <h1 style="font-size: 25px; padding-bottom: 15px">Proceed to Order</h1>

        <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>

        <a href="{{URL('stripe',$totalprice)}}" class="btn btn-danger" >Pay Using Card</a>

        
        <button id="payment-button" class="btn btn-danger">Pay with Khalti</button>

        </div>

      </div>


      <!-- footer start -->
     
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript">
        
        var config = {
            // replace the publicKey with yours
            
            "publicKey": "{{ config('app.khalti_public_key')}}",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    $.ajax({
                        type : 'POST',
                        url : "{{ route('khalti.verifyPayment') }}",
                        date : {
                            token : payload.token,
                            amount : payload.amount,
                            "_token" : "{{csrf_token() }}"
                        },
                        success : function(res){
                            console.log(res);
                        }
                    });
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>

   </body>
</html>