<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User-list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <style>
        .table{
            border: 3px solid #d1bfbf;
            border-collapse: collapse;
            text-align: center;
            margin-top: 18px;
        }
        .table td{
            border: 3px solid #d1bfbf;
        }
        .table th{
            border: 3px solid #d1bfbf;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:30px" >
        <div class="row">
            <div class="col-md-12">
                <div style="margin-left:42%;">
                    <a href="{{url('add-user')}}" class="btn btn-primary">Add User</a>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div> 
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>EmaiId</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($data as $stu)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$stu->userName}}</td>
                                <td>{{$stu->EmailId}}</td>
                                <td><a href="{{url('user-project/'.$stu->id)}}" class="btn btn-primary">View Project</a> |
                                    <a href="{{url('edit-user/'.$stu->id)}}" class="btn btn-success">Edit user</a> | 
                                    <a href="{{url('delete-user/'.$stu->id)}}" class="btn btn-secondary">Delete User</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>