<?php
/**
 * Created by Digital-Solution web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */
$this->title = 'Вход';
?>
<section>
    <article>
        <div class="container">
            <h1>Авторизация</h1>
            <hr>
            <? $form = \framework\helpers\ActiveForm::begin(); ?>
            <div class="row text-center">
                <div class="input-group col-md-5">
                    <span class="input-group-addon" id="basic-addon1">&ensp;Логин</span>
                    <?=$form->input($model, 'username', [
                        'label' => '',
                        'options' => [
                            'class' => 'form-control',
                            'placeholder' => 'Введите логин',
                            'aria-describedby' => 'basic-addon1'
                        ]])?>
                </div>
                <br>
                <div class="input-group col-md-5">
                    <span class="input-group-addon" id="basic-addon1">Пароль</span>
                    <?=$form->input($model, 'password', [
                        'label' => '',
                        'options' => [
                            'class' => 'form-control',
                            'placeholder' => 'Введите пароль',
                            'aria-describedby' => 'basic-addon1'
                        ]])?>
                </div>
                <br>
                <div class="input-group col-md-5 text-left">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Войти</button>
                </div>
                <? \framework\helpers\ActiveForm::end()?>
        </div>
        </div>
    </article>
</section>