<?php
// Define The Namespace For Our Library
namespace VmStoreTemplate;

// Joomla Security Check - no direct access to this file
// Prevents File Path Exposure
defined('_JEXEC') or die('Restricted access');

class VmStoreTemplate
{
    /**
     * @var VmStoreTemplate[]
     * @since 3.8.4
     */
    protected static $instance = array ();

    /**
     * Return an instance of the Class "VmStoreTemplate"
     *
     * @param string $forPlatformName (cms name like 'joomla' or 'wordpress')
     *
     * @return VmStoreTemplate
     *
     * @since 3.8.4
     */
    public static function getInstance ($forPlatformName = 'joomla')
    {
        $forPlatformName = strtolower($forPlatformName);

        if (!isset(static::$instance[$forPlatformName]))
        {
            static::$instance[$forPlatformName] = new VmStoreTemplate($forPlatformName);
        }

        return static::$instance[$forPlatformName];
    }

    /**
     * VmStoreTemplate constructor.
     *
     * @param string $platformName
     *
     * @since 3.8.4
     */
    private function __construct ($platformName)
    {
    }

    /**
     * Returns A Setting Value From The VirtueMart Configuration
     *
     * @param $settingName
     * @param $defaultValue
     *
     * @return string \Value
     *
     * @since 3.8
     */
    public function getSettingFromVmConfig ($settingName, $defaultValue)
    {
        // load virtuemart config if it doesn't exist already
        if (!class_exists('VmConfig'))
        {
            require(JPATH_ADMINISTRATOR . '/components/com_virtuemart/helpers/config.php');
        }

        return \VmConfig::get($settingName, $defaultValue);
    }
}
