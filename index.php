<?php
session_start();
function uriParse() {

    $uri = trim($_SERVER['REQUEST_URI'], '/');
    $uri_segments = array_filter(explode('/', $uri));
    return [
        'segments' => $uri_segments,
        'segment_count' => count($uri_segments)
    ];
}

function getView($view) {
    echo '<html>';
        echo '<head>';
            include './template/head.php';
        echo '</head>';
    
        echo '<body>';
            $view_file = './views/' . $view . '.php';
            if(file_exists($view_file)){
                include $view_file;
            }else{
                echo "view not found" . htmlspecialchars($view);
            }
        echo '</body>';
    echo '</html>';
}

function router() {
    $parsed_uri = uriParse();

    if ($parsed_uri['segment_count'] === 0 || $parsed_uri['segments'][0] === 'projekt') {
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']){
            getView('homePage?id='. $_SESSION['id_user']);
        }else{
            getView('login');
        }
        
    } else {
        $view = $parsed_uri['segments'][1] ?? $parsed_uri['segments'][0];
        getView($view);
        
    }
}
router();
?>