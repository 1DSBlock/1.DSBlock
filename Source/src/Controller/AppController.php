<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use App\Lib\ObjectUtils;
use App\Lib\Utils;
use App\Model\Entity\User;
use Cake\Controller\Component\AuthComponent;
use Cake\Network\Request;
use Cake\Network\Response;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    use CommonTrait;
    
    protected $utils;
    protected $objectUtils;
    
    public function __construct(Request $request = null, Response $response = null, $name = null, $eventManager = null, $components = null)
    {
        parent::__construct($request, $response, $name, $eventManager, $components);
    }
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
        
        $this->utils = Utils::getInstance();
        $this->objectUtils = ObjectUtils::getInstance();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
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
        $userAuth = [
            'authorize' => [
                'Controller'
            ],
                'authenticate' => [
                    AuthComponent::ALL => [
                        'fields' => ['username' => 'email', 'password' => 'password'],
                        'scope' => ['Users.status' => User::STATUS_ACTIVE],
                        'userModel' => 'Users'
                    ],
                    'Form' => [
                        'passwordHasher' => [
                            'className' => 'Weak',
                            'hashType' => 'sha256'
                        ]
                    ]
                ],
                'loginAction' => ['controller' => 'users', 'action' => 'login'],
                'loginRedirect' => ['controller' => 'users', 'action' => 'dashboard'],
//                 'flash' => [
//                     'element' => 'ec_message'
//                 ],
                'authError' => __('Your session has ended. Please log back in.')
            ];
    
        $this->Auth->config($userAuth);
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
