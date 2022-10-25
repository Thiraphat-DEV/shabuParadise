
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
      
      @include('admin.sidebar')

      @include('admin.navbar')


        <!-- partial -->
       {{-- @include('admin.body') --}} 
       <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
            <table>
                <tr style="background-color: pink;">
                    <td style="padding:20px;">Customer name</td>
                    <td style="padding:20px;">Phone</td>
                    <td style="padding:20px;">Address</td>
                    <td style="padding:20px;">Product title</td>
                    <td style="padding:20px;">Price</td>
                    <td style="padding:20px;">Quantity</td>
                    <td style="padding:20px;">Status</td>
                    <td style="padding:20px;">Action</td>

                </tr>

                @foreach($order as $orders)

                <tr style="background-color: #000;">
                    <td style="padding:20px;">{{$orders->name}}</td>
                    <td style="padding:20px;">{{$orders->phone}}</td>
                    <td style="padding:20px;">{{$orders->address}}</td>
                    <td style="padding:20px;">{{$orders->product_name}}</td>
                    <td style="padding:20px;">{{$orders->price}}</td>
                    <td style="padding:20px;">{{$orders->quantity}}</td>
                    <td style="padding:20px;">{{$orders->status}}</td>
                    <td style="padding:20px;">
                        <a class="btn btn-success" href="
                        {{url('updatestatus',$orders->id)}}">
                        ยืนยัน
                        </a>
                    </td>
                
                </tr>
                @endforeach
            </table>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    
      @inclue('admin.script')

  </body>
</html>