<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

namespace application\controllers;

use application\models\User;
use framework\components\Controller;
use framework\core\Application;


use framework\exceptions\NotFoundHttpException;


class DefaultController extends Controller
{
    public function actionIndex()
    {
        $data = [];
        return $this->render('index', [
        'data' => $data
       ]);
    }

    public function actionLogin()
    {
        if(Application::app()->identy->isAuth())
        {
            return $this->redirect('/');
        }

        $model = new User();
        if($model->load(Application::$app->request->post()))
        {
            if(User::auth($model->username, $model->password))
                return $this->redirect('/');
            else
                Application::app()->request->setFlash('error', 'Не верный логин или пароль');
        }
        else
        {
            Application::app()->request->setFlash('error', 'Данные не загружены');
        }

        return $this->render('login', [
            'model' => $model
        ]);
    }

    public function actionCaptcha()
    {
        $captcha = Application::createObject('framework\helpers\captcha\Captcha');
        return $captcha->captcha();
    }

    public function actionAgreement()
    {
        return $this->redirect('/agreements/agreement.rtf');
    }

    public function actionError()
    {
        return $this->render('error');
    }

}