<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <title>Sample</title>
        <link rel="stylesheet" href="css/app.css">

        <!-- 特に通信はしていないけど、csrf対策でトークンを付ける -->
        <script>
            window.Laravel = {};
            window.Laravel.csrfToken = "{{ csrf_token() }}";
        </script>
    </head>
    <body oncontextmenu="return false;">
        <div id="app">
            <!-- ここにvue.jsのコンポーネントが表示されたり -->
            <sample></sample>
        </div>
    </body>
    <!--ビルドしたjsの読み込み-->
    <script src="js/app.js"></script>
</html>