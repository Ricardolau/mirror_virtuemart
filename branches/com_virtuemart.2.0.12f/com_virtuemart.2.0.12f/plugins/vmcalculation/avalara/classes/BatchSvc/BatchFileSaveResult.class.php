<?php
if (!defined('_JEXEC'))
die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
/**
 * BatchFileSaveResult.class.php
 */

/**
 * 
 *
 * @author    Avalara
 * @copyright � 2004 - 2011 Avalara, Inc.  All rights reserved.
 * @package   Batch
 */
class BatchFileSaveResult extends BaseResult {
  private $BatchFileId; // int

  public function setBatchFileId($value){$this->BatchFileId=$value;} // int
  public function getBatchFileId(){return $this->BatchFileId;} // int

}

?>
