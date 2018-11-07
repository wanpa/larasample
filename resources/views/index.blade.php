<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Description -->
        <meta name="description" content="description">
        <link rel='stylesheet' type='text/css' href="{{ mix('css/app.css') }}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel =  <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
        <title>Larasample</title>
    </head>
    <body>
        <div id="root"></div>
    </body>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</html>


