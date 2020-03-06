<?php
switch ($_SERVER['PATH_INFO']) {
    case '/env' :
        echo @$_REQUEST['version'];
        break;
    case '/fetch' :
        echo file_get_contents(@$_REQUEST['url']);
        break;
    default:
        echo '<pre>';
        print_r($_SERVER);
        print_r($_ENV);
}
