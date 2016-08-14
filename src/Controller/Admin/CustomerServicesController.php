<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class CustomerServicesController extends AppAdminController
{
    protected $keywords = ['topic'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];

    public function birthday()
    {
    }

    public function beforeFilter(Event $event)
    {
        $this->eventManager()->off($this->Csrf);
    }

    public function getUsersByMonth()
    {
        if($this->isPost() && $this->isAjax()) {
            $this->viewBuilder()->layout(false);
            $this->autoRender = false;
            $start = $this->request->data('start');
            $end = $this->request->data('end');

            $this->objectUtils->useTables($this, ['Users']);
            $users = $this->Users->find();
            $birthday = $users->func()->date_format([
                'birthday' => 'identifier',
                "'" . date('Y') . "-%m-%d'" => 'literal'
            ]);
            $users->select($this->Users);
            $users->select(['birthdayCreated' => $birthday]);
            $users->where(function ($exp, $q) use($birthday, $start, $end) {
                    return $exp->between($birthday, $start, $end);
                });

            $data = [];
            foreach($users as $user) {
                $data[] = [
                    'title' => __('Birthday of') . ' ' . $user->fullname,
                    'start' => $user->birthdayCreated,
                    'backgroundColor' => "#f56954", //red
                    'borderColor' => "#f56954" //red
                ];
            }
            $this->response->body(json_encode($data));
            $this->response->type('json');
            return ;
        }

        return $this->sendAjax(1, 'Permission denied');
    }
}
