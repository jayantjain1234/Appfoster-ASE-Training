<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View-User-project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <style>
        .table{
            border: 3px solid #d1bfbf;
            border-collapse: collapse;
            text-align: center;
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
    {{-- {{ $data }} --}}

    <div class="container" style="margin-top:30px" >
        <div class="row">
            <div class="col-md-12">
                <h2>List of projects</h2>
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div> 
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>S No.</th>
                            {{-- <th>user No.</th> --}}
                            <th>Project title</th>
                            <th>Project Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($commonData as $stu)
                            <tr>
                                <td>{{$i++}}</td>
                                {{-- <td>{{$stu->user_id}}</td> --}}
                                <td>{{$stu->title}}</td>
                                <td>{{$stu->Description}}</td>
                                <td><a href="{{url('delete-user-project/'.$stu->id)}}" class="btn btn-secondary">Delete Project</a>
                                | <a href="{{url('update-user-project/'.$stu->id)}}" class="btn btn-primary">Update Project</a></td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{url('users')}}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>