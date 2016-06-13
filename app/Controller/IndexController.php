<?php

App::uses('AppController', 'Controller');
App::uses('UserManagement', 'Lib');

class IndexController extends AppController {

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array('User', 'UserImage','AdminUser');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->userManagement = new UserManagement;
    }

    public function index() {

        $this->set(array('pageTitle' => 'Home Page'));
    }

    public function registerForFree() {
        $userInfo = array();

        //debug($this->User->getAllUsers());
        if ($this->request->isPost()) {
            try {

                $userInfo = $this->userManagement->processNewUserData($this->request->data, $this->params['form']);
                if (!$userInfo) {
                    throw new Exception('1. All images are required.<br />2. Only jpeg, png, jpg file supported.');
                }

                if ($this->User->addNewUser($userInfo)) {

                    // upload image to server
                    $userImages = $this->userManagement->uploadUserImages($this->params['form']);


                    //debug($userImages );exit;
                    $newUserId = $this->User->id;
                    //debug($newUserId);
                    //debug($userImages );exit;
                    if (is_array($userImages) && count($userImages)) {
                        $i = 0;
                        // add this images to UserImages Table
                        foreach ($userImages as $userImg) {
                            $saveData = array('userId' => $newUserId, 'imgName' => $userImg);
                            if ($i > 0) {
                                $saveData['imgSize'] = 'USER_FULL_LENGTH';
                            }
                            //debug($userImg);exit;
                            $this->UserImage->create();
                            $this->UserImage->save($saveData);
                            $i++;
                        }
                    }

                    $this->errorCode = 0;
                    $this->errorMsg = 'User added Successfully.';
                } else {
                    // didn't validate logic
                    $this->errorCode = 1;
                    $this->errorMsg = $this->userManagement->processValidationData($this->User->validationErrors);
                }
            } catch (Exception $e) {
                $this->errorCode = 1;
                $this->errorMsg = $e->getMessage();
            }
        }
        $this->set(array('pageTitle' => 'Register with usss', 'errorCode' => $this->errorCode, 'errorMsg' => $this->errorMsg));
    }

    public function doLogin() {
        $userInfo = array();
        $this->Session->delete('adminInfo');
        if ($this->request->isPost()) {
            if ($userInfo = $this->User->find('first', array('conditions' => array(
                    'userMobile' => $this->request->data['userName'],
                    'userPassword' => $this->request->data['password']
                )))) {
                $this->Session->write('userInfo', (object) $userInfo['User']);
                $this->Session->write('userImages', (object) $userInfo['UserImages']);
                $this->redirect('/users/userProfile/' . $userInfo['User']['id']);
            } else {
                $this->Session->setFlash('Invalid Login details');
                $this->redirect("/index/index");
            }
            //debug($userInfo);exit;
        }
    }

    public function adminLogin() {
          $this->Session->delete('userInfo');
        $this->Session->delete('userImages');
        $adminInfo = array();
        if ($this->request->isPost()) {
            if ($adminInfo = $this->AdminUser->find('first', array('conditions' => array(
                    'userName' => $this->request->data['userName'],
                    'password' => $this->request->data['password'],
                    'isActive' => 1
                ), 'fields' => array('userName')))) {
                //debug($adminInfo);
              
                $this->Session->write('adminInfo', (object) $adminInfo['AdminUser']);
                $this->redirect("/cpanel/adminDashboard");
                 } else {
                 
                $this->Session->setFlash('Invalid Login details');
                $this->redirect("/index/adminLogin");
            }
            //debug($userInfo);exit;
        }
        $this->set(array('pageTitle' => 'A Super Admin Login Panel'));
    }

    public function doLogout() {

        $this->Session->delete('userInfo');
        $this->Session->delete('userImages');
        $this->Session->delete('adminInfo');
        $this->redirect("/index/index");
    }

    public function successStories() {
        $this->set(array('pageTitle' => 'Success Stories'));
    }

}
