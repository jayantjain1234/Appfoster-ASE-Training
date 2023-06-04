<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add-new-user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <style>
        /* .container{
            padding: 20px 20px;
            width: 100%;
            height: 100%;
            background-color: #d7dae1;
            border-radius: 35px;
        }
        .md-3 .form-control{
            background: none;
            border-bottom: 3px solid white;
        } */
    </style>
</head>
<body>
    <div class="container" style="margin-top:30px" >
        <div class="row">
            <div class="col-md-12">
                <h2>Add-new-User</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div> 
                @endif
                <form method="POST" action="{{url('save-user')}}">
                    @csrf
                    <div class="md-3">
                        <label>Name:</label>
                        <input type="text" name="userName" class="form-control" placeholder="Enter your Name">
                        <label>EmailId:</label>
                        <input type="text" name="EmailId" class="form-control" placeholder="Enter your EmailId">
                        @error('userName')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <a href="{{url('users')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>