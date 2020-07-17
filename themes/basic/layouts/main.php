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
use application\modules\content\models\Menu;

$basicBundle = BasicBundle::register();
$resourceIconBundlePath = IconsBundle::register();

header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <?=$this->head()?>
</head>
<body>
<div class="wrapper">
    <header>
         <div class="flex-container">
             <div class="logotype"><a href="/"><img src="<?=$basicBundle?>/img/cms-logo.png" alt="Logotype"></a></div>
             <?//=Menu::widget()?>
             <?=(Application::app()->identy->can('manager') ?
                 '<div class="menu-element"><a href="/manager"><B>Управление</B></a></div>' : '')?>
             <div class="user-bar">
                 <img class="userPhoto" src="<?=Application::app()->identy->photo?>" alt="user"> <?php
                echo (Application::app()->identy->isAuth() ? '<a href="/user/profile">'.Application::app()->identy->name.'</a> [<a href="/user/logout">Выход</a>]' : '<a href="/user/login">Войти</a>');
             ?></div>
         </div>
    </header>
        <?=FlashWidget::asBlocks()?>
        <?=$content?>
    <div class="endOfContents"></div>
<footer>
    <div class="tc">
    &#169 Проект <b>DS-CMS</b> разработан WEB-студией &laquo;Цифровое решение&raquo; <a href="https://digital-solution.ru">Digital-solution.ru</a>
    </div>
</footer>
</div>
<?=$this->footer()?>

</body>
</html>
