<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use App\Model\Entity\Page;
use Cake\Cache\Cache;

class PagesController extends AppAdminController
{
    protected $keyword = 'name';

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'contain' => ['PageArticles', 'PageUrls']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        Cache::delete(CACHE_PAGES);
    }

    public function add()
    {
        parent::add();

        $this->objectUtils->useTables($this, ['Articles', 'ArticleCategories']);

        $articlesType = ['articles', 'categories', 'custom'];
        $articles = $this->Articles->find()->combine('id', 'title')->toArray();
        $categories = $this->ArticleCategories->find()->combine('id', 'title')->toArray();
        $this->set(compact('articlesType', 'articles', 'categories'));
    }

    /**
     * override
     * @param unknown $id
     */
    protected function getObject($id)
    {
        $table = $this->name;
        $entity = $this->$table->get($id, ['contain' => ['PageArticles', 'PageUrls']]);
        return $entity;
    }

    public function edit($id = null, $return = false)
    {
        $entity = parent::edit($id, true);
        $entity->set([
            'article_id' => !empty($entity->page_article) ? $entity->page_article->article_id : null,
            'article_category_id' => !empty($entity->page_article) ? $entity->page_article->article_category_id : null,
            'link' => !empty($entity->page_url) ? $entity->page_url->link : null,
        ]);

        $this->objectUtils->useTables($this, ['Articles', 'ArticleCategories']);

        $articlesType = ['articles', 'categories', 'custom'];
        $articles = $this->Articles->find()->combine('id', 'title')->toArray();
        $categories = $this->ArticleCategories->find()->combine('id', 'title')->toArray();
        $this->set(compact('articlesType', 'articles', 'categories', 'entity'));
    }

    protected function saveRelationship(Page $page, array $data) {
        $this->objectUtils->useTables($this, ['PageArticles', 'PageUrls']);
        if ($this->isPut()) {
            $this->PageArticles->deleteAll(['page_id' => $page->id]);
            $this->PageUrls->deleteAll(['page_id' => $page->id]);
        }

        $link = $data['link'];
        if(empty($data['link'])) {
            $entity = $this->PageArticles->newEntity([
                'page_id' => $page->id,
                'article_id' => !$data['type'] ? $data['article_id'] : 0,
                'article_category_id' => $data['type'] ? $data['article_category_id'] : 0
            ]);
            if (!empty($entity->errors())) {
                return ['status' => false, 'errors' => $entity->errors()];
            }
            $pageArticle = $this->PageArticles->save($entity);
            $link = $pageArticle->link;
        }
        $entity = $this->PageUrls->newEntity([
            'page_id' => $page->id,
            'link' => $link
        ]);
        if (!empty($entity->errors())) {
            return ['status' => false, 'errors' => $entity->errors()];
        }
        $this->PageUrls->save($entity);
        return ['status' => true, 'errors' => []];
    }

    protected function save($data = null)
    {
        if ($this->isPost() || $this->isPut()) {
            $this->objectUtils->useTables($this, ['Pages']);
            if ($this->isPost()) {
                $entity = $this->Pages->newEntity($this->formatInputData());
            } else {
                $entity = $this->Pages->patchEntity($data, $this->formatInputData());
            }
            if (empty($entity->errors())) {
                $this->Pages->connection()->begin();
                $page = $this->Pages->save($entity);

                $result = $this->saveRelationship($page, $this->formatInputData());
                if($result['status']) {
                    $this->Pages->connection()->commit();
                    $params = $this->request->params;
                    $controller = $params['controller'];
                    $prefix = $params['prefix'];
                    return $this->redirect("$prefix/$controller/lists");
                } else {
                    $entity->errors($result['errors']);
                    $this->set(compact('entity'));
                }
            } else {
                $this->set(compact('entity'));
            }
        }
        return false;
    }
}
