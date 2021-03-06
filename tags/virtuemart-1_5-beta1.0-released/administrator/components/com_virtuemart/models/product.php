<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author RolandD
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id$
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the model framework
jimport( 'joomla.application.component.model');

/**
 * Model for VirtueMart Products
 *
 * @package VirtueMart
 * @author RolandD
 * @todo Replace getOrderUp and getOrderDown with JTable move function. This requires the vm_product_category_xref table to replace the product_list with the ordering column
 */
class VirtueMartModelProduct extends JModel {

	var $_total;
	var $_pagination;

	function __construct() {
		parent::__construct();

		// Get the pagination request variables
		$mainframe = JFactory::getApplication() ;
		$limit = $mainframe->getUserStateFromRequest( 'global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int' );
		$limitstart = $mainframe->getUserStateFromRequest( JRequest::getVar('option').'.limitstart', 'limitstart', 0, 'int' );

		// In case limit has been changed, adjust limitstart accordingly
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
	}

	/**
	 * Loads the pagination
	 */
    public function getPagination() {
		if ($this->_pagination == null) {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination( $this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
		}
		return $this->_pagination;
	}

	/**
	 * Gets the total number of products
	 */
	private function getTotal() {
    	if (empty($this->_total)) {
//    		$this->_db = JFactory::getDBO();

			$q = "SELECT #__vm_product.`product_id` ".$this->getProductListQuery().$this->getProductListFilter();
			$this->_db->setQuery($q);
			$fields = $this->_db->loadObjectList('product_id');
			$this->_total = count($fields);
        }

        return $this->_total;
    }

    /**
     * Load a single product
     * @param $product_id (optional); if omitted, the product ID is taken from the URI request
     */
     public function getProduct($product_id = null) {
//     	 $this->_db = JFactory::getDBO();
		if ($product_id === null) {
			$product_id = JRequest::getInt('product_id', 0);
		}
     	 /* Check if we are loading an existing product */
     	 if ($product_id > 0) {
//			 $q = "SELECT p.*, pf.manufacturer_id, pp.shopper_group_id, pp.product_price_id, pp.product_price, pp.product_currency,
//			 	pp.price_quantity_start, pp.price_quantity_end, a.attribute_name AS attribute_names
			 $q = "SELECT p.*, pf.manufacturer_id, pp.*, a.attribute_name AS attribute_names
				FROM #__vm_product AS p
				LEFT JOIN #__vm_product_mf_xref AS pf
				ON p.product_id = pf.product_id
				LEFT JOIN #__vm_product_price AS pp
				ON p.product_id = pp.product_id
				LEFT JOIN #__vm_product_attribute_sku a
				ON p.product_id = a.product_id
				WHERE p.product_id = ".$product_id;
			 $this->_db->setQuery($q);
			 $row = $this->_db->loadObject();
		 }
		 else {
		 	 /* Load an empty product */
		 	 $row = $this->getTable();
		 	 $row->load();

		 	 /* Add optional fields */
		 	 $row->manufacturer_id = null;
		 	 $row->product_price_id = null;
		 	 $row->product_price = null;
		 	 $row->product_currency = null;
		 	 $row->product_price_quantity_start = null;
		 	 $row->product_price_quantity_end = null;
		 	 
		 	 $row->product_tax_id = null;
		 	 $row->product_discount_id = null;
		 	 
		 	 if(empty($this->_data->paym_vendor_id)){
  		   		require_once(JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_virtuemart'.DS.'models'.DS.'vendor.php');
   				$row->vendor_id = VirtueMartModelVendor::getLoggedVendor();
  			}
		 }


		 /* Add the product categories */
		 $q = 'SELECT category_id FROM #__vm_product_category_xref WHERE product_id = '.$product_id;
		 $this->_db->setQuery($q);
		 $categories = $this->_db->loadResultArray();
		 $row->categories = $this->_db->loadResultArray();
		 
		 if (VmConfig::get('show_prices') == '1') {
			/* Loads the product price details */
//			$calculator = new calculationHelper();
//			$row->price = $calculator->getProductPrices($featured->product_id);
		}
				
     	 return $row;
     }

     /**
     * Get the simple product info
     * @author RolandD
     */
     public function getProductDetails() {
//     	$db = JFactory::getDBO();
     	$cids = JRequest::getVar('cid');
     	$q = "SELECT * FROM #__vm_product WHERE product_id = ".$cids[0];
     	$this->_db->setQuery($q);
     	return $this->_db->loadObject();
     }

     /**
     * Load the attribute names for a product
     */
     public function getProductAttributeNames() {
     	 $product_id = JRequest::getInt('product_id', 0);
     	 $product_parent_id = JRequest::getInt('product_parent_id', 0);
//		 $this->_db = JFactory::getDBO();
		 $q = "SELECT attribute_name
			FROM #__vm_product_attribute_sku
			WHERE product_id = ";
			if ($product_parent_id > 0) $q .= $product_parent_id;
			else $q .= $product_id;
		 $this->_db->setQuery($q);
		 return $this->_db->loadResultArray();
     }

     /**
     * Load the attribute names for a product
     */
     public function getProductAttributeValues() {
     	 $product_id = JRequest::getInt('product_id', 0);
     	 /* Check if we are loading an existing product */
     	 if ($product_id > 0) {
//     	 	 $this->_db = JFactory::getDBO();
			 $q = "SELECT attribute_id, attribute_name, attribute_value
				FROM #__vm_product_attribute
				WHERE product_id = ".$product_id;
			 $this->_db->setQuery($q);
			 return $this->_db->loadAssocList('attribute_name');
     	 }
     	 else return null;
     }

    /**
     * Select the products to list on the product list page
     */
    public function getProductList() {
//     	$this->_db = JFactory::getDBO();
     	/* Pagination */
     	$this->getPagination();

     	/* Build the query */
     	$q = "SELECT #__vm_product.`product_id`,
     				#__vm_product.`product_parent_id`,
     				`product_name`,
     				`vendor_name`,
     				`product_sku`,
     				`category_name`,
     				#__vm_category.`category_id`,
     				#__vm_category_xref.`category_parent_id`,
     				#__vm_product_category_xref.`product_list`,
     				`mf_name`,
     				#__vm_manufacturer.`manufacturer_id`,
     				#__vm_product.`published`,
     				`product_price`
     				".$this->getProductListQuery().$this->getProductListFilter()."
			";
     	$this->_db->setQuery($q, $this->_pagination->limitstart, $this->_pagination->limit);
     	return $this->_db->loadObjectList('product_id');
    }

    /**
    * List of tables to include for the product query
    * @author RolandD
    */
    private function getProductListQuery() {
    	return 'FROM #__vm_product
			LEFT JOIN #__vm_product_price
			ON #__vm_product.product_id = #__vm_product_price.product_id
			LEFT JOIN #__vm_product_mf_xref
			ON #__vm_product.product_id = #__vm_product_mf_xref.product_id
			LEFT JOIN #__vm_manufacturer
			ON #__vm_product_mf_xref.manufacturer_id = #__vm_manufacturer.manufacturer_id
			LEFT JOIN #__vm_product_attribute
			ON #__vm_product.product_id = #__vm_product_attribute.product_id
			LEFT JOIN #__vm_product_category_xref
			ON #__vm_product.product_id = #__vm_product_category_xref.product_id
			LEFT JOIN #__vm_category
			ON #__vm_product_category_xref.category_id = #__vm_category.category_id
			LEFT JOIN #__vm_category_xref
			ON #__vm_category.category_id = #__vm_category_xref.category_child_id
			LEFT JOIN #__vm_vendor
			ON #__vm_product.vendor_id = #__vm_vendor.vendor_id';
    }

    /**
    * Collect the filters for the query
    * @author RolandD
    */
    private function getProductListFilter() {
//    	$this->_db = JFactory::getDBO();
    	$filters = array();
    	/* Check some filters */
    	$filter_order = JRequest::getCmd('filter_order', 'product_name');
		if ($filter_order == '') $filter_order = 'product_name';
		$filter_order_Dir = JRequest::getWord('filter_order_Dir', 'desc');
		if ($filter_order_Dir == '') $filter_order_Dir = 'desc';

		/* Product Parent ID */
     	if (JRequest::getInt('product_parent_id', 0) > 0) $filters[] = '#__vm_product.`product_parent_id` = '.JRequest::getInt('product_parent_id');
     	else $filters[] = '#__vm_product.`product_parent_id` = 0';
     	/* Category ID */
     	if (JRequest::getInt('category_id', 0) > 0) $filters[] = '#__vm_category.`category_id` = '.JRequest::getInt('category_id');
     	/* Product name */
     	if (JRequest::getVar('filter_product', false)) $filters[] = '#__vm_product.`product_name` LIKE '.$this->_db->Quote('%'.JRequest::getVar('filter_product').'%');
     	/* Product type ID */
     	//if (JRequest::getInt('product_type_id', false)) $filters[] = '#__vm_product.`product_name` LIKE '.$this->_db->Quote('%'.JRequest::getVar('filter_product').'%');
     	/* Time filter */
     	if (JRequest::getVar('search_type', '') != '') {
     		$search_order = JRequest::getVar('search_order') == 'bf' ? '<' : '>';
     		switch (JRequest::getVar('search_type')) {
     			case 'product':
     				$filters[] = '#__vm_product.`mdate` '.$search_order.' '.strtotime(JRequest::getVar('search_date'));
     				break;
     			case 'price':
     				$filters[] = '#__vm_product_price.`mdate` '.$search_order.' '.strtotime(JRequest::getVar('search_date'));
     				break;
     			case 'withoutprice':
     				$filters[] = '#__vm_product_price.`product_price` IS NULL';
     				break;
     		}
     	}
     	if (count($filters) > 0) $filter = ' WHERE '.implode(' AND ', $filters).' GROUP BY #__vm_product.`product_id` ORDER BY '.$filter_order." ".$filter_order_Dir;
     	else $filter = ' GROUP BY #__vm_product.`product_id` ORDER BY '.$filter_order." ".$filter_order_Dir;
     	return $filter;
    }

    /**
    * Check if the product has any children
    *
    * @author RolandD
    * @param int $product_id Product ID
    * @return bool True if there are child products, false if there are no child products
    */
    public function checkChildProducts($product_id) {
//     	$this->_db = JFactory::getDBO();
     	$q  = "SELECT IF (COUNT(product_id) > 0, 'Y', 'N') FROM `#__vm_product` WHERE `product_parent_id` = ".$product_id;
     	$this->_db->setQuery($q);
     	if ($this->_db->loadResult() == 'Y') return true;
     	else if ($this->_db->loadResult() == 'N') return false;
    }

    /**
	 * Function to quickly check whether a product has attributes or not
	 *
	 * @author RolandD
	 * @param int $pid The id of the product to check
	 * @return boolean True when the product has attributes, false when not
	 */
	function checkAttributes($pid, $checkSimpleAttributes=false ) {
		if (is_array($pid) || empty($pid)) return false;

		$pid = intval($pid);
//		$this->_db = JFactory::getDBO();
		$product_info = JRequest::getVar('product_info', false);

		if (!$product_info || empty($product_info[$pid]["product_has_attributes"] )) {
			$this->_db->setQuery("SELECT `product_id` FROM `#__vm_product_attribute_sku` WHERE `product_id`=".$pid);
			$product_id = $this->_db->loadResult();

			if ($product_id) $product_info[$pid]["product_has_attributes"] = true;
			else if($checkSimpleAttributes) {
				$this->_db->setQuery("SELECT `attribute`,`custom_attribute` FROM `#__vm_product` WHERE `product_id`=".$pid);
				$attributes = $this->_db->loadObject();
				if ($attributes->attribute || $attributes->custom_attribute) {
					$product_info[$pid]["product_has_attributes"] = true;
				}
				else {
					$product_info[$pid]["product_has_attributes"] = false;
				}
			}
			else $product_info[$pid]["product_has_attributes"] = false;
		}
		JRequest::setVar('product_info', $product_info);
		return $product_info[$pid]["product_has_attributes"];
	}

    /**
    * Set the publish/unpublish state
    */
    public function getPublish() {
     	$cid = JRequest::getVar('cid', false);
     	if (is_array($cid)) {
//     		$this->_db = JFactory::getDBO();
     		$cids = implode( ',', $cid );
			if (JRequest::getVar('task') == 'publish') $state =  '1'; else $state = '0';
			$q = "UPDATE #__vm_product
				SET `published` = ".$this->_db->Quote($state)."
				WHERE `product_id` IN (".$cids.")";
			$this->_db->setQuery($q);
			if ($this->_db->query()) return true;
			else return false;
		}
    }

    /**
	 * Retrieve a list of featured products from the database.
	 *
	 * @param string $group Specifies what kind of products need to be loaded (featured or latest)
	 * @param int $categoryId Id of the category to lookup, null for all categories
	 * @param int $nbrReturnProducts Number of products to return
	 * @return object List of  products
	 */
    public function getGroupProducts($group, $vendorId='1', $categoryId='', $nbrReturnProducts) {
//		$this->_db = JFactory::getDBO();
	    switch ($group) {
			case 'featured':
				$filter = 'AND `#__vm_product`.`product_special`="Y" ';
				break;
			case 'latest':
				$filter = 'AND `#__vm_product`.`cdate` > '.(time()-(60*60*24*7)).' ';
				break;
		}
        if ($categoryId) {
	        $query  = 'SELECT DISTINCT `product_sku`,`#__vm_product`.`product_id`, `product_name`, `product_s_desc`, `product_thumb_image`, `product_full_image`, `product_in_stock`, `product_url` ';
	        $query .= 'FROM `#__vm_product`, `#__vm_product_category_xref`, `#__vm_category` WHERE ';
	        $query .= '(`#__vm_product`.`product_parent_id`="" OR `#__vm_product`.`product_parent_id`="0") ';
	        $query .= 'AND `#__vm_product`.`product_id`=`#__vm_product_category_xref`.`product_id` ';
	        $query .= 'AND `#__vm_category`.`category_id`=`#__vm_product_category_xref`.`category_id` ';
            $query .= 'AND `#__vm_category`.`category_id`=' . $categoryId . ' ';
	        $query .= 'AND `#__vm_product`.`published`="1" ';
	        $query .= $filter;
	        if (VmConfig::get('check_stock') && Vconfig::getVar('show_out_of_stock_products') != '1') {
		        $query .= ' AND `product_in_stock` > 0 ';
	        }
	        $query .= 'ORDER BY RAND() LIMIT 0, '.(int)$nbrReturnProducts;
        }
        else {
	        $query  = 'SELECT DISTINCT `product_sku`,`product_id`,`product_name`,`product_s_desc`,`product_thumb_image`, `product_full_image`, `product_in_stock`, `product_url` ';
	        $query .= 'FROM `#__vm_product` WHERE ';
	        $query .= '(`#__vm_product`.`product_parent_id`="" OR `#__vm_product`.`product_parent_id`="0") AND `vendor_id`=' . $vendorId . ' ';
	        $query .= 'AND `#__vm_product`.`published`="1" ';
	        $query .= $filter;
	        if (VmConfig::get('check_stock') && VmConfig::get('pshop_show_out_of_stock_products') != '1') {
		        $query .= ' AND `product_in_stock` > 0 ';
	        }
	        $query .= 'ORDER BY RAND() LIMIT 0, '.(int)$nbrReturnProducts;
        }
        $this->_db->setQuery($query);
		$result = $this->_db->loadObjectList();
		
		/* Check if we have any products */
		if($result) {
			/* Add some extra info */
			foreach ($result as $featured) {
	
				/* Product price */
				$price = "";
				if (VmConfig::get('show_prices') == '1') {
					/* Loads the product price details */
					$calculator = calculationHelper::getInstance();
					//Todo check if it is better just to use $featured, but needs redoing the sql above
					$price = $calculator->getProductPrices((int)$featured->product_id);
				}
				$featured->prices = $price;
	
				/* Child products */
				$featured->haschildren = $this->checkChildProducts($featured->product_id);
	
				/* Attributes */
				$featured->hasattributes = $this->checkAttributes($featured->product_id, true);
			}
		}

		return $result;
    }

    /**
     * Saves products according to their order
     * @author RolandD
     */
    public function getSaveOrder() {
//    	$this->_db = JFactory::getDBO();
    	$mainframe = Jfactory::getApplication('site');
    	$order = JRequest::getVar('order');
    	$category_id = JRequest::getInt('category_id');

    	/* Check if all the entries are numbers */
		foreach( $order as $list_id ) {
			if( !is_numeric( $list_id ) ) {
				$mainframe->enqueueMessage(JText::_('VM_SORT_ERR_NUMBERS_ONLY'), 'error');
				return false;
			}
		}

		/* Get the list of product IDs */
		$q = "SELECT product_id
			FROM #__vm_product_category_xref
			WHERE category_id = ".$category_id;
		$this->_db->setQuery($q);
		$product_ids = $this->_db->loadResultArray();

		foreach( $order as $key => $list_id ) {
			$q = "UPDATE #__vm_product_category_xref ";
			$q .= "SET product_list = ".$list_id;
			$q .= " WHERE category_id ='".$category_id."' ";
			$q .= " AND product_id ='".$product_ids[$key]."' ";
			$this->_db->setQuery($q);
			$this->_db->query();
		}
	}

	/**
     * Saves products according to their order
     * @author RolandD
     */
    public function getOrderUp() {
//    	$this->_db = JFactory::getDBO();
    	$cids = JRequest::getVar('cid');
    	$cid = (int)$cids[0];
    	$category_id = JRequest::getInt('category_id');

    	$q = "SELECT product_id, product_list
    		FROM #__vm_product_category_xref
    		WHERE category_id = ".$category_id."
    		ORDER BY product_list";
    	$this->_db->setQuery($q);
    	$products = $this->_db->loadAssocList('product_id');
    	$keys = array_keys($products);
    	while (current($keys) !== $cid) next($keys);

    	/* Get the previous ID */
    	$prev_id = prev($keys);

    	/* Check if a previous product_list exists */
    	if (is_null($products[$prev_id]['product_list'])) {
    		$products[$prev_id]['product_list'] = $prev_id;
    	}

    	/* Check if the product_listings are the same */
    	if ($products[$prev_id]['product_list'] == $products[$cid]['product_list']) {
    		$products[$cid]['product_list']++;
    	}

    	/* Update the current product */
		$q = "UPDATE #__vm_product_category_xref
			SET product_list = ".$products[$prev_id]['product_list']."
			WHERE category_id = ".$category_id."
			AND product_id = ".$products[$cid]['product_id'];
		$this->_db->setQuery($q);
		$this->_db->query();

		/* Check if a next product_list exists */
    	if (is_null($products[$cid]['product_list'])) {
    		$products[$cid]['product_list'] = $prev_id+1;
    	}
		/* Update the previous product */
		$q = "UPDATE #__vm_product_category_xref
			SET product_list = ".$products[$cid]['product_list']."
			WHERE category_id = ".$category_id."
			AND product_id = ".$products[$prev_id]['product_id'];
		$this->_db->setQuery($q);
		$this->_db->query();
	}

	/**
     * Saves products according to their order
     * @author RolandD
     */
    public function getOrderDown() {
//    	$this->_db = JFactory::getDBO();
    	$cids = JRequest::getVar('cid');
    	$cid = (int)$cids[0];
    	$category_id = JRequest::getInt('category_id');

    	$q = "SELECT product_id, product_list
    		FROM #__vm_product_category_xref
    		WHERE category_id = ".$category_id."
    		ORDER BY product_list";
    	$this->_db->setQuery($q);
    	$products = $this->_db->loadAssocList('product_id');
    	$keys = array_keys($products);
    	while (current($keys) !== $cid) next($keys);

    	/* Get the next ID */
    	$next_id = next($keys);

    	/* Check if a previous product_list exists */
    	if (is_null($products[$next_id]['product_list'])) {
    		$products[$next_id]['product_list'] = $next_id;
    	}

    	/* Check if the product_listings are the same */
    	if ($products[$next_id]['product_list'] == $products[$cid]['product_list']) {
    		$products[$cid]['product_list']--;
    	}

    	/* Update the current product */
		$q = "UPDATE #__vm_product_category_xref
			SET product_list = ".$products[$next_id]['product_list']."
			WHERE category_id = ".$category_id."
			AND product_id = ".$products[$cid]['product_id'];
		$this->_db->setQuery($q);
		$this->_db->query();

		/* Check if a next product_list exists */
    	if (is_null($products[$cid]['product_list'])) {
    		$products[$cid]['product_list'] = $next_id-1;
    	}
		/* Update the next product */
		$q = "UPDATE #__vm_product_category_xref
			SET product_list = ".$products[$cid]['product_list']."
			WHERE category_id = ".$category_id."
			AND product_id = ".$products[$next_id]['product_id'];
		$this->_db->setQuery($q);
		$this->_db->query();
	}

	/**
	 * Get the related products
	 */
	 public function getRelatedProducts($product_id=false) {
	 	 if (!$product_id) return array();
	 	 else {
//			$this->_db = JFactory::getDBO();
			$q = "SELECT related_products FROM #__vm_product_relations WHERE product_id='".$product_id."'";
			$this->_db->setQuery($q);
			$results = $this->_db->loadResult();
			if ($results) {
				$ids = 'product_id =' . implode(' OR product_id =', explode("|", $results));
				$q = "SELECT product_id AS id, CONCAT(product_name, '::', product_sku) AS text
					FROM #__vm_product
					WHERE (".$ids.")";
				$this->_db->setQuery($q);
				return $this->_db->loadObjectList();
			}
			else return false;
		 }
	 }

	/**
	* Create a list of products for JSON return
	*/
	public function getProductListJson() {
//		$this->_db = JFactory::getDBO();
		$filter = JRequest::getVar('q', false);
		$q = "SELECT product_id AS id, CONCAT(product_name, '::', product_sku) AS value
			FROM #__vm_product";
		if ($filter) $q .= " WHERE product_name LIKE '%".$filter."%'";
		$this->_db->setQuery($q);
		return $this->_db->loadObjectList();
	}

	/**
	* Load the child products for a given product
	*/
	public function getChildAttributes($product_id) {
//		$this->_db = JFactory::getDBO();
		$q = "SELECT p.product_id, product_name, product_sku, attribute_name, attribute_value
			FROM #__vm_product p
			LEFT JOIN #__vm_product_attribute
			ON p.product_id = #__vm_product_attribute.product_id
			WHERE p.product_parent_id = ".$product_id."
			ORDER BY p.product_sku";
		$this->_db->setQuery($q);
		$products = $this->_db->loadObjectList();
		$childproduct = array();
		foreach ($products as $key => $product) {
			foreach ($product as $name => $value) {
				if (!array_key_exists($product->product_sku, $childproduct)) {
					$childproduct[$product->product_sku] = new StdClass();
				}
				if ($name != 'attribute_name' && $name != 'attribute_value') {
					$childproduct[$product->product_sku]->$name = $value;
				}
				else {
					$attribute_name = $product->attribute_name;
					$childproduct[$product->product_sku]->$attribute_name = $product->attribute_value;
				}
			}
		}
		return $childproduct;
	}

	/**
	* Store a product
	*
	* @author RolandD
	* @author Max Milbers
	* @access public
	*/
	public function saveProduct() {

		/* Setup some place holders */
		$product_data = $this->getTable('product');

		/* Load the data */
		$data = JRequest::get('post', 4);

		/* Load the old product details first */
		$product_data->load($data['product_id']);

		/* Process the images */
		//uploading images and creating thumbnails
		$fullImage = JRequest::getVar('product_full_image', array(), 'files');	
		if(!empty($fullImage['name'])){
			$filename = $fullImage['name'];
		} else {
			$filename = $data['product_full_image_current'];
		}
	
		$thumbImage = JRequest::getVar('product_thumb_image', array(), 'files');
		if(!empty($thumbImage['name'])){
			$filenamethumb = $thumbImage['name'];
		} else {
			$filenamethumb = $data['product_thumb_image_current'];
		}
				
		$image = VmImage::getProductImage($filename,$filenamethumb);
		if(!empty($image)){
			$data = $image->saveImage($data,$fullImage,false);
			$data = $image->saveImage($data,$thumbImage,true);
		}

		/* Get the product data */
		if (!$product_data->bind($data)) {
			$this->setError($product_data->getError());
			return false;	
		}

		/* Set the changed date */
		$product_data->mdate = time();

		/* Get the attribute */
		$product_data->attribute = $this->formatAttributeX();

        /* Set the product packaging */
        $product_data->product_packaging = (($data['product_box'] << 16) | ($data['product_packaging']&0xFFFF));
        
        /* Set the order levels */
        $product_data->product_order_levels = $data['min_order_level'].','.$data['max_order_level'];
        
        if (!$product_data->check()) {
			$this->setError($product_data->getError());
			return false;	
		}
		
        /* Store the product */
		if (!$product_data->store()) {
			$this->setError($product_data->getError());
			return false;
		}
		
		if(empty($data['product_id'])){
			$dbv = $product_data->getDBO();
			//I dont like the solution to use two variables
			$product_data->product_id = $data['product_id'] = $dbv->insertid();
		}
		
		$product_price_table = $this->getTable('product_price');

//		//get product_price_id
//		$q = 'SELECT `product_price_id` FROM `#__vm_product_price` WHERE product_id = "'.$data['product_id'].'" ';
//		$this->_db->setQuery($q);
//		$data['product_price_id'] = $this->_db->loadResult();

		if (!$product_price_table->bind($data)) {
			$this->setError($product_price_table->getError());
			return false;	
		}
		// Make sure the calculation record is valid
		if (!$product_price_table->check()) {
			$this->setError($product_price_table->getError());
			return false;	
		}
		
		// Save the country record to the database
		if (!$product_price_table->store()) {
			$this->setError($product_price_table->getError());
			return false;
		}

		
		/* Update manufacturer link */
		require_once(JPATH_ADMINISTRATOR.DS."components".DS."com_virtuemart".DS.'helpers'.DS.'modelfunctions.php');
		modelfunctions::storeArrayData('#__vm_product_mf_xref','product_id','manufacturer_id',$product_data->product_id,JRequest::getInt('mf_category_id'));
		
//		$q = 'INSERT INTO #__vm_product_mf_xref  (product_id, manufacturer_id) VALUES (';
//		$q .= $product_data->product_id.', ';
//		$q .= JRequest::getInt('manufacturer_id').') ';
//		$q .= 'ON DUPLICATE KEY UPDATE manufacturer_id = '.JRequest::getInt('manufacturer_id');
//		$this->_db->setQuery($q);
//		$this->_db->query();

		/* Update waiting list */
		if ($data['product_in_stock'] > 0 && $data['notify_users'] == '1' && $data['product_in_stock_old'] == '500') {
			$waitinglist = new VirtueMartModelWaitingList();
			$waitinglist->notifyList($data['product_id']);
		}

		/* If is Item, update attributes */
		if ($product_data->product_parent_id > 0) {
			$q  = 'SELECT attribute_id FROM #__vm_product_attribute ';
			$q .= 'WHERE product_id='.$product_data->product_id;
			$this->_db->setQuery($q);
			$attributes = $this->_db->loadObjectList();
			foreach ($attributes as $id => $attribute) {
				$q  = 'UPDATE #__vm_product_attribute SET ';
				$q .= 'attribute_value='.$this->_db->Quote($data['attribute_'.$attribute->attribute_id]);
				$q .= ' WHERE attribute_id = '.$attribute->attribute_id;
				$this->_db->setQuery($q);
				$this->_db->query();

			}
		/* If it is a Product, update Category */
		}
		else {
			/* Delete old category links */
			$q  = "DELETE FROM `#__vm_product_category_xref` ";
			$q .= "WHERE `product_id` = '".$product_data->product_id."' ";
			$this->_db->setQuery($q);
			$this->_db->Query();

			/* Store the new categories */
			foreach( $data["product_categories"] as $category_id ) {
				$this->_db->setQuery('SELECT IF (ISNULL(`product_list`), 1, MAX(`product_list`) + 1) as list_order FROM `#__vm_product_category_xref` WHERE `category_id`='.$category_id );
				$list_order = $this->_db->loadResult();

				$q  = "INSERT INTO #__vm_product_category_xref ";
				$q .= "(category_id,product_id,product_list) ";
				$q .= "VALUES ('".$category_id."','". $product_data->product_id . "', ".$list_order. ")";
				$this->_db->setQuery($q);
				$this->_db->query();
			}
		}

		/* Update related products */
		if (array_key_exists('related_products', $data)) {
			/* Insert Pipe separated Related Product IDs */
			$q = "REPLACE INTO #__vm_product_relations (product_id, related_products)";
			$q .= " VALUES( '".$product_data->product_id."', '".implode('|', $data['related_products'])."') ";
			$this->_db->setQuery($q);
			$this->_db->query();
		}
		else {
			$q = "DELETE FROM #__vm_product_relations WHERE product_id='".$product_data->product_id."'";
			$this->_db->setQuery($q);
			$this->_db->query();
		}

		return true;
	}

	/**
	* Format the attributes of a product to DB format
	*/
	public function formatAttributeX() {
		// request attribute pieces
		$attributeX = JRequest::getVar( 'attributeX', array( 0 ) ) ;
		$attribute_string = '' ;

		// no pieces given? then return
		if( empty( $attributeX ) ) {
			return $attribute_string ;
		}

		// put the pieces together again
		foreach( $attributeX as $attributes ) {
			$attribute_string .= ';' ;
			// continue only if the attribute has a name
			if( empty( $attributes['name'] ) ) {
				continue ;
			}
			$attribute_string .= trim( $attributes['name'] ) ;
			$n2 = count( $attributes['value'] ) ;
			for( $i2 = 0 ; $i2 < $n2 ; $i2 ++ ) {
				$value = $attributes['value'][$i2] ;
				$price = $attributes['price'][$i2] ;

				if( ! empty( $value ) ) {
					$attribute_string .= ',' . trim( $value ) ;

					if( ! empty( $price ) ) {

						// add the price only if there is an operand
						if( strstr( $price, '+' ) or (strstr( $price, '-' )) or (strstr( $price, '=' )) ) {
							$attribute_string .= '[' . trim( $price ) . ']' ;
						}
					}
				}
			}

		}

		// cut off the first attribute separators on the beginning of the string
		// otherwise you would get an empty first attribute
		$attribute_string = substr( $attribute_string, 1 ) ;
		return trim( $attribute_string ) ;
	}

	/**
	* Clone a product
	* @author RolandD
	* @todo Add sanity checks
	*/
	public function cloneProduct($old_product_id=false, $parent_id=false) {
//		$this->_db = JFactory::getDBO();

		/* Get the product IDs to clone */
		if (!$old_product_id) {
			$cids = JRequest::getVar('cid');
			if (!is_array($cids)) $cids = array($cids);
		}
		else $cids[] = $old_product_id;

		/* Start duplicating */
		foreach ($cids as $key => $old_product_id) {
			/* First copy the product in the product table */
			$product_data = $this->getTable('product');

			/* Load the old product details first */
			$product_data->load($old_product_id);

			/* Reset the product ID, so it will insert */
			$product_data->product_id = null;

			/* Check if we are cloning a child product */
			if ($product_data->product_parent_id > 0 && $parent_id) {
				$product_data->product_parent_id = $parent_id;
				$product_data->product_sku .= '_'.$parent_id;
			}

			/* Set the creation and modification date */
			$time = time();
			$product_data->cdate = $time;
			$product_data->mdate = $time;

			/* Update the product SKU to be unique */
			$product_data->product_sku .= '_'.$time;

			/* Save the new product */
			$product_data->store();

			/* Clone the categoy */
			$q  = "INSERT INTO #__vm_product_category_xref
			  SELECT category_id, ".$product_data->product_id.", MAX(product_list)+1 AS product_list
			  FROM #__vm_product_category_xref WHERE product_id='".$old_product_id."' GROUP BY product_id";
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Clone the manufacturer */
			$q  = "INSERT INTO #__vm_product_mf_xref
			  SELECT ".$product_data->product_id.", manufacturer_id
			  FROM #__vm_product_mf_xref WHERE product_id='".$old_product_id."'";
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Clone the price */
			$q  = "INSERT INTO #__vm_product_price
			  SELECT ".$product_data->product_id.", product_price, product_currency, product_price_vdate, product_price_edate, NOW(), NOW(), shopper_group_id, price_quantity_start, price_quantity_end
			  FROM #__vm_product_price WHERE product_id='".$old_product_id."'";
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Clone the attributes if it is a child product */
			if ($product_data->product_parent_id > 0 && $parent_id) {
				$q  = "INSERT INTO #__vm_product_attribute
				  SELECT attribute_id, ".$product_data->product_id.", attribute_name, attribute_value
				  FROM #__vm_product_attribute WHERE product_id='".$old_product_id."'";
				$this->_db->setQuery($q);
				$this->_db->query();
			}

			/* Lets see if the product has children  */
			if ($this->checkChildProducts($old_product_id)) {
				/* Clone Parent Product's Attributes */
				$q  = "INSERT INTO #__vm_product_attribute_sku
				  SELECT ".$product_data->product_id.", attribute_name, MAX(attribute_list)+1 AS attribute_list
				  FROM #__vm_product_attribute_sku WHERE product_id='".$old_product_id."' GROUP BY product_id";
				$this->_db->setQuery($q);
				$this->_db->query();

				/* Get a list of child products */
				$q = "SELECT product_id FROM #__vm_product WHERE product_parent_id = ".$old_product_id;
				$this->_db->setQuery($q);
				$children = $this->_db->loadResultArray();
				foreach ($children as $child_key => $child_id) {
					$this->cloneProduct($child_id, $product_data->product_id);
				}
			}
		}
		return true;
	}

	/**
	* Remove a product
	* @author RolandD
	* @todo Add sanity checks
	*/
	public function removeProduct($old_product_id=false) {
//		$this->_db = JFactory::getDBO();

		/* Get the product IDs to remove */
		$cids = array();
		if (!$old_product_id) {
			$cids = JRequest::getVar('cid');
			if (!is_array($cids)) $cids = array($cids);
		}
		else $cids[] = $old_product_id;

		/* Start removing */
		foreach ($cids as $key => $product_id) {
			/* First copy the product in the product table */
			$product_data = $this->getTable('product');

			/* Load the product details */
			$product_data->load($product_id);

			/* Delete all children if needed */
			if ($product_data->product_parent_id == 0) {
				/* Delete all children */
				/* Get a list of child products */
				$q = "SELECT product_id FROM #__vm_product WHERE product_parent_id = ".$product_id;
				$this->_db->setQuery($q);
				$children = $this->_db->loadResultArray();
				foreach ($children as $child_key => $child_id) {
					$this->removeProduct($child_id);
				}
			}

			/* Delete attributes */
			$q  = "DELETE FROM #__vm_product_attribute_sku WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete categories xref */
			$q  = "DELETE FROM #__vm_product_category_xref WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete product - manufacturer xref */
			$q = "DELETE FROM #__vm_product_mf_xref WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete Product - ProductType Relations */
			$q  = "DELETE FROM #__vm_product_product_type_xref WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete product votes */
			$q  = "DELETE FROM #__vm_product_votes WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete product reviews */
			$q = "DELETE FROM #__vm_product_reviews WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete Product Relations */
			$q  = "DELETE FROM #__vm_product_relations WHERE product_id = ".$product_id;
			$this->_db->setQuery($q); $this->_db->query();

			/* Delete Prices */
			$q  = "DELETE FROM #__vm_product_price WHERE product_id = ".$product_id;
			$this->_db->setQuery($q);
			$this->_db->query();

			/* Delete the product itself */
			$product_data->delete($product_id);
		}
		return true;
	}

	/**
    * Get a list of product types to assign the product to
    * @author RolandD
    */
    public function getProductTypeList() {
//    	$this->_db = JFactory::getDBO();

    	$cids = JRequest::getVar('cid');

    	$q  = "SELECT t.product_type_id AS value, product_type_name AS text
    		FROM #__vm_product_type t
			LEFT JOIN #__vm_product_product_type_xref x
			ON x.product_type_id = t.product_type_id
			WHERE (product_id != ".$cids[0]." OR product_id IS NULL)
			ORDER BY product_type_list_order ASC";
		$this->_db->setQuery($q);
		return $this->_db->loadObjectList();
    }

    /**
    * Add a product to a product type link
    * @todo Add unique key to table vm_product_product_type_xref
    */
    public function saveProductType() {
//    	$this->_db = JFactory::getDBO();

    	$product_id = JRequest::getInt('product_id', false);
    	$product_type_id = JRequest::getInt('product_type_id', false);

    	if ($product_id && $product_type_id) {
			/* Check if the product link already exist */
			$q  = "SELECT COUNT(*) AS count FROM #__vm_product_product_type_xref ";
			$q .= "WHERE product_id = ".$product_id." AND product_type_id = ".$product_type_id;
			$this->_db->setQuery($q);

			if ($this->_db->loadResult() == 0) {
				$q  = "INSERT INTO #__vm_product_product_type_xref (product_id, product_type_id) ";
				$q .= "VALUES (".$product_id.",".$product_type_id.")";
				$this->_db->setQuery($q);
				$this->_db->query();

				$q  = "INSERT INTO #__vm_product_type_".$product_type_id." (product_id) ";
				$q .= "VALUES (".$product_id.")";
				$this->_db->setQuery($q);
				$this->_db->query();

				return true;
			}
			else return false;
		}
		else return false;
    }

    /**
    * Add a product to the recent products list
    * @author RolandD
    */
    public function addRecentProduct($product_id, $category_id, $maxviewed) {
    	$session = JFactory::getSession();
		$recentproducts = $session->get("recentproducts", null);
		if (empty($recentproducts)) $recentproducts['idx'] = 0;

    	//Check to see if we alread have recent
    	if ($recentproducts['idx'] !=0) {
    		for($i=0; $i < $recentproducts['idx']; $i++){
    			//Check if it already exists and remove and reorder array
    			if ($recentproducts[$i]['product_id'] == $product_id) {
    				for($k=$i; $k < $recentproducts['idx']-1; $k++){
    					$recentproducts[$k] = $recentproducts[$k+1];
    				}
    				array_pop($recentproducts);
    				$recentproducts['idx']--;
    			}
    		}
    	}
    	// add product to recently viewed
    	$recentproducts[$recentproducts['idx']]['product_id'] = $product_id;
    	$recentproducts[$recentproducts['idx']]['category_id'] = $category_id;
    	$recentproducts['idx']++;
    	//Check to see if we have reached are limit and remove first item
    	if($recentproducts['idx'] > $maxviewed+1) {
    		for($k=0; $k < $recentproducts['idx']-1;$k++){
    			$recentproducts[$k] = $recentproducts[$k+1];
    		}
    		array_pop($recentproducts);
    		$recentproducts['idx']--;
    	}
    	$session->set("recentproducts", $recentproducts);
    }

    /**
    * Load a list of recent products
    * @author RolandD
    * @todo Should we setup a session initiator and include the recent products?
    *
    * @param  int $product_id the ID of the product currently being viewed, don't want it in the list
    * @param  int $maxitems the number of items to retrieve
	* @return boolean true if there are recent products, false if there are no recent products
    */
    public function getRecentProducts($product_id=null, $maxitems=5) {
    	if ($maxitems == 0) return;

//    	$this->_db = JFactory::getDBO();
    	$session = JFactory::getSession();
		$recentproducts = $session->get("recentproducts", null);
		if (empty($recentproducts)) $recentproducts['idx'] = 0;

		$k=0;
		$recent = array();
		// Iterate through loop backwards (newest to oldest)
		for($i = $recentproducts['idx']-1; $i >= 0; $i--) {
			//Check if on current product and don't display
			if($recentproducts[$i]['product_id'] == $product_id){
				continue;
			}
			// If we have not reached max products add the next product
			if ($k < $maxitems) {
				$prod_id = $recentproducts[$i]['product_id'];
				$category_id = $recentproducts[$i]['category_id'];
				$q = "SELECT product_name, category_name, c.category_flypage,product_s_desc,product_thumb_image ";
				$q .= "FROM #__vm_product as p,#__vm_category as c,#__vm_product_category_xref as cx ";
				$q .= "WHERE p.product_id = '".$prod_id."' ";
				$q .= "AND c.category_id = '".$category_id."' ";
				$q .= "AND p.product_id = cx.product_id ";
				$q .= "AND c.category_id=cx.category_id ";
				$q .= "AND p.published='1' ";
				$q .= "AND c.published='1' ";
				$q .= "LIMIT 0,1";
				$this->_db->setQuery($q);
				$product = $this->_db->loadObject();

				if ($this->_db->getAffectedRows() > 0) {
					$recent[$k]['product_s_desc'] = $product->product_s_desc;
					$flypage = $product->category_flypage;
					if (empty($flypage)) $flypage = VmConfig::get('flypage');

					$recent[$k]['product_url'] = JRoute::_('index.php?option=com_virtuemart&view=product&product_id='.$prod_id.'&category_id='.$category_id.'&flypage='.$flypage);
					$recent[$k]['category_url'] = JRoute::_('index.php?option=com_virtuemart&view=category&category_id='.$category_id);
					$recent[$k]['product_name'] = JFilterInput::clean($product->product_name);
					$recent[$k]['category_name'] = $product->category_name;
					$recent[$k]['product_thumb_image'] = $product->product_thumb_image;
				}
				$k++;
			}
		}

		$session->set("recentproducts", $recent);

		if($k == 0) return false;
		else return true;
    }
    
   	/**
	* Function Description 
	* 
	* @author RolandD 
	* @todo
	* @see 
	* @access public
	* @return array list of files
	*/
	public function getTemplatesList() {
		jimport('joomla.filesystem.folder');
		$path = JPATH_COMPONENT_SITE.DS.'views'.DS.'productdetails'.DS.'tmpl';
		$files = JFolder::files($path, '.', false, false, array('index.html'));
		$options = array();
		foreach ($files AS $file) {
			$file = str_ireplace('.php', '', $file);
			$options[] = JHTML::_('select.option',  $file, $file);
		}
		return $options;
	}
	
	/**
	 * Decrease the stock for a given product and increase the sales amount
	 * 
	 * @author Oscar van Eijk
	 * @param $_id integer Product ID
	 * @param $_amount integer Amount sold
	 * @access public
	 */
	public function decreaseStockAfterSales ($_id, $_amount)
	{
		$this->decreaseStock($_id, $_amount);
//		$this->_db = JFactory::getDBO();
		$this->_db->setQuery('UPDATE `#__vm_product` '
					. 'SET `product_sales` = `product_sales` + ' . $_amount . ' '
					. 'WHERE `product_id` = ' . $_id
					);
		$this->_db->query();
	}

	/**
	 * Increase the stock for a given product after an order was cancelled
	 * and decrease the sales amount
	 * 
	 * @author Oscar van Eijk
	 * @param $_id integer Product ID
	 * @param $_amount integer Amount sold
	 * @access public
	 */
	public function increaseStockAfterCancel ($_id, $_amount)
	{
		$this->increaseStock($_id, $_amount);
//		$this->_db = JFactory::getDBO();
		$this->_db->setQuery('UPDATE `#__vm_product` '
					. 'SET `product_sales` = `product_sales` - ' . $_amount . ' '
					. 'WHERE `product_id` = ' . $_id
					);
		$this->_db->query();
	}

	/**
	 * Increase the stock for a given product and decrease the sales amount
	 * after an order cancellation
	 * 
	 * @author Oscar van Eijk
	 * @param $_id integer Product ID
	 * @param $_amount integer Original amount sold
	 * @access public
	 */
	public function revertStockAfterCancellation ($_id, $_amount)
	{
		$this->increaseStock($_id, $_amount);
//		$this->_db = JFactory::getDBO();
		$this->_db->setQuery('UPDATE `#__vm_product` '
					. 'SET `product_sales` = `product_sales` - ' . $_amount . ' '
					. 'WHERE `product_id` = ' . $_id
					);
		$this->_db->query();
	}

	/**
	 * Decrease the stock for a given product, calls _updateStock
	 * 
	 * @author Oscar van Eijk
	 * @param $_id integer Product ID
	 * @param $_amount integer Amount sold
	 * @access public
	 */
	public function decreaseStock ($_id, $_amount)
	{
		$this->_updateStock($_id, $_amount, '-');
	}

	/**
	 * Increase the stock for a given product, calls _updateStock
	 * 
	 * @author Oscar van Eijk
	 * @param $_id integer Product ID
	 * @param $_amount integer Amount sold
	 * @access public
	 */
	public function increaseStock ($_id, $_amount)
	{
		$this->_updateStock($_id, $_amount, '+');
	}

	/**
	 * Update the stock for a given product
	 * 
	 * @author Oscar van Eijk
	 * @param $_id integer Product ID
	 * @param $_amount integer Amount sold
	 * @param $_sign char '+' for increase, '-' for decrease
	 * @access private
	 */
	private function _updateStock($_id, $_amount, $_sign)
	{
//		$this->_db = JFactory::getDBO();
		$this->_db->setQuery('UPDATE `#__vm_product` '
					. 'SET `product_in_stock` = `product_in_stock` ' . $_sign . $_amount . ' '
					. 'WHERE `product_id` = ' . $_id
					);
		$this->_db->query();

		if ($_sign == '-') {
			$this->_db->setQuery('SELECT `product_in_stock` < `low_stock_notification` '
					. 'FROM `#__vm_product` '
					. 'WHERE `product_id` = ' . $_id
			);
			if ($this->_db->loadResult() == 1) {
				// TODO Generate low stock warning
			}
		}
	}

}
// No closing tag