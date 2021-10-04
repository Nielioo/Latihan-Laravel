<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $title ?> </title>
    {{-- <link rel="stylesheet" href="mydesign/mystyle.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @include('nav.navigation')

    <div class="container pt-5">
        <h1>Hello {{ $name }} </h1><br>
        <p>email: <?= $email ?></p><br>
        <p>line: <?= $line ?></p><br>


        <br>
        <a href="/">back</a>
    </div>
</body>

</html>
