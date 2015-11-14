<?php 
/** @copyright Copyright (c) 2007-2015 Joobi Limited. All rights reserved.
* @link joobi.co
* @license GNU GPLv3 */


defined('JOOBI_SECURE') or die('J....');

















class WRender_Form_class extends Theme_Render_class {



	public static $formDirection = null;

	public static $formTipStyle = null;











	public function render() {

		if ( !isset(self::$formDirection) ) {

			self::$formDirection = $this->value( 'form.direction' );

			self::$formTipStyle = $this->value( 'form.tooltip' );



		}
		return self::$formDirection;

	}




}




class WForms_default extends WForms_standard {



	function preCreate() {



		if ( 'form-horizontal' == WView::$directionForm[$this->yid] ) {

			if ( isset( $this->element->classes ) ) {

				$this->element->classes = 'form-control ' . $this->element->classes;

			} else {

				if ( empty( $this->element->spantit ) ) {

					$this->element->classes = 'form-control';




				}


			}
		}


		return true;

	}




	function preShow() {



		if ( 'form-horizontal' == WView::$directionForm[$this->yid] ) {

			if ( isset( $this->element->classes ) ) {

				$this->element->classes = $this->element->classes;

			} else {

				$this->element->classes = '';

			}
		}


		return true;



	}








	protected function wrapperCreate() {



		if ( 'form-horizontal' == WView::$directionForm[$this->yid] ) {





		switch( $this->element->type ) {



			case 'output.select':

				$this->content = '<div class="col-sm-10 pickList">' . $this->content . '</div>';

				break;



			case 'main.trans':

			case 'main.transarea':


				$this->content = '<div class="col-sm-10"><div class="input-append">' . $this->content . '</div></div>';

				break;































































			default:

				if ( empty( $this->element->spantit ) ) {

					$this->content = '<div class="col-sm-10">' . $this->content . '</div>';

				} else {

					$this->content = '<div>' . $this->content . '</div>';

				}


				break;



		}




		}


	}












	protected function wrapperShow() {



		switch( $this->element->type ) {



			default:

				if ( empty( $this->element->spantit ) ) {

					$this->content = '<div class="col-sm-10">' . $this->content . '</div>';

				} else {

					$this->content = '<div>' . $this->content . '</div>';

				}


				break;



		}







	}




}