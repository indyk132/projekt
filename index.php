<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $request = $_SERVER['REQUEST_URI'];
        
        $request = strtok($request, '?');
        
        function route($path, $callback) {
            global $request;
            if ($path === $request) {
                $callback();
                exit();
            }
        }
        
        route('/projekt/homePage', function() {
            include './homePage.php';
        });
        
        route('/projekt/movies', function() {
            include './movies.php';
        });
        
        route('/projekt/unlogged', function() {
            include './unlogged.php';
        });
        
        http_response_code(404);
        echo '404 - Strona nie znaleziona';
        
        ?>
    
</body>
</html>