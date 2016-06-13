<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
	public $useTable = 'tbl_user';
	public $name='User';
	
	  public $hasMany = array( 
								'UserImage' => array( 
										'className' => 'UserImage', 
										'foreignKey' => 'userId', 
										//'conditions' => 'UserImage.userId = User.id'
										)
							);
	/*						
	public $hasOne = array( 
								'Status' => array( 
										'className' => 'Status', 
										'foreignKey' => 'statusId', 
										//'conditions' => 'UserImage.userId = User.id'
										)
							);
		*/				
		
		/*public $validate = array(
       // 'userDisplayName' => 'alphaNumeric',
        'userEducation' => array(
            'rule'    => array('minLength', '50'),
            'message' => 'Minimum 15 characters long'
        ),
      
    );*/
	
	 public $validate = array(
	 		'userDisplayName' => array( 
						'required' => array( 
											'rule' => 'notEmpty',
											'message' => 'Please enter your full name.'
									 ), 
						'minLength' => array( 
											'rule' => array('minLength', 5), 
											'message' => 'At least 5 character is required in full name.'
											),
						'maxLength' => array( 
											'rule' => array('maxLength', 30),
											'message' => 'Maximum 30 characters allowed in full name.'
											),
							),
			'userMobile' => array(
						'required' => array(
											'rule' => 'notEmpty',
											'message' => 'Please enter phone number.'
											),
						'minLength' => array(
											'rule' => array('minLength', 10),
											'message' => 'At least 10 character is required in phone number.'
											),
						'maxLength' => array(
											'rule' => array('maxLength', 10),
											'message' => 'Maximum 10 characters allowed in phone number.'
											),
							'isUnique' => array(
											'rule' => 'isUnique',
											'message' => 'Primary mobile number is already in use.',
											'on' => 'create',
											),
								),
				
	/*				
		'profilePicture' => array(
				'required' => array(
											'rule' => 'notEmpty',
											'message' => 'Please enter phone sss.'
											),
					'mimeType'=>			array(
				'rule'    => array('mimeType', '#image/.+#'),
				'message' => 'Invalid mime type.'
			),
						
					),
		'fullLength1' => array(
							'required' => array(
											'rule' => 'notEmpty',
											'message' => 'Please enter phone number.'
											),
			'rule'    => array(
				'extension', array('gif', 'jpeg', 'png', 'jpg')
			),
			'message' => 'Please supply a valid image.',
			
			
		),
		'fullLength2' => array(
							'required' => array(
											'rule' => 'notEmpty',
											'message' => 'Please enter phone number.'
											),
			'rule'    => array(
				'extension', array('gif', 'jpeg', 'png', 'jpg')
			),
			'message' => 'Please supply a valid image.',
			
			
		)*/
			
		); 
	
	public function addNewUser($userInfo){
			//debug($userInfo);
			$this->create();
			return $this->save($userInfo);
		}
		
	public function getUserProfile($userId = 0){
			return $this->findById($userId);
		}


	public function isValidActiveUser($mobile = 0, $password=0){
			return $this->find('first', array(
											'conditions' => array(
														'userMobile' => $mobile,
														'userPassword' => $password,
														'userStatus' => 0
															),
											'recursive' => -1
											)
								);
		}

	public function getAllUsers($imgRequired = false){//debug($imgRequired);
			return $this->find('all', array(
								'recursive' =>  ($imgRequired == true ? 1 : -1)
							)
				);
				
		}
}
