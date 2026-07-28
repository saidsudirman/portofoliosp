<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SP-YUNI-232136</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fa;
        }

        .hero{
            background:linear-gradient(135deg,#0d6efd,#6610f2);
            color:white;
            padding:100px 0;
        }

        .hero img{
            width:170px;
            border-radius:50%;
            border:5px solid white;
        }

        .card-profile{
            transition:.3s;
        }

        .card-profile:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 25px rgba(0,0,0,.15);
        }

    </style>

</head>

<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>