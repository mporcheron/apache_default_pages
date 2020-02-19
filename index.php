<?php

\http_response_code (404);

include '/www/default/htdocs/_header.php';
print 'There is no website configured for <em>'. $_SERVER['HTTP_HOST'] .'</em>';
include '/www/default/htdocs/_footer.php';
