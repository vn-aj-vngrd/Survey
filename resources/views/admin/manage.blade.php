<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Survey</title>

    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div id="app">
        <header-component htype="company"></header-component>
        <div class="container text-center">
            <create-component myClass="btn btn-success me-2"></create-component>
            <display-component myClass="btn btn-primary"></display-component>
        </div>
        <footer-component></footer-component>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
</body>

</html>