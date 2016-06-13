<?php

App::uses('AppController', 'Controller');
App::uses('UserManagement', 'Lib');

class CpanelController extends AppController {

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array('User','MatchedProfile');
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        if(!$this->Session->read('adminInfo')){
                $this->Session->setFlash('301 Bad request. Its seems that you are not logged-in OR An invalid access.');
                $this->redirect("/index/adminLogin");
            }
        $this->userManagement = new UserManagement;
    }

    public function beforeRender() {
        $this->layout = 'cpanel-layout';
    }

    public function adminDashboard() {
        $totalUser = $this->User->find('count',array('conditions' => array('userStatus' => 0)));
        $activeGroom = $this->User->find('count',array('conditions' => array('userType'=> 1, 'userStatus' => 0)));
        $activeBride = $this->User->find('count',array('conditions' => array('userType'=> 0, 'userStatus' => 0)));
        $matchedProfile = $this->MatchedProfile->find('count');

        $this->set(array('pageTitle' => 'User Profile Page'));
        $this->set(compact('totalUser','activeGroom','activeBride','matchedProfile'));
    }

    public function allUsers() {

        $this->paginate = array(
            'order' => array(
                'User.dateCreated' => 'asc'
            ),
            'limit' => 10
        );

        $this->set(array('pageTitle' => 'User Profile Page'));

        $allUserInfo = $this->paginate('User');
        $this->set(array('allUsers' => $this->userManagement->getProcessedUserInfo($allUserInfo)));
    }

}
