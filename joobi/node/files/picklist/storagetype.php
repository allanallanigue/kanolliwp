<?php 
/** @copyright Copyright (c) 2007-2015 Joobi Limited. All rights reserved.
* @link joobi.co
* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');







class Files_Storagetype_picklist extends WPicklist {
function create() {



	$this->addElement( '1', WText::t('1349726930JFTH') );

	$this->addElement( '3', 'Amazon S3' );

	$this->addElement( '5', 'DropBox' );


	return true;



}}