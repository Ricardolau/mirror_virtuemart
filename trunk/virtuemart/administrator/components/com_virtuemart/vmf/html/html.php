<?php
/**
 * @package     Joomla.Libraries
 * @subpackage  HTML
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;


/**
 * Utility class for all HTML drawing classes
 *
 * @since  1.5
 */
abstract class vHtml extends vBasicModel
{
	/**
	 * Option values related to the generation of HTML output. Recognized
	 * options are:
	 *     fmtDepth, integer. The current indent depth.
	 *     fmtEol, string. The end of line string, default is linefeed.
	 *     fmtIndent, string. The string to use for indentation, default is
	 *     tab.
	 *
	 * @var    array
	 * @since  1.5
	 */
	public static $formatOptions = array('format.depth' => 0, 'format.eol' => "\n", 'format.indent' => "\t");

	/**
	 * An array to hold included paths
	 *
	 * @var    array
	 * @since  1.5
	 */
	//protected static $includePaths = array();

	/**
	 * An array to hold method references
	 *
	 * @var    array
	 * @since  1.6
	 */
	protected static $registry = array();

	/**
	 * Method to extract a key
	 *
	 * @param   string  $key  The name of helper method to load, (prefix).(class).function
	 *                        prefix and class are optional and can be used to load custom html helpers.
	 *
	 * @return  array  Contains lowercase key, prefix, file, function.
	 *
	 * @since   1.6
	 */
	protected static function extract($key)
	{
		$key = preg_replace('#[^A-Z0-9_\.]#i', '', $key);

		// Check to see whether we need to load a helper file
		$parts = explode('.', $key);

		$prefix = (count($parts) == 3 ? array_shift($parts) : 'vHtml');
		$file = (count($parts) == 2 ? array_shift($parts) : '');
		$func = array_shift($parts);

		return array(strtolower($prefix . '.' . $file . '.' . $func), $prefix, $file, $func);
	}

	/**
	 * Class loader method
	 *
	 * Additional arguments may be supplied and are passed to the sub-class.
	 * Additional include paths are also able to be specified for third-party use
	 *
	 * @param   string  $key  The name of helper method to load, (prefix).(class).function
	 *                        prefix and class are optional and can be used to load custom
	 *                        html helpers.
	 *
	 * @return  mixed  vHtml::call($function, $args) or False on error
	 *
	 * @since   1.5
	 * @throws  InvalidArgumentException
	 */
	public static function _($key) {
		list($key, $prefix, $file, $func) = static::extract($key);

		if (array_key_exists($key, static::$registry)) {
			$function = static::$registry[$key];
			$args = func_get_args();

			// Remove function name from arguments
			array_shift($args);

			return static::call($function, $args);
		}

		$className = $prefix . ucfirst($file);

		if (!class_exists($className)) {
			self::loader($file,'html',$className);
		}

		$toCall = array($className, $func);

		if (is_callable($toCall)) {
			static::register($key, $toCall);
			$args = func_get_args();

			// Remove function name from arguments
			array_shift($args);

			return static::call($toCall, $args);
		} else {
			vmTrace('Cant find class '.$className.', function '.$func.' file '.$file);
			//throw new InvalidArgumentException(sprintf('vHtml %s::%s not found.', $className, $func), 500);
		}
	}

	/**
	 * Registers a function to be called with a specific key
	 *
	 * @param   string  $key       The name of the key
	 * @param   string  $function  Function or method
	 *
	 * @return  boolean  True if the function is callable
	 *
	 * @since   1.6
	 */
	public static function register($key, $function)
	{
		list($key) = static::extract($key);

		if (is_callable($function))
		{
			static::$registry[$key] = $function;

			return true;
		}

		return false;
	}

	/**
	 * Removes a key for a method from registry.
	 *
	 * @param   string  $key  The name of the key
	 *
	 * @return  boolean  True if a set key is unset
	 *
	 * @since   1.6
	 */
	public static function unregister($key)
	{
		list($key) = static::extract($key);

		if (isset(static::$registry[$key]))
		{
			unset(static::$registry[$key]);

			return true;
		}

		return false;
	}

	/**
	 * Test if the key is registered.
	 *
	 * @param   string  $key  The name of the key
	 *
	 * @return  boolean  True if the key is registered.
	 *
	 * @since   1.6
	 */
	public static function isRegistered($key)
	{
		list($key) = static::extract($key);

		return isset(static::$registry[$key]);
	}

