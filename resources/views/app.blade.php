<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- This is one place that houses the CSRF token. This prevents cross site request forgeries. It’s also available in the window.Laravel object. We will be adding this to the Axios header on each request so it will prevent bad requests. We will also be using the auth:api middleware on API routes and the CreateFreshApiToken::class on the web routes (explained in the next section). This will provide the security for consuming our own API with our SPA. -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- These two files contain the compiled SASS from Laravel Mix. -->
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>

        <link rel="icon" type="image/x-icon" href="/favicon.ico">

        <title>Roast</title>

        <script type='text/javascript'>
             window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>

        <!-- This element contains the router view which will be populated with VueRouter when we begin to develop the SPA side of our application. -->
        <div id="app">
            <router-view></router-view>
        </div>

        <!-- These two files contain the Javascript from Laravel Mix. -->
        <script type="text/javascript" src="js/app.js"></script>

    </body>
</html>
