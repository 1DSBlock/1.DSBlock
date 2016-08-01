<?php
namespace App\Controller\Admin;

use Cake\Controller\Component\AuthComponent;
use Cake\Controller\Controller;
use Cake\Core\App;
use Cake\Event\Event;
use Cake\Log\Log;
use App\Controller\CommonTrait;
use App\Lib\Utils;
use App\Lib\ObjectUtils;

class AppAdminController extends Controller
{
    use CrudTrait;
    use CommonTrait;

    protected $utils;
    protected $objectUtils;

    public $paginate = [
        'limit' => PAGINATE_LIMIT
    ];

    public $helpers = [
        'Html',
        'Form'
    ];

    public $components = [
        'Auth',
        'RequestHandler',
        'Cookie'
    ];

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
        $this->loadComponent('Csrf');
        $this->loadComponent('Paginator');
        
        $this->viewBuilder()->layout('system_default');
        
        $this->utils = Utils::getInstance();
        $this->objectUtils = ObjectUtils::getInstance();
    }

    /**
     * beforeRender all things need to run before rendering
     * 
     * @param Event $event
     *            Cake Event
     * @return void
     */
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
    }

    /**
     * beforeFilter all things need to run before running an action
     * 
     * @param Event $event
     *            an cake event
     * @return \Cake\Network\Response|null @SuppressWarnings(PHPMD.StaticAccess)
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->configureAuth();
    }

    /**
     * configureAuth auth configurations
     * 
     * @return void
     */
    protected function configureAuth()
    {
        $adminAuth = [
            'authorize' => [
                'Controller'
            ],
            'authenticate' => [
                AuthComponent::ALL => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ],
                    'scope' => [
                        'SystemUsers.active' => 1
                    ],
                    'userModel' => 'SystemUsers'
                ],
                'Form' => [
                    'passwordHasher' => [
                        'className' => 'Weak',
                        'hashType' => 'sha256'
                    ]
                ]
            ],
            'loginAction' => [
                'admin' => true,
                'controller' => 'SystemUsers',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'admin' => true,
                'controller' => 'SystemUsers',
                'action' => 'dashboard'
            ],
            // 'flash' => [
            // 'element' => 'default'
            // ],
            'authError' => __('Your session has ended. Please log back in.')
        ];
        
        $this->Auth->config($adminAuth);
    }

    public function isAuthorized($user)
    {
        // // Admin can access every action
        // if (isset($user['role']) && $user['role'] === 'admin') {
        // return true;
        // }
        
        // Default deny
        return true;
    }
}
