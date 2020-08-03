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
                            <li><a href="#">Static element 1</a></li>
                            <li><a href="#">Static element 2</a></li>
                            <li><a href="#">Static element 3</a></li>
                            <li><a href="#">Static element 4</a></li>
                            <li><a href="#">Static element 5</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 text-right">
                        <div class="im-a-txt">
                            <img src="<?=$basicBundle?>/img/auth.png" alt="Auth">
                            <a href="/user/login">Войти</a>
                        </div>
                    </div>
                </div>
            </div>


        </nav>
    </header>
    <section>
        <?=FlashWidget::asBlocks()?>
        <article>
            <div class="container">
                <?=$content?>
            </div>
        </article>
    </section>
</div>
<footer>
    (c) AlexGod
</footer>
<?=$this->footer()?>

</body>
</html>
