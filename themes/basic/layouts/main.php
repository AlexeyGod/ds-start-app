<?php
/**
 * Created by Digital-Solution web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

use framework\core\Application;
use framework\widgets\FlashWidget;
use themes\basic\BasicBundle;
use framework\assets\icons\IconsBundle;
use modules\content\models\Menu;

$basicBundle = BasicBundle::register();
$resourceIconBundlePath = IconsBundle::register();

header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <?=$this->head()?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrap">
    <header>
        <nav class="top-mnu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <div class="im-a-txt">
                            <img src="<?=$basicBundle?>/img/cms-logo.png" alt="DS-CMS">
                            <a href="/">DS-CMS</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li><a href="https://github.com/AlexeyGod/ds-start-app">GitHub</a></li>
                            <li><a href="https://AlexeyGod.github.com//ds-cms">DS-CMS HOMEPAGE</a></li>
                            <li><a href="https://AlexeyGod.github.com//ds-cms/docs">Documentation</a></li>
                            <?php
                            if(Application::app()->identy->can('admin'))
                            {
                                echo '<li><b><a href="/manager">Manage</a></b></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-2 text-right">
                        <div class="im-a-txt">
                            <?php
                                if(!Application::app()->identy->isAuth())
                                    echo '<img src="'.$basicBundle.'/img/auth.png" alt="Auth">'
                                    .'<a href="/login">Войти</a>';
                            else
                                echo '<img src="'.\application\models\User::DEFAULT_IMAGE.'" alt="My photo">'
                                    .'<a href="/logout">'.Application::app()->identy->username.'</a>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>


        </nav>
    </header>
    <?=FlashWidget::asBlocks()?>
    <?=$content?>

</div>
<footer>
    (c) AlexGod
</footer>
<?=$this->footer()?>

</body>
</html>
