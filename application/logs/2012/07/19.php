<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-19 19:33:16 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-07-19 19:33:16 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-19 19:33:43 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\kohana\upload.php [ 129 ]
2012-07-19 19:33:43 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be of the type array, null given ~ SYSPATH\classes\kohana\upload.php [ 129 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\wamp\www\koh...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(12): Kohana_Validation->check()
#4 [internal function]: Controller_Welcome->action_index()
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-19 19:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcom/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-19 19:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcom/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-19 19:37:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: _FILE ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-07-19 19:37:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: _FILE ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\koh...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 19:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php/welcome/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-19 19:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php/welcome/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-19 19:38:12 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be of the type array, none given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2012-07-19 19:38:12 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be of the type array, none given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\wamp\www\koh...', 146, Array)
#1 [internal function]: Kohana_Upload::type(Array)
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(13): Kohana_Validation->check()
#4 [internal function]: Controller_Welcome->action_index()
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-19 20:03:35 --- ERROR: ErrorException [ 1 ]: Class 'From' not found ~ APPPATH\views\welcome.php [ 13 ]
2012-07-19 20:03:35 --- STRACE: ErrorException [ 1 ]: Class 'From' not found ~ APPPATH\views\welcome.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-19 20:04:17 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be of the type array, string given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2012-07-19 20:04:17 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::type() must be of the type array, string given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 D:\wamp\www\kohana-3.2\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\wamp\www\koh...', 146, Array)
#1 [internal function]: Kohana_Upload::type('jpg', 'png', 'gif')
#2 D:\wamp\www\kohana-3.2\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(13): Kohana_Validation->check()
#4 [internal function]: Controller_Welcome->action_index()
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-19 20:06:29 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\kohana\upload.php [ 87 ]
2012-07-19 20:06:29 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(): The second argument to copy() function cannot be a directory ~ SYSPATH\classes\kohana\upload.php [ 87 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'D:\wamp\www\koh...', 87, Array)
#1 D:\wamp\www\kohana-3.2\system\classes\kohana\upload.php(87): move_uploaded_file('D:\wamp\tmp\php...', 'D:\wamp\www\koh...')
#2 D:\wamp\www\kohana-3.2\application\classes\controller\welcome.php(14): Kohana_Upload::save(Array, '', 'D:\wamp\www\koh...')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\wamp\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-19 20:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-19 20:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-19 20:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-19 20:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\wamp\www\kohana-3.2\index.php(109): Kohana_Request->execute()
#1 {main}