	/**
	 * Function caller method
	 *
	 * @param   callable  $function  Function or method to call
	 * @param   array     $args      Arguments to be passed to function
	 *
	 * @return  mixed   Function result or false on error.
	 *
	 * @see     http://php.net/manual/en/function.call-user-func-array.php
	 * @since   1.6
	 * @throws  InvalidArgumentException
	 */
	protected static function call($function, $args)
	{
		if (!is_callable($function))
		{
			throw new InvalidArgumentException('Function not supported', 500);
		}

		// PHP 5.3 workaround
		$temp = array();

		foreach ($args as &$arg)
		{
			$temp[] = &$arg;
		}

		return call_user_func_array($function, $temp);
	}

	/**
	 * Write a <a></a> element
	 *
	 * @param   string  $url      The relative URL to use for the href attribute
	 * @param   string  $text     The target attribute to use
	 * @param   array   $attribs  An associative array of attributes to add
	 *
	 * @return  string  <a></a> string
	 *
	 * @since   1.5
	 */
	public static function link($url, $text, $attribs = null)
	{
		if (is_array($attribs))
		{
			$attribs = JArrayHelper::toString($attribs);
		}

		return '<a href="' . $url . '" ' . $attribs . '>' . $text . '</a>';
	}

	/**
	 * Write a <iframe></iframe> element
	 *
	 * @param   string  $url       The relative URL to use for the src attribute.
	 * @param   string  $name      The target attribute to use.
	 * @param   array   $attribs   An associative array of attributes to add.
	 * @param   string  $noFrames  The message to display if the iframe tag is not supported.
	 *
	 * @return  string  <iframe></iframe> element or message if not supported.
	 *
	 * @since   1.5
	 */
	public static function iframe($url, $name, $attribs = null, $noFrames = '')
	{
		if (is_array($attribs))
		{
			$attribs = JArrayHelper::toString($attribs);
		}

		return '<iframe src="' . $url . '" ' . $attribs . ' name="' . $name . '">' . $noFrames . '</iframe>';
	}

