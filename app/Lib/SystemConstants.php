<?php
/**
 * Site wide  configurations
 */
define('SITE_DIR', '/kayastha-shaadi/');
define('HTTP_PATH', Router::fullbaseUrl() .SITE_DIR);
define('USER_PROFILE_FOLDER', 'userImages/');

define('USER_PROFILE_ROOT_PATH', WWW_ROOT.USER_PROFILE_FOLDER);
define('USER_PROFILE_HTTP_PATH', HTTP_PATH.USER_PROFILE_FOLDER);

define('USER_MASKING', 'KV');
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