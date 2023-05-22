<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align:center;
            padding-top:40px;
        }
        .font_size{
            font-size:40px;
            padding-bottom:40px;
        }
        .text_color{
            color:black;
            padding-bottom:20px;
        }
        label{
            display:inline-block;
            width:200px;
        }

        .div_design{
            padding-bottom:15px;

        }
        </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
            </button>

            {{session()->get('message')}}
            </div>


            @endif

            <div class="div_center">
                <h1 class="font_size">Add Users/Vendors</h1>

                
          <form action="{{url('/add_vendor')}}" method="POST" enctype="multipart/form-data"> 

                @csrf
                <div class="div_design">
                    <label>Name:</label>
                    <input class="text_color" type="text" name="name" placeholder=" Name" required=""> 
                </div>

                <div class="div_design">
                    <label>Password :</label>
                    <input class="text_color" type="text" name="password" placeholder="Password"  required=""> 
                </div>


                <div class="div_design">
                    <label>Address:</label>
                    <input class="text_color" type="text" name="address" placeholder="Address" required=""> 
                </div>


                <div class="div_design">
                    <label>Mobile :</label>
                    <input class="text_color" type="number" name="mobile" placeholder="Mobile number"> 
                </div>

                <div class="div_design">
                    <label>Email:</label>
                    <input class="text_color" type="text" name="email" placeholder="Email Address" required=""> 
                </div>

                <div class="div_design">
                
                    <input type="submit" value="Add Data" class="btn btn-primary">
                </div>
                </form>
            </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>