	/**
	 * Compute the files to be included
	 *
	 * @param   string   $folder          folder name to search into (images, css, js, ...).
	 * @param   string   $file            path to file.
	 * @param   boolean  $relative        path to file is relative to /media folder  (and searches in template).
	 * @param   boolean  $detect_browser  detect browser to include specific browser files.
	 * @param   boolean  $detect_debug    detect debug to include compressed files if debug is on.
	 *
	 * @return  array    files to be included.
	 *
	 * @see     JBrowser
	 * @since   1.6
	 */
	protected static function includeRelativeFiles($folder, $file, $relative, $detect_browser, $detect_debug)
	{
		// If http is present in filename
		if (strpos($file, 'http') === 0 || strpos($file, '//') === 0)
		{
			$includes = array($file);
		}
		else
		{
			if(!class_exists('vFile')) require(VMPATH_ADMIN .'/vmf/filesystem/vfile.php');
			// Extract extension and strip the file
			$strip = vFile::stripExt($file);
			$ext   = vFile::getExt($file);

			// Prepare array of files
			$includes = array();

			// Detect browser and compute potential files
			/*if ($detect_browser)
			{
				$navigator = JBrowser::getInstance();
				$browser = $navigator->getBrowser();
				$major = $navigator->getMajor();
				$minor = $navigator->getMinor();

				// Try to include files named filename.ext, filename_browser.ext, filename_browser_major.ext, filename_browser_major_minor.ext
				// where major and minor are the browser version names
				$potential = array($strip, $strip . '_' . $browser,  $strip . '_' . $browser . '_' . $major,
					$strip . '_' . $browser . '_' . $major . '_' . $minor);
			}
			else
			{*/
				$potential = array($strip);
			//}

			// If relative search in template directory or media directory
			if ($relative)
			{
				// Get the template
				$template = vFactory::getApplication()->getTemplate();

				// For each potential files
				foreach ($potential as $strip)
				{
					$files = array();

					// Detect debug mode
					if ($detect_debug && vFactory::getConfig()->get('debug'))
					{
						/*
						 * Detect if we received a file in the format name.min.ext
						 * If so, strip the .min part out, otherwise append -uncompressed
						 */
						if (strrpos($strip, '.min', '-4'))
						{
							$position = strrpos($strip, '.min', '-4');
							$filename = str_replace('.min', '.', $strip, $position);
							$files[]  = $filename . $ext;
						}
						else
						{
							$files[] = $strip . '-uncompressed.' . $ext;
						}
					}

					$files[] = $strip . '.' . $ext;

					/*
					 * Loop on 1 or 2 files and break on first found.
					 * Add the content of the MD5SUM file located in the same folder to url to ensure cache browser refresh
					 * This MD5SUM file must represent the signature of the folder content
					 */
					foreach ($files as $file)
					{
						// If the file is in the template folder
						$path = VMPATH_THEMES . "/$template/$folder/$file";

						if (file_exists($path))
						{
							$md5 = dirname($path) . '/MD5SUM';
							$includes[] = vUri::base(true) . "/templates/$template/$folder/$file" .
								(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

							break;
						}
						else
						{
							// If the file contains any /: it can be in an media extension subfolder
							if (strpos($file, '/'))
							{
								// Divide the file extracting the extension as the first part before /
								list($extension, $file) = explode('/', $file, 2);

								// If the file yet contains any /: it can be a plugin
								if (strpos($file, '/'))
								{
									// Divide the file extracting the element as the first part before /
									list($element, $file) = explode('/', $file, 2);

									// Try to deal with plugins group in the media folder
									$path = VMPATH_ROOT . "/media/$extension/$element/$folder/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/media/$extension/$element/$folder/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}

									// Try to deal with classical file in a a media subfolder called element
									$path = VMPATH_ROOT . "/media/$extension/$folder/$element/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/media/$extension/$folder/$element/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}

									// Try to deal with system files in the template folder
									$path = VMPATH_THEMES . "/$template/$folder/system/$element/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/templates/$template/$folder/system/$element/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}

									// Try to deal with system files in the media folder
									$path = VMPATH_ROOT . "/media/system/$folder/$element/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/media/system/$folder/$element/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}
								}
								else
								{
									// Try to deals in the extension media folder
									$path = VMPATH_ROOT . "/media/$extension/$folder/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/media/$extension/$folder/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}

									// Try to deal with system files in the template folder
									$path = VMPATH_THEMES . "/$template/$folder/system/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/templates/$template/$folder/system/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}

									// Try to deal with system files in the media folder
									$path = VMPATH_ROOT . "/media/system/$folder/$file";

									if (file_exists($path))
									{
										$md5 = dirname($path) . '/MD5SUM';
										$includes[] = vUri::root(true) . "/media/system/$folder/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

										break;
									}
								}
							}
							// Try to deal with system files in the media folder
							else
							{
								$path = VMPATH_ROOT . "/media/system/$folder/$file";

								if (file_exists($path))
								{
									$md5 = dirname($path) . '/MD5SUM';
									$includes[] = vUri::root(true) . "/media/system/$folder/$file" .
											(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

									break;
								}
							}
						}
					}
				}
			}
			// If not relative and http is not present in filename
			else
			{
				foreach ($potential as $strip)
				{
					$files = array();

					// Detect debug mode
					if ($detect_debug && vFactory::getConfig()->get('debug'))
					{
						/*
						 * Detect if we received a file in the format name.min.ext
						 * If so, strip the .min part out, otherwise append -uncompressed
						 */
						if (strrpos($strip, '.min', '-4'))
						{
							$position = strrpos($strip, '.min', '-4');
							$filename = str_replace('.min', '.', $strip, $position);
							$files[]  = $filename . $ext;
						}
						else
						{
							$files[] = $strip . '-uncompressed.' . $ext;
						}
					}

					$files[] = $strip . '.' . $ext;

					/*
					 * Loop on 1 or 2 files and break on first found.
					 * Add the content of the MD5SUM file located in the same folder to url to ensure cache browser refresh
					 * This MD5SUM file must represent the signature of the folder content
					 */
					foreach ($files as $file)
					{
						$path = VMPATH_ROOT . "/$file";

						if (file_exists($path))
						{
							$md5 = dirname($path) . '/MD5SUM';
							$includes[] = vUri::root(true) . "/$file" .
								(file_exists($md5) ? ('?' . file_get_contents($md5)) : '');

							break;
						}
					}
				}
			}
		}

		return $includes;
	}

	/**
	 * Write a <img></img> element
	 *
	 * @param   string   $file      The relative or absolute URL to use for the src attribute.
	 * @param   string   $alt       The alt text.
	 * @param   mixed    $attribs   String or associative array of attribute(s) to use.
	 * @param   boolean  $relative  Path to file is relative to /media folder (and searches in template).
	 * @param   mixed    $path_rel  Return html tag without (-1) or with file computing(false). Return computed path only (true).
	 *
	 * @return  string
	 *
	 * @since   1.5
	 */
	public static function image($file, $alt, $attribs = null, $relative = false, $path_rel = false)
	{
		if ($path_rel !== -1)
		{
			$includes = static::includeRelativeFiles('images', $file, $relative, false, false);
			$file = count($includes) ? $includes[0] : null;
		}

		// If only path is required
		if ($path_rel)
		{
			return $file;
		}
		else
		{
			return '<img src="' . $file . '" alt="' . $alt . '" '
			. trim((is_array($attribs) ? JArrayHelper::toString($attribs) : $attribs) . ' /')
			. '>';
		}
	}

	/**
	 * Write a <link rel="stylesheet" style="text/css" /> element
	 *
	 * @param   string   $file            path to file
	 * @param   array    $attribs         attributes to be added to the stylesheet
	 * @param   boolean  $relative        path to file is relative to /media folder
	 * @param   boolean  $path_only       return the path to the file only
	 * @param   boolean  $detect_browser  detect browser to include specific browser css files
	 *                                    will try to include file, file_*browser*, file_*browser*_*major*, file_*browser*_*major*_*minor*
	 *                                    <table>
	 *                                       <tr><th>Navigator</th>                  <th>browser</th>	<th>major.minor</th></tr>
	 *
	 *                                       <tr><td>Safari 3.0.x</td>               <td>konqueror</td>	<td>522.x</td></tr>
	 *                                       <tr><td>Safari 3.1.x and 3.2.x</td>     <td>konqueror</td>	<td>525.x</td></tr>
	 *                                       <tr><td>Safari 4.0 to 4.0.2</td>        <td>konqueror</td>	<td>530.x</td></tr>
	 *                                       <tr><td>Safari 4.0.3 to 4.0.4</td>      <td>konqueror</td>	<td>531.x</td></tr>
	 *                                       <tr><td>iOS 4.0 Safari</td>             <td>konqueror</td>	<td>532.x</td></tr>
	 *                                       <tr><td>Safari 5.0</td>                 <td>konqueror</td>	<td>533.x</td></tr>
	 *
	 *                                       <tr><td>Google Chrome 1.0</td>          <td>konqueror</td>	<td>528.x</td></tr>
	 *                                       <tr><td>Google Chrome 2.0</td>          <td>konqueror</td>	<td>530.x</td></tr>
	 *                                       <tr><td>Google Chrome 3.0 and 4.x</td>  <td>konqueror</td>	<td>532.x</td></tr>
	 *                                       <tr><td>Google Chrome 5.0</td>          <td>konqueror</td>	<td>533.x</td></tr>
	 *
	 *                                       <tr><td>Internet Explorer 5.5</td>      <td>msie</td>		<td>5.5</td></tr>
	 *                                       <tr><td>Internet Explorer 6.x</td>      <td>msie</td>		<td>6.x</td></tr>
	 *                                       <tr><td>Internet Explorer 7.x</td>      <td>msie</td>		<td>7.x</td></tr>
	 *                                       <tr><td>Internet Explorer 8.x</td>      <td>msie</td>		<td>8.x</td></tr>
	 *
	 *                                       <tr><td>Firefox</td>                    <td>mozilla</td>	<td>5.0</td></tr>
	 *                                    </table>
	 *                                    a lot of others
	 * @param   boolean  $detect_debug    detect debug to search for compressed files if debug is on
	 *
	 * @return  mixed  nothing if $path_only is false, null, path or array of path if specific css browser files were detected
	 *
	 * @see     JBrowser
	 * @since   1.5
	 */
	public static function stylesheet($file, $attribs = array(), $relative = false, $path_only = false, $detect_browser = true, $detect_debug = true)
	{
		$includes = static::includeRelativeFiles('css', $file, $relative, $detect_browser, $detect_debug);

		// If only path is required
		if ($path_only)
		{
			if (count($includes) == 0)
			{
				return null;
			}
			elseif (count($includes) == 1)
			{
				return $includes[0];
			}
			else
			{
				return $includes;
			}
		}
		// If inclusion is required
		else
		{
			$document = vFactory::getDocument();

			foreach ($includes as $include)
			{
				$document->addStylesheet($include, 'text/css', null, $attribs);
			}
		}
	}

	/**
	 * Write a <script></script> element
	 *
	 * @param   string   $file            path to file.
	 * @param   boolean  $framework       load the JS framework.
	 * @param   boolean  $relative        path to file is relative to /media folder.
	 * @param   boolean  $path_only       return the path to the file only.
	 * @param   boolean  $detect_browser  detect browser to include specific browser js files.
	 * @param   boolean  $detect_debug    detect debug to search for compressed files if debug is on.
	 *
	 * @return  mixed  nothing if $path_only is false, null, path or array of path if specific js browser files were detected.
	 *
	 * @see     vHtml::stylesheet()
	 * @since   1.5
	 */
	public static function script($file, $framework = false, $relative = false, $path_only = false, $detect_browser = true, $detect_debug = true)
	{
		vmJsApi::addJScript('/media/system/js/'.$file);

		// Include MooTools framework
		/*if ($framework)
		{
			static::_('behavior.framework');
		}*/

		/*$includes = static::includeRelativeFiles('js', $file, $relative, $detect_browser, $detect_debug);

		// If only path is required
		if ($path_only)
		{
			if (count($includes) == 0)
			{
				return null;
			}
			elseif (count($includes) == 1)
			{
				return $includes[0];
			}
			else
			{
				return $includes;
			}
		}
		// If inclusion is required
		else
		{
			$document = vFactory::getDocument();

			foreach ($includes as $include)
			{
				$document->addScript($include);
			}
		}*/
	}

	/**
	 * Set format related options.
	 *
	 * Updates the formatOptions array with all valid values in the passed array.
	 *
	 * @param   array  $options  Option key/value pairs.
	 *
	 * @return  void
	 *
	 * @see     vHtml::$formatOptions
	 * @since   1.5
	 */
	public static function setFormatOptions($options)
	{
		foreach ($options as $key => $val)
		{
			if (isset(static::$formatOptions[$key]))
			{
				static::$formatOptions[$key] = $val;
			}
		}
	}

	/**
	 * Returns formated date according to a given format and time zone.
	 *
	 * @param   string   $input      String in a format accepted by date(), defaults to "now".
	 * @param   string   $format     The date format specification string (see {@link PHP_MANUAL#date}).
	 * @param   mixed    $tz         Time zone to be used for the date.  Special cases: boolean true for user
	 *                               setting, boolean false for server setting.
	 * @param   boolean  $gregorian  True to use Gregorian calendar.
	 *
	 * @return  string    A date translated by the given format and time zone.
	 *
	 * @see     strftime
	 * @since   1.5
	 */
	public static function date($input = 'now', $format = null, $tz = true, $gregorian = false)
	{
		// Get some system objects.
		$config = vFactory::getConfig();
		$user = vFactory::getUser();

		// UTC date converted to user time zone.
		if ($tz === true)
		{
			// Get a date object based on UTC.
			$date = vFactory::getDate($input, 'UTC');

			// Set the correct time zone based on the user configuration.
			$date->setTimeZone(new DateTimeZone($user->getParam('timezone', $config->get('offset'))));
		}
		// UTC date converted to server time zone.
		elseif ($tz === false)
		{
			// Get a date object based on UTC.
			$date = vFactory::getDate($input, 'UTC');

			// Set the correct time zone based on the server configuration.
			$date->setTimeZone(new DateTimeZone($config->get('offset')));
		}
		// No date conversion.
		elseif ($tz === null)
		{
			$date = vFactory::getDate($input);
		}
		// UTC date converted to given time zone.
		else
		{
			// Get a date object based on UTC.
			$date = vFactory::getDate($input, 'UTC');

			// Set the correct time zone based on the server configuration.
			$date->setTimeZone(new DateTimeZone($tz));
		}

		// If no format is given use the default locale based format.
		if (!$format)
		{
			$format = vmText::_('DATE_FORMAT_LC1');
		}
		// $format is an existing language key
		elseif (vFactory::getLanguage()->hasKey($format))
		{
			$format = vmText::_($format);
		}

		if ($gregorian)
		{
			return $date->format($format, true);
		}
		else
		{
			return $date->calendar($format, true);
		}
	}

	/**
	 * Creates a tooltip with an image as button
	 *
	 * @param   string  $tooltip  The tip string.
	 * @param   mixed   $title    The title of the tooltip or an associative array with keys contained in
	 *                            {'title','image','text','href','alt'} and values corresponding to parameters of the same name.
	 * @param   string  $image    The image for the tip, if no text is provided.
	 * @param   string  $text     The text for the tip.
	 * @param   string  $href     An URL that will be used to create the link.
	 * @param   string  $alt      The alt attribute for img tag.
	 * @param   string  $class    CSS class for the tool tip.
	 *
	 * @return  string
	 *
	 * @since   1.5
	 */
	public static function tooltip($tooltip, $title = '', $image = 'tooltip.png', $text = '', $href = '', $alt = 'Tooltip', $class = 'hasTooltip')
	{
		if (is_array($title))
		{
			foreach (array('image', 'text', 'href', 'alt', 'class') as $param)
			{
				if (isset($title[$param]))
				{
					$$param = $title[$param];
				}
			}

			if (isset($title['title']))
			{
				$title = $title['title'];
			}
			else
			{
				$title = '';
			}
		}

		if (!$text)
		{
			$alt = vRequest::vmSpecialChars($alt);
			$text = static::image($image, $alt, null, true);
		}

		if ($href)
		{
			$tip = '<a href="' . $href . '">' . $text . '</a>';
		}
		else
		{
			$tip = $text;
		}

		if ($class == 'hasTip')
		{
			// Still using MooTools tooltips!
			$tooltip = vRequest::vmSpecialChars($tooltip);

			if ($title)
			{
				$title = vRequest::vmSpecialChars($title);
				$tooltip = $title . '::' . $tooltip;
			}
		}
		else
		{
			$tooltip = self::tooltipText($title, $tooltip, 0);
		}

		return '<span class="' . $class . '" title="' . $tooltip . '">' . $tip . '</span>';
	}

	/**
	 * Converts a double colon seperated string or 2 separate strings to a string ready for bootstrap tooltips
	 *
	 * @param   string  $title      The title of the tooltip (or combined '::' separated string).
	 * @param   string  $content    The content to tooltip.
	 * @param   int     $translate  If true will pass texts through vmText.
	 * @param   int     $escape     If true will pass texts through htmlspecialchars.
	 *
	 * @return  string  The tooltip string
	 *
	 * @since   3.1.2
	 */
	public static function tooltipText($title = '', $content = '', $translate = 1, $escape = 1)
	{
		// Initialise return value.
		$result = '';

		// Don't process empty strings
		if ($content != '' || $title != '')
		{
			// Split title into title and content if the title contains '::' (old Mootools format).
			if ($content == '' && !(strpos($title, '::') === false))
			{
				list($title, $content) = explode('::', $title, 2);
			}

			// Pass texts through vmText if required.
			if ($translate)
			{
				$title = vmText::_($title);
				$content = vmText::_($content);
			}

			// Use only the content if no title is given.
			if ($title == '')
			{
				$result = $content;
			}
			// Use only the title, if title and text are the same.
			elseif ($title == $content)
			{
				$result = '<strong>' . $title . '</strong>';
			}
			// Use a formatted string combining the title and content.
			elseif ($content != '')
			{
				$result = '<strong>' . $title . '</strong><br />' . $content;
			}
			else
			{
				$result = $title;
			}

			// Escape everything, if required.
			if ($escape)
			{
				$result = vRequest::vmSpecialChars($result);
			}
		}

		return $result;
	}

	/**
	 * Displays a calendar control field
	 *
	 * @param   string  $value    The date value
	 * @param   string  $name     The name of the text field
	 * @param   string  $id       The id of the text field
	 * @param   string  $format   The date format
	 * @param   mixed   $attribs  Additional HTML attributes
	 *
	 * @return  string  HTML markup for a calendar field
	 *
	 * @since   1.5
	 */
	public static function calendar($value, $name, $id, $format = '%Y-%m-%d', $attribs = null)
	{
		static $done;

		if ($done === null)
		{
			$done = array();
		}

		$readonly = isset($attribs['readonly']) && $attribs['readonly'] == 'readonly';
		$disabled = isset($attribs['disabled']) && $attribs['disabled'] == 'disabled';

		if (is_array($attribs))
		{
			$attribs['class'] = isset($attribs['class']) ? $attribs['class'] : 'input-medium';
			$attribs['class'] = trim($attribs['class'] . ' hasTooltip');

			$attribs = JArrayHelper::toString($attribs);
		}

		static::_('bootstrap.tooltip');

		// Format value when not nulldate ('0000-00-00 00:00:00'), otherwise blank it as it would result in 1970-01-01.
		if ($value && $value != vFactory::getDbo()->getNullDate())
		{
			$tz = date_default_timezone_get();
			date_default_timezone_set('UTC');
			$inputvalue = strftime($format, strtotime($value));
			date_default_timezone_set($tz);
		}
		else
		{
			$inputvalue = '';
		}

		// Load the calendar behavior
		static::_('behavior.calendar');

		// Only display the triggers once for each control.
		if (!in_array($id, $done))
		{
			$document = vFactory::getDocument();
			$document
				->addScriptDeclaration(
				'jQuery(document).ready(function($) {Calendar.setup({
			// Id of the input field
			inputField: "' . $id . '",
			// Format of the input field
			ifFormat: "' . $format . '",
			// Trigger for the calendar (button ID)
			button: "' . $id . '_img",
			// Alignment (defaults to "Bl")
			align: "Tl",
			singleClick: true,
			firstDay: ' . vFactory::getLanguage()->getFirstDay() . '
			});});'
			);
			$done[] = $id;
		}

		// Hide button using inline styles for readonly/disabled fields
		$btn_style = ($readonly || $disabled) ? ' style="display:none;"' : '';
		$div_class = (!$readonly && !$disabled) ? ' class="input-append"' : '';

		return '<div' . $div_class . '>'
				. '<input type="text" title="' . ($inputvalue ? static::_('date', $value, null, null) : '')
				. '" name="' . $name . '" id="' . $id . '" value="' . vRequest::vmSpecialChars($inputvalue) . '" ' . $attribs . ' />'
				. '<button type="button" class="btn" id="' . $id . '_img"' . $btn_style . '><span class="icon-calendar"></span></button>'
			. '</div>';
	}

	/**
	 * Add a directory where vHtml should search for helpers. You may
	 * either pass a string or an array of directories.
	 *
	 * @param   string  $path  A path to search.
	 *
	 * @return  array  An array with directory elements
	 *
	 * @since   1.5
	 */
