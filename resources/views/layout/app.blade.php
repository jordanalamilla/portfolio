<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Jordan Alamilla</title>
        
        <!--STYLESHEET-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
        <!--CKEDITOR-->
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

        <!--[if lt IE 9]>
	        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
        
    </head>
    
    <body>

        @include( 'inc/nav' )

        @yield('content')

        @include( 'inc/footer' )

    </body>

</html>