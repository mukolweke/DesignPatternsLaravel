<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

    </style>
</head>
<body>

<div class="">

    <h4>Payment Option: </h4><br>
    <form action="{{route('post_pay')}}" method="post">
        {{csrf_field()}}
        <input name="amount" type="number"/>
        <input type="submit" value="SUBMIT">
    </form>&nbsp;&nbsp;
    <p><strong>{{$payment}}</strong></p>

</div>
</body>
</html>
