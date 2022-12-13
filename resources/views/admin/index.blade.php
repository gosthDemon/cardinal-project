<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/cardinal.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.css') }}">
</head>
<body>
    <div class="content-menu" id="content_menu">
        <div class="nav-bar">

        </div>
    </div>
    <div class="content-body">
        <div class="top-bar">
            <div>
                <i class="fad fa-bars" id="open_menu"></i>
            </div>
            <div>
                <input type="text" class="search" id="search" placeholder="Search...">
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/cardinal.js') }}"></script>
</body>

</html>
