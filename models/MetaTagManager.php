<?php
/**
 * Created by PhpStorm.
 * User: shark
 * Date: 14.05.2018
 * Time: 23:41
 */

namespace app\models;


class MetaTagManager
{
    private $model;
    private $data;
    private $options;
    private $defaultData = [
        'title' => 'Lumix Studio',
        'description' => 'Lumix Studio',
        'keywords' => 'Lumix Studio место, где профессионалы beauty сферы смогут удивить даже самого претензийного гостя',
    ];

    private function createMetaTitle()
    {
        $title = $this->getData('title');
        if (!$title && $this->model) {
            if (method_exists($this->model, 'getMetaTitle')) {
                $title = $this->model->getMetaTitle();
            }
        }
        if (!$title) {
            $title = $this->defaultData['title'];
        }

        return $title;
    }

    private function createMetaDescription()
    {
        //description
        $description = $this->getData('description');
        if (!$description && $this->model) {
            if (method_exists($this->model, 'getMetaDescription')) {
                $description = $this->model->getMetaDescription();
            }
        }
        if (!$description) {
            $description = $this->defaultData['description'];
        }

        return $description;
    }

    private function creteMetaKeywords()
    {
        //keywords
        $keywords = $this->getData('keywords');
        if (!$keywords && $this->model) {
            if (method_exists($this->model, 'getMetaKeywords')) {
                $keywords = $this->model->getMetaKeywords();
            }
        }
        if (!$keywords) {
            $keywords = $this->defaultData['keywords'];
        }

        return $keywords;
    }

    private function createCanonical()
    {
        //canonical
        $canonical = $this->getData('canonical');
        if (!$canonical && $this->model && isset($this->model->url)) {
            $controller = \Yii::$app->controller;
            $canonical = \Yii::$app->urlManager->createAbsoluteUrl(
                [
                    '/' . $controller->id . '/' . $controller->action->id,
                    'slug' => $this->model->url
                ]);
        }

        return $canonical;
    }

    function __construct($model, $data, $options)
    {
        $this->model = $model;
        $this->data = $data;
        $this->options = $options;
    }

    public function getData($name)
    {
        if (empty($this->data) || !is_string($name)) return null;

        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    public static function registerMetaTags($model = null, $data = [], $options = [])
    {
        $manager = new self($model, $data, $options);
        \Yii::$app->view->title = $manager->createMetaTitle();
        $description = $manager->createMetaDescription();
        $keywords = $manager->creteMetaKeywords();
        $canonical = $manager->createCanonical();

        if ($keywords) {
            \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords],
                'keywords');
        }
        if ($description) {
            \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $description],
                'description');
        }
        if ($canonical) {
            \Yii::$app->view->registerLinkTag(['rel' => 'canonical', 'href' => $canonical],
                'canonical');
        }
    }
}