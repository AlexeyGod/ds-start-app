<?php
/**
 * Created by Digital-Solution.Ru web-studio.
 * https://digital-solution.ru
 * support@digital-solution.ru
 */

namespace application\controllers;

use framework\components\Controller;
use framework\core\Application;
use modules\content\models\Page;

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