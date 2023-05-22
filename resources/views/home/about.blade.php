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

.guide .row{
    display: flex;
    height: 1%;
    align-items: center;
    padding-left: 50px;
    background-color: rgb(224, 246, 247);
    margin-bottom: 50px; 
}
.guide .col{
    flex-basis:0%;
    flex-direction:left;
}
.guide h2{
    color: black;
    font-size: 30px;
    padding-left: 30px;
    padding-bottom: 50px;
    margin-top: 40px;
}
.guide p{
    color: black;
    font-size: 25px;
    line-height: 25px;
    padding-left: 30px;
    padding-bottom: 20px;
}

.heading {
  font-size: 2.5rem;
  color: #130f40;
  padding-bottom: 2rem;
  text-align: center;
}

.heading span {
  color: #eb4d4b;
}
</style>
      </head>
   <body>
      
        @include('home.header')

        <section class="guide" id="guide">
       <h1 class="heading"> <span>About</span> us </h1>

<div class="row">
    <div class="col">
        <div class="e-image">
            <img src="images/blog-1.jpg" alt="">
        </div>
    </div>
    <div class="col">
        <h2>Fashion Mart</h2>
        <p>A Multivendor Ecommerce Website Is A Platform Where Multiple Sellers Can Sell Their Products Or Services. 
         It Means This Is A Huge Online Marketplace Where Different Vendors Can Sell Their Products Instead Of Having ECommerce Sites Of Their Own. 
         This Type Of Marketplace Is Also Sometimes Called A "Marketplace Model" Or "Online Marketplace". 
         Some Of The Most Popular Examples Of Multivendor Ecommerce Marketplaces Are Daraz, Sastodeal, Amazon, EBay,Etc.</p>
</div>
</div>
</section>

         <div class="cpy_">
   <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">FashionMart</a><br>

   
</body>
</html>