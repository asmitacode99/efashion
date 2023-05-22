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
     


      
      <style type>
     
#blog{
  display: flex;
  justify-content: left;
  align-items: center;
  flex-direction: column;
  padding: 40px;
  border-bottom: 1px solid rgba(0,0,0,0.7);
  color: blue;
  font-size: 25px;
}
.blog-heading{
  display: flex;
  justify-content: left;
  align-items: flex-start;
  flex-direction: column;
}

.blog-container{
  display: flex;
  justify-content: center;
  align-items: left;
  margin: 20px 0px;
  flex-wrap: wrap;

}
.blog-box{
  width: 350px;
  background-color: #fff;
  margin: 20px;
  border: 1px solid #f0e8e8;
}

.blog-box:hover{
  box-shadow: 2px 2px 10px black;
}


.blog-image{
  width: 100%;
  height: auto;
}
.blog-img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}
.blog-text{
  padding: 30px;
  display: flex;
  flex-direction: column;
}
.blog-text span{
  color: #666;
  font-size: 0.9rem;
}
.blog-text .blog-title{
font-size: 1.3rem;
font-weight: 500;
color: blue;
}

.blog-text p{
  color: #9b9b9b;
  font-size: 0.9rem;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  margin: 20px 0px;
}
.blog-text a{
  color: blue;
  font-size: small;
}
.heading {
  font-size: 2.5rem;
  color: #eb4d4b;
  padding-bottom: 2rem;
  text-align: center;
}
.heading span {
  color: #130f40;
}


</style>

      </head>
   <body>
      
        @include('home.header')
        <section class="blogs" id="blog">
    <h1 class="heading"><span> Our </span>Blogs</h1>


    <div class="blog-container">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="blog-text">
                <a href="tour/blog1.html" style="text-decoration: none" class="blog-title">Rhododendron (Laliguras) flower will bloom in the spring season-month
                    of March-April</a>
                <span>February 21, 2023</span>
                <p>21 FEB 2023 Nepal Rhododendron view trek during the month of March to May. As a mountainous
                    country, Nepal is the best place in the</p>
                <a href="tour/blog1.html" style="text-decoration: none">Read More</a>
            </div>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="blog-text">
                <a href="tour/blog2.html" style="text-decoration: none" class="blog-title">The Number of Foreign tourist arrivals in Nepal encouraging during
                    off season: NTB</a>
                <span>February 21, 2023</span>
                <p>21 FEB 2023 Nepal Rhododendron view trek during the month of March to May. As a mountainous
                    country, Nepal is the best place in the</p>
                <a href="tour/blog2.html" style="text-decoration: none">Read More</a>
            </div>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="blog-text">
                <a href="tour/blog3.html"  style="text-decoration: none"class="blog-title">Rhododendron (Laliguras) flower will bloom in the spring season-month
                    of March-April</a>
                <span>February 21, 2023</span>
                <p>21 FEB 2023 Nepal Rhododendron view trek during the month of March to May. As a mountainous
                    country, Nepal is the best place in the</p>
                <a href="tour/blog3.html" style="text-decoration: none">Read More</a>
            </div>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog-4.jpg" alt="">
            </div>
            <div class="blog-text">
                <a href="#" style="text-decoration: none" class="blog-title">Rhododendron (Laliguras) flower will bloom in the spring season-month
                    of March-April</a>
                <span>February 21, 2023</span>
                <p>21 FEB 2023 Nepal Rhododendron view trek during the month of March to May. As a mountainous
                    country, Nepal is the best place in the</p>
                <a href="#" style="text-decoration: none">Read More</a>
            </div>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog-5.jpg" alt="">
            </div>
            <div class="blog-text">
                <a href="#" style="text-decoration: none" class="blog-title">Rhododendron (Laliguras) flower will bloom in the spring season-month
                    of March-April</a>
                <span>February 21, 2023</span>
                <p>21 FEB 2023 Nepal Rhododendron view trek during the month of March to May. As a mountainous
                    country, Nepal is the best place in the</p>
                <a href="#" style="text-decoration: none">Read More</a>
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/blog-6.jpg" alt="">
            </div>
            <div class="blog-text">
                <a href="#" style="text-decoration: none" class="blog-title">Rhododendron (Laliguras) flower will bloom in the spring season-month
                    of March-April</a>
                <span>February 21, 2023</span>
                <p>21 FEB 2023 Nepal Rhododendron view trek during the month of March to May. As a mountainous
                    country, Nepal is the best place in the</p>
                <a href="#" style="text-decoration: none">Read More</a>
            </div>
        </div>

    </div>
</section>

<div class="cpy_">
   <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">FashionMart</a><br>
   

</body>
</html>