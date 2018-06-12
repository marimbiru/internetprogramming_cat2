<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>New Student</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>New Student Details</h2><a href="/" class="btn btn-primary">Home</a></div>

                <div class="panel-body">
                    <form action="/newstudent" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-8 form-group">
                            
                            <label for="student_number">Student Number</label><br>
                            <input type="text" name="student_number" placeholder="Enter student number" value=" {{old('student_number')}} " >
                            @foreach ($errors->get('student_number') as $message)
                                <span class="help-block">
                                    {{$message}}
                                </span>
                            @endforeach
                                <br><br>
                            <label for="student_name">Student name</label><br>
                            <input type="text" name="student_name" placeholder="Enter student name" value="{{old('student_name')}}">
                            @if ($errors->has('student_name'))
                                <span class="help-block">
                                    {{$errors->first('student_name')}}
                                </span>
                            @endif
                                <br><br>
                            <label for="address">Student Adress</label><br>
                            <input type="text" name="address" placeholder="Enter student address" value="{{old('address')}}">
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    {{$errors->first('address')}}
                                </span>
                            @endif
                            <br><br>

                            <button class="btn btn-primary" type="submit" name="button_send">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
</body>
</html>