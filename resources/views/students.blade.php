<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>

<body>

    @foreach ($data as $item)
        <li>Name : {{ $item->name }}</li>
        <li>NIS : {{ $item->nis }}</li>
        <li>Address : {{ $item->address }}</li> <br>
    @endforeach

</body>

</html>
