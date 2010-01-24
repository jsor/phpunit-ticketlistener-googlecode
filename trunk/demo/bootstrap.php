<?php

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/../src'),
    get_include_path(),
)));

include_once 'PHPUnit/Extensions/TicketListener.php';
include_once 'PHPUnit/Extensions/TicketListener/GoogleCode.php';

?>
