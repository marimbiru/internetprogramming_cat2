<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>New Fees</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>New Student Details</h2><a href="/" class="btn btn-primary">Home</a></div>

                <div class="panel-body">
                    <form action="/newfees" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            
                            <label for="student_number">Student Number</label>
                            <input type="text" name="student_number" placeholder="Enter student id" value=" {{old('student_number')}} ">
                            @foreach ($errors->get('student_number') as $message)
                                <span class="help-block">
                                    {{$message}}
                                </span>
                            @endforeach

                            <label for="amount">Fee amount paid</label>
                            <input type="number" name="amount" placeholder="Enter amount paid" value=" {{old('amount')}} ">
                            @if ($errors->has('amount'))
                                <span class="help-block">
                                    {{$errors->first('amount')}}
                                </span>
                            @endif

                            <button type="submit" name="button_send">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>