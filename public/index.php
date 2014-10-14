<?php

define('ROOT_DIR', dirname(__FILE__));

/**
 * Description :
 *
 * @param {string} $url : Url to load.
 *
 * @return null
 */
function redirect ($url)
{
    if (!headers_sent()) {
        header('Location: ' . $url); exit;
    } else {
        echo '<script type="text/javascript">'
            . 'window.location.href="' . $url . '";'
            . '</script>'
            . '<noscript>'
            . '<meta http-equiv="refresh" content="0;url=' . $url . '" />'
            .'</noscript>';
        exit;
    }
}

//redirect('/construction.html');

// Modules - Views - App
// ---------------------
$_routes = array(
    'welcome' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'welcome',
            ),
        ),
        'path' => '/vues/welcome.php',
        'menu' => ''
    ),

    'galerie' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'sommaire'
            ),
        ),
        'path' => '/vues/sommaire.php',
        'menu' => '',
    ),

    'casier' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'casier'
            ),
        ),
        'path' => '/vues/casier.php',
        'menu' => 'casier',
    ),

    'about' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'about'
            ),
        ),
        'path' => '/vues/about.php',
        'menu' => 'about',
        ),

    'external_link' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'external_link'
            ),
        ),
        'path' => '/vues/external_link.php',
        'menu' => 'external_link',
        ),

    'contact' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'contact'
            ),
        ),
        'path' => '/vues/contact.php',
        'menu' => 'contact',
        ),

    'archives' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                'archives'
            ),
        ),
        'path' => '/vues/archives.php',
        'menu' => 'archives',
        ),












    'camille_guillaud' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'lola_jacrot' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'camille_ragnaud' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'woorim_moon' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'melusine_caillaud' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'jeanne_dubois' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'mailis_breton' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'floriane_grosset' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    'mathilde_bennett' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),







    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),

    '' => array(
        'isView' => true,
        'title' => '',
        'assets' => array(
            'css' => array(
                ''
            ),
        ),
        'path' => '/vues/.php',
        'menu' => '',
        ),


);

$_r = !empty($_GET['r']) ? $_GET['r'] : 'welcome';


$assetsRouteCss = '';

if (!empty($_routes[$_r]['assets']) && !empty($_routes[$_r]['assets']['css'])) {
    foreach ($_routes[$_r]['assets']['css'] as $key => $pathAsset) {
        $assetsRouteCss .= '<link rel="stylesheet" href="/css/' . $pathAsset . '.css" type="text/css" media="screen"/>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php
                if (!empty($_routes[$_r]['link'])) {
                    include_once ROOT_DIR . '/vues/link.php' ;
                }
                ?>

        <title><?php echo $_routes[$_r]['title'] ?></title>
        <link rel="stylesheet" href="/css/global.css" type="text/css" media="screen"/>
        <?php echo $assetsRouteCss; ?>
    </head>

    <body>
        <div class="global">
            <?php
                    if (!empty($_routes[$_r]['menu'])) {
                        include_once ROOT_DIR . '/vues/menu.php';
                    }
                    ?>

            <?php
                if (!empty($_routes[$_r]['path'])) {
                    include_once ROOT_DIR . $_routes[$_r]['path'];
                 }
            ?>

        </div>
    </body>
<html>
