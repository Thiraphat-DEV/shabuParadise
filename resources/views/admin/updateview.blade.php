
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public"> 
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .title
        {
            color: white; 
            padding-top: 25px; 
            font-size: 25px; 
        }

        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

  </head>

 


  <body>
    
      <!-- partial -->
      
      @include('admin.sidebar')

      @include('admin.navbar')


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add product</h1>

                @if(session()->has('message'))
        <div class="alert alert-success" >

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

                 <div style="padding:15px;">
                    <label>Product title</label>

                    <input style="color:black" type="text" name="title" 
                    value="{{$data->title}}" required="">
                 </div>

                 <div style="padding:15px;">
                    <label>Price</label>

                    <input style="color:black" type="number" name="price" 
                    value="{{$data->price}}"required="">
                 </div>

                 <div style="padding:15px;">
                    <label>Description</label>

                    <input style="color:black" type="text" name="des" 
                    value="{{$data->description}}"required="">
                 </div>

                 <div style="padding:15px;">
                    <label>Quantity</label>

                    <input style="color:black" type="text" name="quantity" 
                    value="{{$data->quantity}}"required="">
                 </div>

                 <div style="padding:15px;">
                    <label>Old image</label>

                   <img height="100" width="100" src="/productimage/{{$data->image}}">
                 </div>

                 <div style="padding:15px;">
                    <label>Chang the image</label>
                    <input type="file" name="file" >
                 </div>

                 <div style="padding:15px;">
                    <input class="btn btn-success" type="submit" >
                 </div>
                </form>

        </div>
      <!-- partial -->
    </div>
          <!-- partial -->
        
        <!-- main-panel ends -->
      
      <!-- page-body-wrapper ends -->
    
      @inclue('admin.script')

  </body>
</html>