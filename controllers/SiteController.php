<?php

namespace app\controllers;

use app\models\BlockMain;
use app\models\ContactPage;
use app\models\Feedback;
use app\models\MainBlocks;
use app\models\MetaTagManager;
use app\modules\admin\models\Service;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use app\controllers\FrontendController;
use yii\helpers\VarDumper;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class SiteController extends FrontendController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $main = BlockMain::find()->one();
        $model = MainBlocks::find()
            ->where(['checkbox' => MainBlocks::CHECKBOX_CHECKED])
            ->orderBy('index asc')
            ->all();
        MetaTagManager::registerMetaTags(null, ['canonical' => false]);

        return $this->render('index', [
            'model' => $model,
            'main' => $main,
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        if (!$model = ContactPage::find()->one()) {
            $model = new ContactPage();
        }
        MetaTagManager::registerMetaTags($model);

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSendMessage()
    {
        $msg = ['success' => false, 'error' => ''];
        $feedback = new Feedback();
        $feedback->load(Yii::$app->request->post(), '');
        if ($feedback->validate() && $feedback->save()) {
            $msg['success'] = true;
        } else {
            $msg['error'] = $feedback->getErrors();
        }

        return Json::encode($msg);
    }

    public function actionSitemap()
    {
        $map = $serviceMap = [];
        $services = Service::find()->orderBy('index asc')->all();
        $services = ArrayHelper::map($services, 'name', 'url');
        foreach ($services as $label => $url) {
            $serviceMap[] = [
                'label' => $label,
                'url' => \Yii::$app->urlManager->createUrl(['/service/view', 'slug' => $url])
            ];
            $portfolioMap[] = [
                'label' => $label,
                'url' => \Yii::$app->urlManager->createUrl(['/portfolio/view', 'slug' => $url])
            ];
        }
        $map[] = [
            'label' => 'Список услуг',
            'url' => \Yii::$app->urlManager->createUrl(['/service/index']),
            'level' => $serviceMap,
        ];
        $map[] = [
            'label' => 'Портфолио',
            'url' => '',
            'level' => $serviceMap,
        ];
        $map[] = [
            'label' => 'Продукция',
            'url' => \Yii::$app->urlManager->createUrl(['/products/index']),
        ];
        $map[] = [
            'label' => 'Цены',
            'url' => \Yii::$app->urlManager->createUrl(['/service/price']),
        ];
        $map[] = [
            'label' => 'Контакты',
            'url' => \Yii::$app->urlManager->createUrl(['/site/contact']),
        ];

        return $this->render('sitemap', ['map' => $map]);
    }

    public function actionSitemapXml()
    {
        $map = $serviceMap = [];
        $services = Service::find()->orderBy('index asc')->all();
        $services = ArrayHelper::map($services, 'name', 'url');
        foreach ($services as $label => $url) {
            $serviceMap[] = [
                'loc' => \Yii::$app->urlManager->createUrl(['/service/view', 'slug' => $url]),
                'changefreq' => 'daily',
                'priority' => '0.5'
            ];
            $portfolioMap[] = [
                'loc' => \Yii::$app->urlManager->createUrl(['/portfolio/view', 'slug' => $url]),
                'changefreq' => 'daily',
                'priority' => '0.5'
            ];
        }
        $map[] = [
            'loc' => \Yii::$app->urlManager->createAbsoluteUrl([]),
            'changefreq' => 'daily',
            'priority' => '0.5'
        ];
        $map[] = [
            'loc' => \Yii::$app->urlManager->createAbsoluteUrl(['/service/index']),
            'changefreq' => 'daily',
            'priority' => '0.5'
        ];
        foreach ($services as $label => $url) {
            $map[] = [
                'loc' => \Yii::$app->urlManager->createAbsoluteUrl(['/service/view', 'slug' => $url]),
                'changefreq' => 'daily',
                'priority' => '0.5'
            ];
        }
        foreach ($services as $label => $url) {
            $map[] = [
                'loc' => \Yii::$app->urlManager->createAbsoluteUrl(['/portfolio/view', 'slug' => $url]),
                'changefreq' => 'daily',
                'priority' => '0.5'
            ];
        }
        $map[] = [
            'loc' => \Yii::$app->urlManager->createAbsoluteUrl(['/products/index']),
            'changefreq' => 'daily',
            'priority' => '0.5'
        ];
        $map[] = [
            'loc' => \Yii::$app->urlManager->createAbsoluteUrl(['/service/price']),
            'changefreq' => 'daily',
            'priority' => '0.5'
        ];
        $map[] = [
            'loc' => \Yii::$app->urlManager->createAbsoluteUrl(['/site/contact']),
            'changefreq' => 'daily',
            'priority' => '0.5'
        ];

        $dom = new \DOMDocument('1.0', 'utf-8');
        $urlset = $dom->createElement('urlset');
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        foreach ($map as $item) {
            $url = $dom->createElement('url');
            foreach ($item as $key => $value) {
                $elem = $dom->createElement($key);
                $elem->appendChild($dom->createTextNode($value));
                $url->appendChild($elem);
            }
            $urlset->appendChild($url);
        }
        $dom->appendChild($urlset);
        $xml = $dom->saveXML();
        file_put_contents('sitemap.xml', $xml);

        header("Content-type: text/xml");
        echo $xml;
    }
}
