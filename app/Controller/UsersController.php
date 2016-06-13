<?php
App::uses('AppController', 'Controller');
App::uses('UserManagement', 'Lib');
class UsersController extends AppController {
    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array();
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        if ($this->action != 'search') {
            if (($this->action == 'userProfile') && (isset($this->params->pass[0])) && ($this->params->pass[0] == DEMO_USER_PROFILE)) {
                // do not check
            } else
            if (!$this->Session->read('userInfo')) {
                $this->Session->setFlash(MSG_BAD_REQUEST);
                $this->redirect('/'.PAGE_HOME.PAGE_EXTN);
            }
        }
        $this->userManagement = new UserManagement;
    }

    public function userProfile($userId = 0) {
        $userInfo = $this->User->findById($userId);
        if (!count($userInfo)) {
            $this->errorCode = MSG_ERROR_CODE;
            $this->errorMsg = 'User Not found';
        }
        $this->set(array( 'userInfo' => $userInfo, 'errorCode' => $this->errorCode, 'errorMsg' => $this->errorMsg));
    }

    public function editProfile() {
        $userInfo = NULL;
        $userId = $this->Session->read('userInfo')->id;
            $userInfo = $this->User->findById($userId);
            if (!count($userInfo)) {
                $this->errorCode = MSG_ERROR_CODE;
                $this->errorMsg = MSG_NOT_FOUND;
            }

        $this->set(array('userInfo' => $userInfo, 'errorCode' => $this->errorCode, 'errorMsg' => $this->errorMsg));
    }

    public function changePassword() {
         $userId = $this->Session->read('userInfo')->id;
        //debug($userId);
            if ($this->request->isPost()) {
                $currentPassword = $this->request->data['currentPassword'];
                $newPassword = $this->request->data['newPassword'];
                $retypePassword = $this->request->data['retypePassword'];
                if (!empty($currentPassword) && !empty($newPassword) && !empty($retypePassword)) {
                    if ($newPassword === $retypePassword) {
                        if ($this->Session->read('userInfo')->userPassword === $currentPassword) {
                            $this->User->id = $userId;
                            $this->User->set('userPassword', $newPassword);
                            if ($this->User->save()) {
                                $this->errorCode = MSG_SUCCESS_CODE;
                                $this->errorMsg = 'Password updated successfully.';
                                $userObj = $this->Session->read('userInfo');
                                $userObj->userPassword = $newPassword;
                                //debug($userObj);
                                $this->Session->write('userInfo', $userObj);
                   } else {
	                           $this->errorCode = MSG_ERROR_CODE;
    	                        $this->errorMsg = 'Password updation error.';
                    }
                        } else {
                            $this->errorCode = MSG_ERROR_CODE;
                            $this->errorMsg = 'Please enter correct current password.';
                        }
                    } else {
                        $this->errorCode = MSG_ERROR_CODE;
                        $this->errorMsg = 'New and Retype password must be same.';
                    }
                } else {
                    $this->errorCode = MSG_ERROR_CODE;
                    $this->errorMsg = 'All fields are mandatory.';
                }
                // debug($this->Session->read('userInfo'));
            }

        $this->set(array('pageTitle' => 'Change User password', 'errorCode' => $this->errorCode, 'errorMsg' => $this->errorMsg));
    }

    public function search() {
        // debug($this->request->query);exit;
        $userType = (int) $this->request->query['userType'];
        $isManglik = (int) $this->request->query['isManglik'];
        $ageLimit = (int) $this->request->query['ageLimit'];
        $location = $this->request->query['location'];

        //build condition array
        $conditions = compact('userType', 'isManglik');
        if (!empty($location)) {
            $conditions['userBirthPlace LIKE'] = '%' . $location . '%';
        }

        if (!empty($ageLimit)) {
            $age = date('Y-m-d H:i:s', strtotime('-' . $ageLimit . ' years'));
            $conditions['userDobAndTime >='] = $age;
        }
        $this->paginate = array(
            'order' => array(
                'User.dateCreated' => 'asc'
            ),
            'conditions' => $conditions,
            'limit' => 5
        );
        $userList = $this->paginate('User');
        /* $userList = $this->User->find('all', array(
          'conditions' =>  $conditions,
          )); */
        if (!$this->Session->read('userInfo')) {
            $this->errorCode = MSG_INFO_CODE;
            $this->errorMsg = MSG_NOT_LOGGED_IN_SEARCH;
        }
        $this->set(array('pageTitle' => 'Search your perfect match', 'userList' => $this->userManagement->getProcessedUserInfo($userList), 'errorCode' => $this->errorCode, 'errorMsg' => $this->errorMsg));
    }
}