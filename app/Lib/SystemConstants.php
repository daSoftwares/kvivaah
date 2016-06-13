<?php
/**
 * Site wide  configurations
 */
define('SITE_DIR', '/kayastha-shaadi');
define('HTTP_PATH', Router::fullbaseUrl() .SITE_DIR);
define('USER_PROFILE_FOLDER', '/userImages/');

define('USER_PROFILE_ROOT_PATH', WWW_ROOT.USER_PROFILE_FOLDER);
define('USER_PROFILE_HTTP_PATH', HTTP_PATH.USER_PROFILE_FOLDER);

define('USER_MASKING', 'KV');
define('WEBSITE_NAME', 'Kayastha Vivaah');
define('WEBSITE_SUBTITLE', 'Find your soul mate at right place...');
define('WEBSITE_AUTHOR', 'Rohit Shrivastava rohit.shrivastava22@gmail.com');

// define website urls
define('PAGE_EXTN', '.html');
define('PAGE_HOME', 'index');
define('PAGE_REGISTER', 'registerForFree');
define('PAGE_ADVERTISE_WU', 'advertiseWithUs');
define('PAGE_CONTACT', 'contactUs');
define('PAGE_LOGIN', 'doLogin');
define('PAGE_LOGOUT', 'doLogout');
define('PAGE_ADMIN_LOGIN', 'adminLogin');
define('PAGE_SUCC_STORY', 'successStories');

define('PAGE_VIEW_PROFILE', 'userProfile/');
define('PAGE_EDIT_PROFILE', 'editProfile/');
define('PAGE_SEARCH_PROFILE', 'search');
define('PAGE_CHANGE_PASSWORD', 'changePassword');
/**
 * Define site wide contants
 */
define('MSG_SUCCESS_CODE', 0);
define('MSG_ERROR_CODE', 1);
define('MSG_INFO_CODE', 2);

define('USER_TYPE_BRIDE', 0);
define('USER_TYPE_GROOM', 1);

define('IS_MAGNLIK_TRUE', 1);
define('IS_MAGNLIK_FALSE', 0);

define('USER_SEARCH_AGE_LIMIT', 40);
define('DEMO_USER_PROFILE', 1);