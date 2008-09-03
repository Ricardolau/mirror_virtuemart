#############################################
# SQL update script for upgrading 
# from VirtueMart 1.1.x to VirtueMart 1.2.0
# $Id
#############################################

# Added the ability to add manufacturer images
ALTER TABLE `jos_vm_manufacturer` ADD `mf_thumb_image` VARCHAR( 255 ) default NULL ,
ADD `mf_full_image` VARCHAR( 255 ) default NULL ;