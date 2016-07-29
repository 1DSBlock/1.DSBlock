<?php
namespace App\Controller\Admin;

use Cake\Controller\Component\AuthComponent;
use Cake\Controller\Controller;
use Cake\Core\App;
use Cake\Event\Event;
use Cake\Log\Log;
use App\Controller\CommonTrait;

class AppAdminController extends Controller
{
    use CommonTrait;
    
    public $helpers = ['Html', 'Form'];
    public $components = ['Auth', 'RequestHandler', 'Cookie'];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Csrf', [
               'cookieName' => 'ecToken',
               'secure' => true
        ]);

        $this->viewBuilder()->layout('default');
    }

    /**
     * beforeRender all things need to run before rendering
     * @param  Event  $event Cake Event
     * @return void
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        
    }

    /**
     * beforeFilter all things need to run before running an action
     * @param  Event  $event an cake event
     * @return \Cake\Network\Response|null
     * @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->configureAuth();
    }

    

    /**
     * configureAuth auth configurations
     * @return void
     */
    protected function configureAuth()
    {
        $adminAuth = [
                'authenticate' => [
                    AuthComponent::ALL => [
                        'fields' => ['username' => 'email', 'password' => 'password'],
                        'scope' => ['SystemUsers.active' => 1],
                        'userModel' => 'SystemUsers'
                    ],
                    'Form' => [
                        'passwordHasher' => [
                            'className' => 'Weak',
                            'hashType' => 'sha256'
                        ]
                    ]
                ],
                'loginAction' => ['system' => true, 'controller' => 'users', 'action' => 'login'],
                'loginRedirect' => ['action' => 'dashboard'],
                'flash' => [
                    'element' => 'ec_message'
                ],
                'authError' => __('Your session has ended. Please log back in.')
            ];

        $this->Auth->config($adminAuth);
    }
}
