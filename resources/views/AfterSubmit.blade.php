<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Test</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <h1 @if(!empty($msg) && $msg=="Time Out") class="text-danger" @elseif(!empty($msg)) class="text-success" @else class="text-danger" @endif >{{$msg ?? $err}}</h1>
    </div>
    @if(!empty($msg))
    <div class="d-flex justify-content-center">
        <h5 class="">If any query contact to company!</h5>
    </div>
    @endif
</body>
</html>