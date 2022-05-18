<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session All Data</title>
</head>
<body>

    @foreach(Session::get('product') as $product)
    <td>{{$product['name']}}</td>
    <td>{{$product['email']}}</td>
    @endforeach
    
    
</body>
</html>
