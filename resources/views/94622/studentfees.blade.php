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
            <div class="col-md-8col-md-offset-2">
                <div class="panelpanel-defailt">
                    <div class="panel-heading">
                        <h2> {{$student->student_name}} Details<a href="/" class="btn btn-primary">Home</a></h2>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <th>Amount</th>
                                <th>Date Paid</th>
                            </tr>
                            @foreach ($student->fees as $fee)
                                <tr>
                                    <td>$fee->amount</td>
                                    <td>$fee->created_at</td>
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