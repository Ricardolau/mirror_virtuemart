<?php
// Joomla Security Check - no direct access to this file 
// Prevents File Path Exposure
defined('_JEXEC') or die('Restricted access');

// load an instance of the VmStoreTemplate framework
$vmStoreTemplate = VmStoreTemplate::getInstance('joomla');
?>

<!DOCTYPE html>
<html lang="<?php echo $vmStoreTemplate->getWebsiteLanguageOrientation(); ?>"
      dir="<?php echo $vmStoreTemplate->getWebsiteDirection(); ?>">
<head>
    <?php echo $vmStoreTemplate->getWebsiteHeadArea(); ?>
</head>
<body class="d-flex flex-column">

<div class="container">
    <h1>Hallo Eugen</h1>
</div>

</body>
</html>
