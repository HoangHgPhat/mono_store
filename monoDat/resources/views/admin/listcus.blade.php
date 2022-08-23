<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Customer List</title>
  </head>
  <body>
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Customer List</h2>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <!-- <div style="margin-right: 10%; float: right;">
                        <a href="{{url('addCus')}}" class="btn btn-outline-success">Add New</a>
                    </div> -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Password</th>
                                <th>Full name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{$row->CustomerID}}</td>
                                <td>{{$row->CustomerPass}}</td>
                                <td>{{$row->CustomerFullname}}</td>
                            
                                <!-- <td>{{$row->productImage1}}</td> -->
                                <td>{{$row->CustomerEmail}}</td>
                                <td>
                                
                                    <a href="{{url('deleteCus/'.$row->customerID)}}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?');">Delete</a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </body>
</html>