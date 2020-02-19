# Prettier Apache default pages

Better looking error/default pages for Apache, including directory listings. Icons and ideas from [Apaxy](https://github.com/oupala/apaxy), which is a more complete and maintained theme.

## Changing Apache's pages
Setting the global error pages can be done by adding to a configuration file, e.g. `localized-error-pages.conf':

	Alias /error /var/www/default/htdocs/error
	ErrorDocument 401 /error/401.php
	ErrorDocument 403 /error/403.php
	ErrorDocument 404 /error/404.php
	ErrorDocument 500 /error/500.php

Add the new theme to a conf file (I suggested creating a new one):

	Alias /server-theme /var/www/default/htdocs/theme

## Nicer directory listings

See the [Apaxy htaccess example](https://github.com/oupala/apaxy/blob/develop/apaxy/htaccess.txt), or the two options in
the `theme` directory for ascending or descending file sorting.