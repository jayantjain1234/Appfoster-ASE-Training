<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add-new-project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:30px" >
        <div class="row">
            <div class="col-md-12">
                <h2>Update user Project:</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div> 
                @endif
                <form method="POST" action="{{url('project-details')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label>Update Project title:</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter project title" value="{{$data->title}}">
                        {{-- @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror --}}
                        <label>Update Project Description:</label>
                        <input type="text" name="Description" class="form-control" placeholder="Enter project Description" value="{{$data->Description}}">
                        {{-- @error('Description')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror --}}
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('users')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>