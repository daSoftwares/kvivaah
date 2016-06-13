<?php

App::uses('SimpleImage', 'Vendor');

class UserManagement {

    public function processNewUserData(&$userData, $userImages) {
        $userData['userDobAndTime'] = date('Y-m-d H:i:s', strtotime($userData['userDobAndTime']));
        $userData['dateCreated'] = date('Y-m-d H:i:s');
        //$userData['userProfileId'] = 'COUNT(userId)+1';
        //debug($userImages);
        if (is_array($userImages)) {
            if (count($userImages)) {
                foreach ($userImages as $image) {
                    if (($image['size'] > 0) && (in_array($image['type'], array('image/jpeg', 'image/jpg', 'image/png')))) {
                        return $userData;
                    }
                }
            }
            return array();
        }
        return $userData;
    }

    public function uploadUserImages($userImages) {
        $image = NULL;

        $imageName = array();
        foreach ($userImages as $key => $value) {

            $image = (object) $value;
            //debug($image );
            if ($key == 'profilePicture') {
                $imageName [] = $this->uploadProfileImage($image);
            } elseif (in_array($key, array('fullLength1', 'fullLength2'))) {
                $imageName [] = $this->uploadFullLengthImage($image);
            }
        }
        return $imageName;
    }

    public function uploadProfileImage($image) {

        $imgName = time() . $image->name;

        $sm = new SimpleImage($image->tmp_name);
        $sm->resizeToWidth(300);
        //$sm->save();
        $sm->cutFromCenter(200, 200);
        $sm->save(USER_PROFILE_ROOT_PATH . $imgName);

        return $imgName;
    }

    public function uploadFullLengthImage($image) {

        $imgName = time() . $image->name;

        $sm = new SimpleImage($image->tmp_name);
        $sm->resizeToWidth(700);
        //$sm->save();
        //$sm->cutFromCenter(200 , 200);
        $sm->save(USER_PROFILE_ROOT_PATH . $imgName);

        return $imgName;
    }

    public function getProcessedUserInfo($allUserInfo = array()) {
        $finalData = array();
        if (is_array($allUserInfo) && count($allUserInfo)) {
            foreach ($allUserInfo as $userInfo) {

                if (isset($userInfo['UserImage'])) {
                    if (is_array($userInfo['UserImage']) && count($userInfo['UserImage'])) {
                        $userInfo['User']['userImage'] = $userInfo['UserImage'];
                    } else {
                        $userInfo['User']['userImage'] = array();
                    }
                }
                $finalData[] = $userInfo['User'];
            }
        }

        return $finalData;
    }

    public function processValidationData($errorArray = array()) {
        $formatedData = array();
        $i = 1;
        foreach ($errorArray as $arrayOne) {
            foreach ($arrayOne as $arrayTwo) {
                $formatedData[] = $i . ') ' . $arrayTwo . '<br />';
                $i++;
            }
        }
        $formatedData = implode('', $formatedData);
        return $formatedData;
    }

}
