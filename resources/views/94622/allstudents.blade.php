<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Student List</h2><a href="/" class="btn btn-primary">Home</a></div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Student Number</th>
                                <th>Student Name</th>
                                <th>Address</th>
                                <th>Registered on</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->student_number}}</td>
                                    <td>{{$student->student_name}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->created_at}}</td>
                                    <td><a href="/student/{{$student->id}}" class="btn btn-success">View</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>