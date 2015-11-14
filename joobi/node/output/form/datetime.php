<?php 
/** @copyright Copyright (c) 2007-2015 Joobi Limited. All rights reserved.
* @link joobi.co
* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');














class WForm_Coredatetime extends WForms_default {

	protected $inputType='datetime';	
	protected $dateFormat='datetime';





	function show(){

		if( empty($this->value) || $this->value==4200000003 || substr($this->value, 0, 10)=='0000-00-00' ) return '';

				if( empty($this->element->formatdate) || !is_numeric($this->element->formatdate)) $this->element->formatdate=5;

		if( !is_numeric($this->value)) $this->value=WApplication::stringToTime($this->value);

		switch( $this->element->formatdate){
			case 73:
				$this->value=WTools::durationToString($this->value, true );
				break;
			case 77:
				$this->value=WTools::durationToString($this->value);
				break;
			case 79:
				$mainDateCountDown=WClass::get( 'main.date' );
				$this->value=$mainDateCountDown->countDown( $this->value );
				break;
			default :
				if( empty($this->noTimeZone)){

					
										$this->value=$this->value + WUser::timezone();
				}												if( in_array( $this->element->formatdate, array( 2, 5, 6, 8, 9 ))){
					$tzExact=WUser::get( '_tzExact' );
					$dateFormatNb=( empty($tzExact) && $this->element->formatdate < 100 ) ? $this->element->formatdate + 100 : $this->element->formatdate;
				}else{
					$dateFormatNb=$this->element->formatdate;
				}
				$date2Use=WTools::dateFormat( $dateFormatNb );
				$this->value=WApplication::date( $date2Use, $this->value );
				break;
		}
				return parent::show();

	}
}