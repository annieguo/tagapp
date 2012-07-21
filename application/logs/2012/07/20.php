<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-20 10:16:29 --- ERROR: Database_Exception [ 1146 ]: Table 'tagging.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-20 10:16:29 --- STRACE: Database_Exception [ 1146 ]: Table 'tagging.images' doesn't exist [ SHOW FULL COLUMNS FROM `images` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\kohana-3.2\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('images')
#2 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(27): Kohana_ORM->__construct()
#6 [internal function]: Controller_Welcome->action_upload()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 10:41:25 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-07-20 10:41:25 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(26): Kohana_ORM->set('name', 'Penguins.jpg')
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 10:55:29 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT\images;1342745729; must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2012-07-20 10:55:29 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT\images;1342745729; must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(23): Kohana_Upload::save(Array, 'Koala.jpg', 'D:\wamp\www\koh...')
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 10:58:37 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT\images;1342745917; must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2012-07-20 10:58:37 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT\images;1342745917; must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(23): Kohana_Upload::save(Array, 'Chrysanthemum.j...', 'D:\wamp\www\koh...')
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 10:59:50 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT\images/1342745990/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
2012-07-20 10:59:50 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT\images/1342745990/ must be writable ~ SYSPATH\classes\kohana\upload.php [ 80 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(23): Kohana_Upload::save(Array, 'Chrysanthemum.j...', 'D:\wamp\www\koh...')
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 11:02:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Image::get() ~ APPPATH\classes\controller\welcome.php [ 29 ]
2012-07-20 11:02:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Image::get() ~ APPPATH\classes\controller\welcome.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 11:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tagging/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-20 11:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tagging/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 11:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tagging/index/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-20 11:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tagging/index/6 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 11:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tagging/index/pid/8 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-20 11:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tagging/index/pid/8 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-20 11:58:34 --- ERROR: Kohana_Exception [ 0 ]: The error property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-20 11:58:34 --- STRACE: Kohana_Exception [ 0 ]: The error property does not exist in the Model_Image class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(12): Kohana_ORM->__get('error')
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(21): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 11:58:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\tagging.php [ 12 ]
2012-07-20 11:58:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\tagging.php [ 12 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 12, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(21): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 16:49:56 --- ERROR: ErrorException [ 1 ]: Call to a member function is_ajax() on a non-object ~ APPPATH\classes\controller\tagging.php [ 26 ]
2012-07-20 16:49:56 --- STRACE: ErrorException [ 1 ]: Call to a member function is_ajax() on a non-object ~ APPPATH\classes\controller\tagging.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 17:25:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Tag as array ~ APPPATH\views\tagging.php [ 42 ]
2012-07-20 17:25:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Tag as array ~ APPPATH\views\tagging.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 18:29:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/lis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-20 18:29:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/lis was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-20 18:29:18 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tag - assumed 'tag' ~ APPPATH\classes\controller\welcome.php [ 45 ]
2012-07-20 18:29:18 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tag - assumed 'tag' ~ APPPATH\classes\controller\welcome.php [ 45 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(45): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\wamp\www\koh...', 45, Array)
#1 [internal function]: Controller_Welcome->action_list()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 18:29:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\classes\controller\welcome.php [ 53 ]
2012-07-20 18:29:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\classes\controller\welcome.php [ 53 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 53, Array)
#1 [internal function]: Controller_Welcome->action_list()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 18:30:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\listing.php [ 1 ]
2012-07-20 18:30:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\listing.php [ 1 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\listing.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 1, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(53): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_list()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 18:34:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php/welcome/list/109 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-20 18:34:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php/welcome/list/109 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-20 19:19:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\controller\welcome.php [ 47 ]
2012-07-20 19:19:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\controller\welcome.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 19:20:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\controller\welcome.php [ 47 ]
2012-07-20 19:20:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\controller\welcome.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 19:20:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\controller\welcome.php [ 47 ]
2012-07-20 19:20:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\controller\welcome.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 19:22:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: op ~ APPPATH\classes\controller\tagging.php [ 32 ]
2012-07-20 19:22:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: op ~ APPPATH\classes\controller\tagging.php [ 32 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 32, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-20 19:23:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''109' LIMIT 1' at line 1 [ SELECT `name`.* FROM `names` AS `name` WHERE `name`  '109' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-20 19:23:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''109' LIMIT 1' at line 1 [ SELECT `name`.* FROM `names` AS `name` WHERE `name`  '109' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\kohana-3.2\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `name`.*...', false, Array)
#1 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(32): Kohana_ORM->find()
#4 [internal function]: Controller_Tagging->action_save()
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-20 19:23:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image_Name' not found ~ APPPATH\classes\controller\tagging.php [ 45 ]
2012-07-20 19:23:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image_Name' not found ~ APPPATH\classes\controller\tagging.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 19:24:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image_Name' not found ~ APPPATH\classes\controller\tagging.php [ 36 ]
2012-07-20 19:24:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image_Name' not found ~ APPPATH\classes\controller\tagging.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 19:25:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_Image_Name' not found ~ APPPATH\classes\controller\tagging.php [ 36 ]
2012-07-20 19:25:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_Image_Name' not found ~ APPPATH\classes\controller\tagging.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-20 19:26:01 --- ERROR: Database_Exception [ 1146 ]: Table 'tagging.image_names' doesn't exist [ SHOW FULL COLUMNS FROM `image_names` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-20 19:26:01 --- STRACE: Database_Exception [ 1146 ]: Table 'tagging.image_names' doesn't exist [ SHOW FULL COLUMNS FROM `image_names` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\kohana-3.2\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('image_names')
#2 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(36): Kohana_ORM->__construct()
#6 [internal function]: Controller_Tagging->action_save()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 19:37:14 --- ERROR: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Name class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-20 19:37:14 --- STRACE: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Name class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\listing.php(16): Kohana_ORM->__get('description')
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_list()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 19:39:13 --- ERROR: Database_Exception [ 1146 ]: Table 'tagging.image_name' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `image_name` ON (`image_name`.`image_id` = `image`.`id`) WHERE `image_name`.`name_id` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-20 19:39:13 --- STRACE: Database_Exception [ 1146 ]: Table 'tagging.image_name' doesn't exist [ SELECT `image`.* FROM `images` AS `image` JOIN `image_name` ON (`image_name`.`image_id` = `image`.`id`) WHERE `image_name`.`name_id` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\kohana-3.2\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Welcome->action_list()
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-20 19:41:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'image_names.name_id' in 'where clause' [ SELECT `image`.* FROM `images` AS `image` JOIN `image_names` ON (`image_names`.`image_id` = `image`.`id`) WHERE `image_names`.`name_id` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-20 19:41:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'image_names.name_id' in 'where clause' [ SELECT `image`.* FROM `images` AS `image` JOIN `image_names` ON (`image_names`.`image_id` = `image`.`id`) WHERE `image_names`.`name_id` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\kohana-3.2\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `image`....', 'Model_Image', Array)
#1 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\kohana-3.2\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Welcome->action_list()
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-20 22:03:25 --- ERROR: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Name class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-20 22:03:25 --- STRACE: Kohana_Exception [ 0 ]: The description property does not exist in the Model_Name class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(23): Kohana_ORM->__get('description')
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 22:38:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: names ~ APPPATH\views\tagging.php [ 21 ]
2012-07-20 22:38:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: names ~ APPPATH\views\tagging.php [ 21 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 21, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(24): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 22:38:46 --- ERROR: Kohana_Exception [ 0 ]: The width property does not exist in the Model_Name class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-20 22:38:46 --- STRACE: Kohana_Exception [ 0 ]: The width property does not exist in the Model_Name class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(30): Kohana_ORM->__get('width')
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 22:45:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\tagging.php [ 5 ]
2012-07-20 22:45:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\tagging.php [ 5 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 5, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 22:47:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\tagging.php [ 5 ]
2012-07-20 22:47:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\tagging.php [ 5 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 5, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-20 22:48:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: names ~ APPPATH\views\tagging.php [ 25 ]
2012-07-20 22:48:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: names ~ APPPATH\views\tagging.php [ 25 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\tagging.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 25, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(25): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Tagging->action_index()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}