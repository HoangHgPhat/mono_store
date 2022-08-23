<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Custommer</title>
  </head>
  <body>
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add new Customer</h2>
                    <!-- @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif -->
                    <form action="{{route('register-process')}}" method="POST">
				  @if (Session::has('success'))
                            <div class="alet alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alet alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required name="username">
		      		</div>
					<div class="form-group">
						<input id="password-field" type="password" class="form-control" placeholder="Password" required name="password">
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name" required name="fullname">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="email" required name="email">
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3">add</button>
					</div>
				
	            
	          </form>
                </div>
            </div>
        </div>
  </body>