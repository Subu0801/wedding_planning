<!doctype html>

<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">

            MY Calender    

        </div>

        <div class="panel-body" >

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>

    </div>
    
@if($user->id==auth()->id())
    <form action='/createEvent' method="POST">
        {{ csrf_field() }}
            <label for="email"><b>Title</b></label>
            <input type="text" placeholder="Enter Title" name="title" required>
        
            <label for="sdate"><b>Start Date</b></label>
            <input type="date" placeholder="Enter Start Date" name="sdate" required>

            <label for="edate"><b>End Date</b></label>
            <input type="date" placeholder="Enter End Date" name="edate" required>
        
            <button type="submit" class="btn">Add to Date</button>
    </form>
@endif

</div>

</body>

</html>