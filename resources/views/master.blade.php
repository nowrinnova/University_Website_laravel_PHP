<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUET|Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</head>

<body>
    {{ View::make('header') }}
    @yield('contant')
    {{ View::make('footer') }}
</body>
<style>
    .row {
        padding: 10px;
    }

    .custom-login {
        height: 50px;
        /* weight: 1000px; */
        /* padding-top: 10px;
        padding-bottom: 10px; */
        padding: 20px;
    }

    .contant {
        height: 100vh;
        overflow-y: scroll;
    }


    /* .custom-button {
        padding-top: 50px;
        padding-block: 50px;
        padding-inline-start: 20px;
    } */
</style>


{{-- <script>
    $(document).ready(function() {
        $("button").click(function() {
            alert("all set")
        })
    })
</script> --}}

</html>
