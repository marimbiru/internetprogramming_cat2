<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>All Fees</title>
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
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student Address</th>
                            <th>Amount paid</th>
                        </tr>
                        @foreach ($all_fees as $fee)
                            <tr>
                                <td>{{$fee->student->student_number}}</td>
                                <td>{{$fee->student->student_name}}</td>
                                <td>{{$fee->student->address}}</td>
                                <td>{{$fee->amount}}</td>
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