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
      .contact .icons-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(1rem, 0.5fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(1rem, 0.5fr));
  gap: 1rem;
  margin: 50px;
  margin-top: 10px;
}

.contact .icons-container .icons {
  padding: 0.5rem;
  border-radius: .5rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  text-align: center;
}

.contact .icons-container .icons i {
  font-size: 1.5rem;
  height: 3rem;
  width: 3rem;
  line-height: 3rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.3);
  border-radius: 50%;
}

.contact .icons-container .icons h3 {
  font-size: 1.5rem;
  padding: 0.5rem 0;
  color: #130f40;
}

.contact .icons-container .icons p {
  font-size: 1rem;
  line-height: 2;
  color: #666;
}

.contact .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 1rem;
  margin: 50px;
}

.contact .row form {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 20rem;
          flex: 1 1 20rem;
  padding: 2rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  border-radius: .5rem;
  display: grid;
}

.contact .row form h3 {
  font-size: 2rem;
  padding-bottom: 0.5rem;
  color: #130f40;
}

.contact .row form .inputBox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
          
}

.contact .row form .inputBox input {
  width: 10%;
  height: 30%;
}

.contact .row form .inputBox input,
.contact .row form textarea {
  border: 0.1rem solid rgba(0, 0, 0, 0.3);
  border-radius: .5rem;
  padding: 1rem 1.2rem;
  font-size: 1rem;
  color: #130f40;
  text-transform: none;
  margin: .7rem 0;
  margin-bottom: -30px;
}

.contact .row form textarea {
  height: 1rem;;
  resize: none;
  width: 100%;
}

.contact .row .map {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  width: 100%;
  padding: 2rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.3);
  border-radius: .5rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

.contact .row form .inputBox input {
    width: 48%;
    height: 10%;
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

        
    <section class="contact" id="contact">

<h1 class="heading"> <span>Contact</span> us </h1>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Address</h3>
        <p>Kaski, Pokhara</p>
    </div>

    <div class="icons">
        <i class="fas fa-envelope"></i>
        <h3>Email</h3>
        <p>asmita123@gmail.com</p>
        <p>arati456@gmail.com</p>
    </div>

    <div class="icons">
        <i class="fas fa-phone"></i>
        <h3>Phone</h3>
        <p>9811111111</p>
        <p>9822222222</p>
    </div>

</div>

<div class="row">

    <form action="">
        <h3>Get in touch</h3>
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="your number">
            <input type="text" placeholder="your subject">
        </div>
        <textarea placeholder="your message" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.38821620736!2d83.9566183!3d28.2297224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1676975245712!5m2!1sen!2snp"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

</section>
<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
   <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">FashionMart</a><br>
   
   
   </p>
   <script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>