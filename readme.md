Fat Zebra ZenCart Plugin v2.0
=============================
2026-01-01
Upgraded to be compatible with Zen Cart 2.1.0 and 2.2.0 with PHP 8.1 to PHP 8.4
Upgraded by OldNGrey BMH

upgraded from:
--------------

Fat Zebra ZenCart Plugin v1.1
=============================
Compatible with Zen Cart 1.5.0 (and presumably above)

Developed by Matthew Savage - Fat Zebra

https://github.com/fatzebra/ZenCart-Plugin

License
-------
Released under the GPLv3. Please see license.txt

Installation
------------

1. Using your FTP Client or SSH/SCP, copy the directories on **zencart_directory** to your ZenCart root.
2. Log into ZenCart Admin/Management, and click on Modules -> Payment
3. Click on **Fat Zebra**, then click **Install** on the right hand side.
4. Enter your account details.

Default credentials are provided, however if you wish to obtain a free Sandbox account please [Contact Fat Zebra](https://www.fatzebra.com.au/contact)

Uninstalling
------------

1. Log into ZenCart Admin/Management, and click on Modules -> Payment
2. Click on **Fat Zebra**, then click **Remove**.
3. Click **Remove** to confirm.
4. Delete the files listed below.
5. To remove all configuration items from the database run the following query on your ZenCart database:

```sql
  delete from configuration where configuration_key like '%FATZEBRA%';
```

Files
-----

* includes/modules/payment/fatzebra.php
* includes/languages/english/modules/payment/fatzebra.php
** includes/languages/english/modules/payment/lang.fatzebra.php

Requirements
------------
** PHP 8.1 as miniumum level to PHP 8.4
* An SSL certificate configured for your website
* cURL with SSL support compiled into PHP
* A Fat Zebra account (and of course, an Internet Merchant Facility setup for this account)

Testing
-------

While in Test Mode you can use any of the card numbers detailed on the [Fat Zebra support site](https://www.fatzebra.com.au/support/testing).

Support
-------

If you have problems with this plugin please create a new [Github Issue](https://github.com/fatzebra/ZenCart-Plugin/issues), or email support@fatzebra.com.au explaining the problem you are experiencing.

Release Notes
-------------
1.0 - Initial Release
1.1 - Fixed bug with checkout not handling declined cards properly
2.0 - Upgraded for ZenCart V2.1.0 and 2.2.0 and PHP 8.1 to PHP 8.4. Included some improved checking and Admin information bases on the SecurePay API in Zen Cart plugins (https://www.zen-cart.com/downloads.php?do=file&id=2144) or GitHub (https://github.com/OldNGreyBMR/securepay-xml)
