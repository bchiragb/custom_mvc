## Inspired from codeigniter 3.0
Very lightweight, easy to handle, easy to implementation, starting from 0 level
I merge model and controller
Include database also

## Also working with SQL server
You need to install 2 dll in your php version and also enable in php.ini
1. php_sqlsrv_[php-version]_nts_x64.dll
2. php_sqlsrv_[php-version]_ts_x64.dll
eg. php_sqlsrv_73_nts_x64.dll, php_sqlsrv_73_ts_x64.dll

Then just add another connection in database.php and access that connection for CRUD operation
Also include how to add connection of sql server and how to call data


## For PHP 8.0 +
#[\AllowDynamicProperties] 
add after defined('BASEPATH') OR exit('No direct script access allowed'); or add before class 
in this files
1. system/core/URI.php
2. system/core/Router.php
3. system/core/Controller.php
4. system/core/Loader.php
5. system/database/DB_driver.php

#[\ReturnTypeWillChange]
add this before start function in this file "system/libaries/Session/drivers/Session_files_driver.php"
1. public function open($save_path, $name)
2. public function read($session_id)
3. public function write($session_id, $session_data)
4. public function close()
5. public function destroy($session_id)
6. public function gc($maxlifetime)

