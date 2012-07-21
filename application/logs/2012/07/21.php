<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-21 11:52:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\listing.php [ 10 ]
2012-07-21 11:52:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\listing.php [ 10 ]
--
#0 D:\wamp\www\kohana-3.2\application\views\listing.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 10, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(61): include('D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\koh...', Array)
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(56): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_list()
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-21 11:55:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\controller\welcome.php [ 39 ]
2012-07-21 11:55:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\controller\welcome.php [ 39 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 39, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 11:56:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\controller\welcome.php [ 39 ]
2012-07-21 11:56:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\controller\welcome.php [ 39 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 39, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 11:56:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\controller\welcome.php [ 39 ]
2012-07-21 11:56:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\controller\welcome.php [ 39 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 39, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:44:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:44:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:44:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:44:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:44:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:44:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:44:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:44:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:44:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:44:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:46:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:46:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-21 13:47:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
2012-07-21 13:47:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: nameid ~ APPPATH\classes\controller\tagging.php [ 51 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\tagging.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 51, Array)
#1 [internal function]: Controller_Tagging->action_save()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tagging))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}