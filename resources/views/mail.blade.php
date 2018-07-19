<html>
<head>
</head>
<body>
  Hey <b>{{$name}}</b><br>, Thanks for Joing Us. <br>
Please click <a href="{!! url('/verify', ['code'=>$email_token]) !!}"> {{$email_token}}</a> here to confirm email
</body>
</html>
