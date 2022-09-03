<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <p>Holaaaaaaaaaaaaaaaaaaaa</p>
    @foreach($customer as $item)
    {{$item->Name}}
    {{$item->Sort_Code}}
    @endforeach
    
</body>
</html>