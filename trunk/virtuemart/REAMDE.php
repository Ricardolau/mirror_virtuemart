<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id$
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*
* http://virtuemart.net
*/
?>
<pre>
****************
VirtueMart
Version: 0.9.0
****************

based on mambo-phpShop 1.2 stable (patch level 3)

Complete Package for Mambo >= 4.5.1 and Joomla 1.0.x

You can't use this software on an earlier Mambo version than 4.5.1 (e.g. Mambo 4.5 1.0.9)
without running into serious problems.

Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
License: http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
VirtueMart is free software. This version may have been modified pursuant
to the GNU General Public License, and as distributed it includes or
is derivative of works licensed under the GNU General Public License or
other free or open source software licenses.

Community Home: http://virtuemart.net

****************

##########################
Package Contents:
##########################

 * 1 Component (com_phpshop_0.9.0.tar.gz)
   INSTALLATION REQUIRED!
   
 * 1 Main module (mod_phpshop_0.9.0.tar.gz)
   INSTALLATION REQUIRED!
   
 * 8 additional Modules
 
 * 2 Mambots 
   - 1 SearchBot for Integration into Mambo Main Search (phpshop.searchbot.tar.gz), 
   - 1 Content Mambot for displaying product details in Mambo content (mosproductsnap.tar.gz)

##########################
   ABOUT
##########################
VirtueMart (formerly known as "mambo-phpShop") is an Online-Shop / Shopping Cart Web-Application.
It's a Component (means plugin / extension) for a Content Management System called Joomla / Mambo
and can't be used without Joomla / Mambo. It installs fairly easy using the automatic installers. 
It's intended for use in small / mid-sized Online businesses / Online-Shops. 
So every user who wants to build up a Online Store can use this component for selling something to customers.

This package is for New Installations ONLY. 
You need a working Joomla/Mambo Installation. 
You can get your copy  of Joomla from http://joomla.org

There's a separate Package available for
   * Manual Installations and Updates

This package contains some code from the original 0.8.0 Edikon Corp. phpShop distribution available at www.phpshop.org

This package was tested on 
- Mambo 4.5.1a
- Mambo 4.5.2.3
- Joomla 1.0.0 / 1.0.1

 -- IMPORTANT --
Please note that module and component SHOULD be used together! 
The thing is that you can only access all areas of the component via the mambo-phpShop Main Module links.

You can surely create a new Menu Item linking to mambo-phpShop, but then you must Publish the mambo-phpShop module.


##########################
   INSTALLATION
##########################
The installation is really easy - thanks to the
automatic installer!
You don't need to unpack any of the archives in this complete package!

1. If you have unpacked this archive (virtuemart_x.x_COMPLETE_PACKAGE.zip), 
	you see a lot of other archives.
	- com_phpshop_x.xxx.tar.gz, 
	- some files beginning with mod_*.tar.gz 
	- 2 other Packages (these are the so-called Mambots).
    
2. Login to the Mambo/Joomla Administrator.
	
	Now go to "Installers" => "Components"
	or - if you are using Mambo - "Components" --> "Install/Uninstall".
	
	You can see an upload form now.
	Select the file 
	- com_phpshop_x.xx.tar.gz 
	and click 'Upload Component'
	
	If everything is ok, you should see a "Welcome ..." Screen.
	Choose you way of installation to finish the component installation.
	
3. Now we have to install the Main module, which will help you to browse
	your categories and products.
	Go to "Installers" => "Modules"
	(or - if you're using Mambo - "Modules" => "Install/Uninstall"), 
	and select the file 
	- mod_phpshop_x.xx.tar.gz 
	and then click 'Upload module'.
    
4. The module is installed, but it still is not published!
	To publish that module on your site, you must go to the list of 
	your all modules. So now head on to 
	"Modules" => "Site Modules".
	You should somewhere see a module entry for "Virtuemart Module"
	with "mod_phpshop" at the end of that row.
	If necessary, browse to the next page of the module list.
	If you've found the module, please select it's checkbox and click
	on "Edit" in the toolbar.
	Make your settings and don't forget to select "Published? - Yes".

       Note:
       Since unpublished modules and components appear by default on 
       the last page of  the modules listed, you may need to browse component 
       and module pages until you find the VirtueMart module.
       
	Now Save - and: Done.   
    
       Note: As long as the VirtueMart main module is NOT published, VirtueMart can't be used properly.

        IF successful, the installer will have created the following directory structure:
        
         /components/com_phpshop
         - contains code for non-administrative surfing and ordering
         
         /components/com_phpshop/shop_image
         /components/com_phpshop/shop_image/vendor
         - contains the vendor images
         
         /components/com_phpshop/js
         - contains JavaScript Files
         
         /components/com_phpshop/shop_image/product
         - contains the product images
         
         /components/com_phpshop/shop_image/ps_image
         - contains general administration/shop images
         
         /components/com_phpshop/shop_image/stars
         
         /administrator/components/com_phpshop
         - contains config files and the main phpshop-parser
         
         /administrator/components/com_phpshop/classes
         - contains all the classes (formerly the /lib/*.inc - directories)
         
         /administrator/components/com_phpshop/html
         - contains all the "ihtml" files (formerly the /html - directories)
         
         /administrator/components/com_phpshop/html/templates
         
         /administrator/components/com_phpshop/languages
         - contains the language files
          
         /modules/dtree
         - contains JS files and images for dTree usage.
         
   
##########################
   UNINSTALL
##########################

1. Go to "Installers" => "Components" (or "Modules")
	( or - if you're using Mambo - "Components" ( or "Modules" ) => "Install/Uninstall"
        
2. Now select 'VirtueMart' ( or for the module: 'mod_phpshop' )
	and click on 'Delete'.
   
    Done.
    
-----------------------------------------------------

For updates / changes / hints please read the ChangeLog!

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


Developers, Documentation Writers, Helpers and Coders are welcome to help us. 
Please contact me: soeren@mambo-phpshop.net

This VirtueMart component can be developed much further...
