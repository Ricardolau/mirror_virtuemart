<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage core
* @copyright Copyright (c) 2006 Open Source Matters
* @copyright Copyright (C) 2006-2008 soeren - All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net

/**
* Parameters handler
* @package VirtueMart
*/
class vmParameters {
	/** @var object */
	var $_params 	= null;
	/** @var string The raw params string */
	var $_raw 		= null;
	/** @var string Path to the xml setup file */
	var $_path 		= null;
	/** @var string The type of setup file */
	var $_type 		= null;
	/** @var object The xml params element */
	var $_xmlElem 	= null;
	/**
	* Constructor
	* @param string The raw parms text
	* @param string Path to the xml setup file
	* @var string The type of setup file
	*/
	function vmParameters( $text, $path='', $type='component' ) {
		$this->_params 	= $this->parse( $text );
		$this->_raw 	= $text;
		$this->_path 	= $path;
		$this->_type 	= $type;
	}

	/**
	 * Returns the params array
	 * @return object
	 */
	function toObject() {
		return $this->_params;
	}

	/**
	 * Returns a named array of the parameters
	 * @return object
	 */
	function toArray() {
		return vmObjectToArray( $this->_params );
	}

	/**
	* @param string The name of the param
	* @param string The value of the parameter
	* @return string The set value
	*/
	function set( $key, $value='' ) {
		$this->_params->$key = $value;
		return $value;
	}
	/**
	* Sets a default value if not alreay assigned
	* @param string The name of the param
	* @param string The value of the parameter
	* @return string The set value
	*/
	function def( $key, $value='' ) {
		return $this->set( $key, $this->get( $key, $value ) );
	}
	/**
	* @param string The name of the param
	* @param mixed The default value if not found
	* @return string
	*/
	function get( $key, $default='' ) {
		if (isset( $this->_params->$key )) {
			return $this->_params->$key === '' ? $default : $this->_params->$key;
		} else {
			return $default;
		}
	}
	/**
	* Parse an .ini string, based on phpDocumentor phpDocumentor_parse_ini_file function
	* @param mixed The ini string or array of lines
	* @param boolean add an associative index for each section [in brackets]
	* @return object
	*/
	function parse( $txt, $process_sections = false, $asArray = false ) {
		if (is_string( $txt )) {
			$lines = explode( "\n", $txt );
		} else if (is_array( $txt )) {
			$lines = $txt;
		} else {
			$lines = array();
		}
		$obj = $asArray ? array() : new stdClass();

		$sec_name = '';
		$unparsed = 0;
		if (!$lines) {
			return $obj;
		}
		foreach ($lines as $line) {
			// ignore comments
			if ($line && $line[0] == ';') {
				continue;
			}
			$line = trim( $line );

			if ($line == '') {
				continue;
			}
			if ($line && $line[0] == '[' && $line[strlen($line) - 1] == ']') {
				$sec_name = substr( $line, 1, strlen($line) - 2 );
				if ($process_sections) {
					if ($asArray) {
						$obj[$sec_name] = array();
					} else {
						$obj->$sec_name = new stdClass();
					}
				}
			} else {
				if ($pos = strpos( $line, '=' )) {
					$property = trim( substr( $line, 0, $pos ) );

					if (substr($property, 0, 1) == '"' && substr($property, -1) == '"') {
						$property = stripcslashes(substr($property,1,count($property) - 2));
					}
					$value = trim( substr( $line, $pos + 1 ) );
					if ($value == 'false') {
						$value = false;
					}
					if ($value == 'true') {
						$value = true;
					}
					if (substr( $value, 0, 1 ) == '"' && substr( $value, -1 ) == '"') {
						$value = stripcslashes( substr( $value, 1, count( $value ) - 2 ) );
					}

					if ($process_sections) {
						$value = str_replace( '\n', "\n", $value );
						if ($sec_name != '') {
							if ($asArray) {
								$obj[$sec_name][$property] = $value;
							} else {
								$obj->$sec_name->$property = $value;
							}
						} else {
							if ($asArray) {
								$obj[$property] = $value;
							} else {
								$obj->$property = $value;
							}
						}
					} else {
						$value = str_replace( '\n', "\n", $value );
						if ($asArray) {
							$obj[$property] = $value;
						} else {
							$obj->$property = $value;
						}
					}
				} else {
					if ($line && trim($line[0]) == ';') {
						continue;
					}
					if ($process_sections) {
						$property = '__invalid' . $unparsed++ . '__';
						if ($process_sections) {
							if ($sec_name != '') {
								if ($asArray) {
									$obj[$sec_name][$property] = trim($line);
								} else {
									$obj->$sec_name->$property = trim($line);
								}
							} else {
								if ($asArray) {
									$obj[$property] = trim($line);
								} else {
									$obj->$property = trim($line);
								}
							}
						} else {
							if ($asArray) {
								$obj[$property] = trim($line);
							} else {
								$obj->$property = trim($line);
							}
						}
					}
				}
			}
		}
		return $obj;
	}
	/**
	* @param string The name of the control, or the default text area if a setup file is not found
	* @return string HTML
	*/
	function render( $name='params' ) {
		
		if ($this->_path) {
			if (!is_object( $this->_xmlElem )) {
				require_once( CLASSPATH . 'simplexml.php' );

				$xmlDoc = new vmSimpleXML();
	
				if ($xmlDoc->loadFile( $this->_path) !== false ) {
					$root =& $xmlDoc->document;

					$tagName = $root->name();
					if ( $root->attributes('type') == $this->_type) {
						if ($params = &$root->getElementByPath( '/params' )) {
							$this->_xmlElem =& $params;
						}
					}
				}
			}
		}

		if (is_object( $this->_xmlElem )) {
			$html = array();
			$html[] = '<table width="100%" class="adminform">';

			$element =& $this->_xmlElem;

			if ($description = @$element->attributes( 'description')) {
				// add the params description to the display
				$html[] = '<tr><td colspan="2">' . $description . '</td></tr>';
			}

			//$params = mosParseParams( $row->params );
			$this->_methods = get_class_methods( get_class( $this ) );

			foreach ($element->_children as $param) {
				$result = $this->renderParam( $param, $name );
				$html[] = '<tr>';

				$html[] = '<td width="40%" class="labelcell"><span class="editlinktip">' . $result[0] . '</span></td>';
				$html[] = '<td>' . $result[1] . '</td>';

				$html[] = '</tr>';
			}
			$html[] = '</table>';

			if (count( $element->_children ) < 1) {
				$html[] = "<tr><td colspan=\"2\"><i>" . _NO_PARAMS . "</i></td></tr>";
			}
			return implode( "\n", $html );
		} else {
			return "<textarea name=\"$name\" cols=\"40\" rows=\"10\" class=\"text_area\">$this->_raw</textarea>";
		}
	}
/**
* @param object A param tag node
* @param string The control name
* @return array Any array of the label, the form element and the tooltip
*/
	function renderParam( &$param, $control_name='params' ) {
		global $VM_LANG;
		$result = array();

		$name = $param->attributes( 'name');
		$type = $param->attributes( 'type');
		if( $param->attributes( 'label') != '') {
			$label = $VM_LANG->_($param->attributes( 'label'));
		} else {
			$label = '';
		}
		
		$value = $this->get( $name, $param->attributes( 'default' ) );
		if( $param->attributes( 'description') ) {
			$description = $VM_LANG->_($param->attributes( 'description'));
		} else {
			$description = '';
		}

		$result[0] = $label ? $label : $name;

		if ($type == 'spacer' || $type == 'checkbox') {
			$result[0] = '&nbsp;';
		} else {
			$result[0] = vmToolTip( addslashes( $description ), addslashes( $result[0] ), '', '', $result[0], '#', 0 );
		}
		

		if (in_array( '_form_' . $type, $this->_methods )) {
			$result[1] = call_user_func( array( &$this, '_form_' . $type ), $name, $value, $param, $control_name, $label );
		} else {
			$result[1] = _HANDLER . ' = ' . $type;
		}

		if ( $description ) {
			$result[2] = vmToolTip( $description, $result[0] );
			$result[2] = '';
		} else {
			$result[2] = '';
		}

		return $result;
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_text( $name, $value, &$node, $control_name ) {
		$size = $node->attributes( 'size');
		if( (int)$size == 0 ) {
			$size = 25;
		}
		return '<input type="text" name="'. $control_name .'['. $name .']" value="'. htmlspecialchars($value) .'" class="text_area" size="'. $size .'" />';
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_password( $name, $value, &$node, $control_name ) {
		$size = $node->attributes( 'size');
		if( (int)$size == 0 ) {
			$size = 25;
		}
		return '<input type="password" name="'. $control_name .'['. $name .']" value="'. htmlspecialchars($value) .'" class="text_area" size="'. $size .'" />';
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_checkbox( $name, $value, &$node, $control_name, $label='' ) {
		$default = $node->attributes('default');
		$checked = '';
		if( $value == $default ) {
			$checked = ' checked="checked"';
		}
		$id = uniqid($name);
		return '<input type="checkbox" name="'. $control_name .'['. $name .']" value="'. htmlspecialchars($value) .'"'.$checked.' class="text_area" id="'.$id.'" />
		<label for="'.$id.'">'.$label.'</label>';
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_list( $name, $value, &$node, $control_name ) {
		global $VM_LANG;
		$size = $node->attributes('size');
		$multiselect = $node->attributes('multiselect');
		if( $multiselect ) {
			$multiselect = 'multiple="multiple"';
			$size = 5;
			$name .= ']['; // well, if it's multi-select, this must be an array, right?
			if( strstr($value,',')) {
				$value = explode(',', $value );
			}
		}
		if( $size == 0 ) $size = 1;
		$options = array();
		foreach ($node->_children as $option) {
			$val = $option->attributes( 'value');
			$text = trim($option->data());
			$options[$val] = $VM_LANG->_($text);
		}

		return ps_html::selectList( $control_name .'['. $name .']', $value, $options, $size, $multiselect );
	}

	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_radio( $name, $value, &$node, $control_name ) {
		global $VM_LANG;
		$options = array();
		foreach ($node->_children as $option) {
			$val 	= $option->attributes( 'value');
			$text 	= trim($option->data());
			$options[$val] = $VM_LANG->_($text);
		}

		return ps_html::radioList( $control_name .'['. $name .']', $value, $options );
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_table_data_list( $name, $value, &$node, $control_name ) {
		global $db, $VM_LANG;
		
		$table = $node->attributes('table');
		$condition = $node->attributes('sql_condition');
		$valuefield = $node->attributes('valuefield');
		$textfield = $node->attributes('textfield');
		$orderfield = $node->attributes('orderfield');
		$sorting = strtoupper($node->attributes('sorting')) == 'DESC' ? 'DESC' : 'ASC';
		$multiselect = $node->attributes('multiselect');
		
		$query = "SELECT `".$db->getEscaped($valuefield).'`, `'.$db->getEscaped($textfield)."`"
		. "\n FROM `".$db->getEscaped($table)."`";
		if( $condition != '' ) {		
			$query .= "\n WHERE ".$condition;
		}
		if( $orderfield ) {
			$query .= "\n ORDER BY `".$db->getEscaped($orderfield)."` ".$sorting;
		}
		
		$db->query( $query );
		$array = array('' => $VM_LANG->_('VM_SELECT'));
		while( $db->next_record() ) {
			$array[$db->f($valuefield)] = $db->f($textfield);
		}
		
		if( $multiselect == '1' ) {
			$multiple = 'multiple="multiple"';
			$size = 5; 
		} else {
			$multiple = '';
			$size = 1;
		}
		return ps_html::selectList( ''. $control_name .'['. $name .']', $value, $array, $size, $multiple, 'class="inputbox"'  );
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_vm_category( $name, $value, &$node, $control_name ) {
		global $database;

		$multiselect = $node->_attributes( 'multiselect' );
		if( $multiselect == '1' ) {
			$multiple = true;
			$size = 5; 
		} else {
			$multiple = false;
			$size = 1;
		}
		require_once( CLASSPATH.'ps_product_category.php');
		$ps_product_category = new ps_product_category();
		
		ob_start();
		$ps_product_category->list_all(''. $control_name .'['. $name .']', 0, array(), $size, true, $multiple );
		$category_dropdown = ob_get_clean();
		return $category_dropdown;
	}

	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_filelist( $name, $value, &$node, $control_name ) {
		global $mosConfig_absolute_path;

		// path to images directory
		$path 	= $mosConfig_absolute_path . $node->attributes( 'directory');
		$filter = $node->attributes( 'filter');
		$files 	= vmReadDirectory( $path, $filter );

		$options = array();
		foreach ($files as $file) {
			$options[$file] = $file;
		}
		if ( !$node->attributes( 'hide_none' ) ) {
			array_unshift( $options, array( '-1', '- '. 'Do Not Use' .' -' ) );
		}
		if ( !$node->attributes( 'hide_default' ) ) {
			array_unshift( $options, array( '', '- '. 'Use Default' .' -' ) );
		}

		return ps_html::selectList( ''. $control_name .'['. $name .']', $value, $options, 1, '', 'class="inputbox"' );
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_imagelist( $name, $value, &$node, $control_name ) {
		$node->addAttribute( 'filter', '\.png$|\.gif$|\.jpg$|\.bmp$|\.ico$' );
		return $this->_form_filelist( $name, $value, $node, $control_name );
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_textarea( $name, $value, &$node, $control_name ) {
 		$rows 	= $node->attributes( 'rows');
 		$cols 	= $node->attributes( 'cols');
 		// convert <br /> tags so they are not visible when editing
 		$value 	= str_replace( '<br />', "\n", $value );

 		return '<textarea name="' .$control_name.'['. $name .']" cols="'. $cols .'" rows="'. $rows .'" class="text_area">'. htmlspecialchars($value) .'</textarea>';
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_hidden( $name, $value, &$node, $control_name ) {

 		return '<input name="' .$control_name.'['. $name .']" value="'. htmlspecialchars($value) .'" type="hidden" />';
	}
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_spacer( $name, $value, &$node, $control_name ) {
		global $VM_LANG;
		if ( $value ) {
			return '<h3>'.$VM_LANG->_($value).'</h3>';
		} else {
			return '<hr />';
		}
	}
	function _form_secret_key( $name, $value, &$node, $control_name ) {
		return '<a class="button" id="changekey" href="'
			. $GLOBALS['sess']->url($_SERVER['SCRIPT_NAME']."?page=store.payment_method_keychange&pshop_mode=admin&element=$name") .'" >'
			. $GLOBALS['VM_LANG']->_('VM_CHANGE_TRANSACTION_KEY') 
			.'<a/>';
			
	}
	/**
	* special handling for textarea param
	*/
	function textareaHandling( &$txt ) {
		$total = count( $txt );
		for( $i=0; $i < $total; $i++ ) {
			if ( strstr( $txt[$i], "\n" ) ) {
				$txt[$i] = str_replace( "\n", '<br />', $txt[$i] );
			}
		}
		$txt = implode( "\n", $txt );

		return $txt;
	}
}

/**
* @param string
* @return string
*/
function vmParseParams( $txt ) {
	return vmParameters::parse( $txt );
}
?>