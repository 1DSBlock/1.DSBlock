<?php
namespace App\Controller;

use Cake\Event\Event;

class ArticlesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['view', 'sendFile', 'download']);
    }

    public function view() {
        $id = (int) !empty($this->request->params['id']) ? $this->request->params['id'] : 0;
        $cid = (int) !empty($this->request->params['cid']) ? $this->request->params['cid'] : 0;
        if(!empty($id)) {
            $article = $this->Articles->get($id);
            $this->set(compact('article'));

            $this->render('article');
        } elseif(!empty($cid)) {
            $blogs = $this->Articles->find()->where(['article_category_id' => $cid]);
            $this->objectUtils->useTables($this, ['ArticleCategories']);
            $category = $this->ArticleCategories->get($cid);
            $this->set(compact('blogs', 'category'));
            $this->render($category->alias);
        }
    }

    public function detail($alias) {

    }

    public function download() {
        $filePath = $this->request->query('path');
        $fileName = $this->request->query('filename');
        return $this->sendFile($filePath, $fileName);
    }
}