/*	public static function addIncludePath($path, $prefix = '')
	{
		// Force path to array
		settype($path, 'array');

		// Loop through the path directories
		foreach ($path as $dir)
		{
			if (!empty($dir) && !in_array($dir, static::$includePaths))
			{
				array_unshift(static::$includePaths, JPath::clean($dir));
			}
		}

		return static::$includePaths;
	}*/

	/**
	 * Internal method to get a JavaScript object notation string from an array
	 *
	 * @param   array  $array  The array to convert to JavaScript object notation
	 *
	 * @return  string  JavaScript object notation representation of the array
	 *
	 * @deprecated 4.0 use json_encode or JRegistry::toString('json')
	 *
	 * @since   3.0
	 */
	public static function getJSObject(array $array = array())
	{
		JLog::add(__METHOD__ . ' is deprecated. Use json_encode instead.', JLog::WARNING, 'deprecated');

		$elements = array();

		foreach ($array as $k => $v)
		{
			// Don't encode either of these types
			if (is_null($v) || is_resource($v))
			{
				continue;
			}

			// Safely encode as a Javascript string
			$key = json_encode((string) $k);

			if (is_bool($v))
			{
				$elements[] = $key . ': ' . ($v ? 'true' : 'false');
			}
			elseif (is_numeric($v))
			{
				$elements[] = $key . ': ' . ($v + 0);
			}
			elseif (is_string($v))
			{
				if (strpos($v, '\\') === 0)
				{
					// Items such as functions and JSON objects are prefixed with \, strip the prefix and don't encode them
					$elements[] = $key . ': ' . substr($v, 1);
				}
				else
				{
					// The safest way to insert a string
					$elements[] = $key . ': ' . json_encode((string) $v);
				}
			}
			else
			{
				$elements[] = $key . ': ' . static::getJSObject(is_object($v) ? get_object_vars($v) : $v);
			}
		}

		return '{' . implode(',', $elements) . '}';
	}
	
	/**
	 * Adjusted for VMF
	 * @return string
	 */
	public static function token() {
		return '<input type="hidden" name="' . vRequest::getFormToken(). '" value="1" />';
	}
}
