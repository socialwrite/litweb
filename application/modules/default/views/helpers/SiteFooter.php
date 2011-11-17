<?php
/**
 *
 * @author Ferran Rodriguez
 * @version 
 */
require_once 'Zend/View/Interface.php';

/**
 * SiteHeader helper
 *
 * @uses viewHelper Zend_View_Helper
 */
class Zend_View_Helper_SiteFooter {
	
	/**
	 * @var Zend_View_Interface 
	 */
	public $view;
	
	/**
	 * 
	 */
	public function siteFooter() {
		$footer = "<div id='footer' style='background-color: #EEEEEE; height: 30px;'>
    <div id='footer-logo' style='float: left'>
        <b>Footer</b>
    </div>
</div>";
		return $footer;
	}
	
	/**
	 * Sets the view field 
	 * @param $view Zend_View_Interface
	 */
	public function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}
}
