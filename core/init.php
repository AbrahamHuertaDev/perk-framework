<?php

require_once ROOT . 'vendor/autoload.php';

/*foreach (new DirectoryIterator(APP . 'models/') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    	require_once APP . 'models/'. $fileInfo;
}*/

require_once APP . 'config/database.php';

foreach (new DirectoryIterator(ROOT . 'core/lib') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    	require_once ROOT . 'core/lib/'. $fileInfo;
}

foreach (new DirectoryIterator(ROOT . 'core/system') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    	require_once ROOT . 'core/system/'. $fileInfo;
}

require_once APP . 'config/app.php';
