<?php
/**
 * Generated configuration file
 * Generated by: phpMyAdmin 5.2.1 setup script
 * Date: Sat, 08 Mar 2025 22:03:49 +0000
 */

/* Servers configuration */
$i = 0;

/* Server: mariadb [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'mariadb';
$cfg['Servers'][$i]['host'] = 'mariadb';
$cfg['Servers'][$i]['port'] = 3306;
$cfg['Servers'][$i]['socket'] = '';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['ssl'] = false;

/* End of servers configuration */

$cfg['SendErrorReports'] = 'always';
$cfg['FirstDayOfCalendar'] = 1;
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['blowfish_secret'] = \sodium_hex2bin('0092c17f9ef691ee0d409cf213912b0a795a37ef79a5a70975d62ecf23d1ab43');
$cfg['DefaultLang'] = 'en';
$cfg['ServerDefault'] = 1;