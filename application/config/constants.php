<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


defined('USER_TYPE_ADMIN')        OR define('USER_TYPE_ADMIN', 1);
defined('USER_TYPE_ADVISOR')      OR define('USER_TYPE_ADVISOR',   2);
defined('USER_TYPE_EXPERT')       OR define('USER_TYPE_EXPERT',  3);

defined('USER_STATUS_INIT')       OR define('USER_STATUS_INIT',    0);
defined('USER_STATUS_LIVE')       OR define('USER_STATUS_LIVE',       1);
defined('USER_STATUS_INVITE')     OR define('USER_STATUS_INVITE',    2);
defined('USER_STATUS_INVITED')    OR define('USER_STATUS_INVITED',    3);
defined('USER_STATUS_DELETE')    OR define('USER_STATUS_DELETE',    4);
defined('USER_STATUS_ALL')        OR define('USER_STATUS_ALL',      100);


defined('CHAT_TYPE_PRIVATE')      OR define('CHAT_TYPE_PRIVATE', 1);
defined('CHAT_TYPE_GROUP')        OR define('CHAT_TYPE_GROUP',   2);
defined('CHAT_TYPE_WELCOME')      OR define('CHAT_TYPE_WELCOME', 3);

defined('CHAT_STATUS_INIT')       OR define('CHAT_STATUS_INIT',    0);
defined('CHAT_STATUS_LIVE')       OR define('CHAT_STATUS_LIVE',    1);

defined('TBL_USER_ID')            OR define('TBL_USER_ID',      'id');
defined('TBL_USER_UID')           OR define('TBL_USER_UID',     'uid');
defined('TBL_USER_FNAME')         OR define('TBL_USER_FNAME',   'fname');
defined('TBL_USER_LNAME')         OR define('TBL_USER_LNAME',   'lname');
defined('TBL_USER_EMAIL')         OR define('TBL_USER_EMAIL',   'email');
defined('TBL_USER_PWD')           OR define('TBL_USER_PWD',     'pwd');
defined('TBL_USER_TYPE')          OR define('TBL_USER_TYPE',    'type');
defined('TBL_USER_STATUS')        OR define('TBL_USER_STATUS',  'status');
defined('TBL_USER_BIO')           OR define('TBL_USER_BIO',     'bio');
defined('TBL_USER_PHOTO')         OR define('TBL_USER_PHOTO',   'photo');
defined('TBL_USER_FACEBOOK')         OR define('TBL_USER_FACEBOOK',   'facebook');

defined('TBL_CHAT_ID')            OR define('TBL_CHAT_ID',          'id');
defined('TBL_CHAT_DID')           OR define('TBL_CHAT_DID',         'did');
defined('TBL_CHAT_NAME')          OR define('TBL_CHAT_NAME',        'name');
defined('TBL_CHAT_OCCUPANTS')     OR define('TBL_CHAT_OCCUPANTS',   'occupants');
defined('TBL_CHAT_TYPE')          OR define('TBL_CHAT_TYPE',        'type');
defined('TBL_CHAT_STATUS')        OR define('TBL_CHAT_STATUS',      'status');
defined('TBL_CHAT_JID')           OR define('TBL_CHAT_JID',         'jid');
defined('TBL_CHAT_SENDER')        OR define('TBL_CHAT_SENDER',      'sender');
defined('TBL_CHAT_MESSAGE')       OR define('TBL_CHAT_MESSAGE',     'message');
defined('TBL_CHAT_TIME')          OR define('TBL_CHAT_TIME',        'time');

defined('TBL_OPTION_ID')          OR define('TBL_OPTION_ID',        'id');
defined('TBL_OPTION_UID')         OR define('TBL_OPTION_UID',       'uid');
defined('TBL_OPTION_KEY')         OR define('TBL_OPTION_KEY',       'meta_key');
defined('TBL_OPTION_VALUE')       OR define('TBL_OPTION_VALUE',     'meta_value');

defined('TBL_NAME_USER')          OR define('TBL_NAME_USER',     'tbl_user');
defined('TBL_NAME_CHAT')          OR define('TBL_NAME_CHAT',     'tbl_chat');
defined('TBL_NAME_OPTION')          OR define('TBL_NAME_OPTION',   'tbl_option');

defined('USER_LOGIN_SUCCESS')     OR define('USER_LOGIN_SUCCESS', 1);
defined('USER_LOGIN_404')         OR define('USER_LOGIN_404', 0);
defined('USER_LOGIN_DELETE')      OR define('USER_LOGIN_DELETE', 2);
defined('USER_LOGIN_PWD')         OR define('USER_LOGIN_PWD', 3);