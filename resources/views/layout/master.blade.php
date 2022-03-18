<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        body{
            margin: 10px;
            padding: 10px;
        }
    </style>
    
        <title>Document</title>
</head>
<body>

    <div id="button">
        <div class="container">
            <section class="button">
                @yield('button')
            </section>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <th>No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
        </thead>

        <div id="content">
            <div class="container">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </div>

    </table>
</body>
</html>