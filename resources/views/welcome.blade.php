<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #2b2b2b;
                color: #FF5A20;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                font-size: 20px;
                height: 100vh;
                margin: 0;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .m-t-md{
                margin-top: 80px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .table{
                color:#FF5A20;
            }
            .btn-primary {
                color: #000000;
                background-color: #FF5A20;
                border-color: #FF5A20;
            }
            #imagen{
                width: 50px !important;
            }
</style>
    </head>
    <body>
        <div class="content">
            <div id="example" class="m-b-md">
    
            </div>
        </div>
    </body>


    <script type="text/javascript" src="js/app.js"></script>
    
</html>
