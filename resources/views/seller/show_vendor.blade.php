<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .center{
            margin:auto;
            width:80%;
            border:2px solid white;
            text-align:center;
            margin-top:40px;
        }
        .font_size{
            text-align:center;
            font-size:40px;
            padding-top:20px;
        }
      
        .th_color{
            background:skyblue;
            color:black;
        }
        .th_deg{
            padding:30px;
        }
        .td{
          padding:20px;
          padding-top:20px;
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


          <h2 class="font_size">Vendors and Users Management</h2>
          
          <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">Name</th>
                        <th class="th_deg">Password</th>
                        <th class="th_deg">Address</th>
                        <th class="th_deg">Mobile</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Activate</th>
                    </tr>
                    @foreach($vendor as $vendor)
                    <tr>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->password}}</td>
                        <td>{{$vendor->address}}</td>
                        <td>{{$vendor->mobile}}</td>
                        <td>{{$vendor->email}}</td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this Data?')" href="{{url('delete_vendor',$vendor->id)}}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_vendor',$vendor->id)}}">Edit</a>
                        </td>

                      
                     </tr>
                    @endforeach

          </table>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>