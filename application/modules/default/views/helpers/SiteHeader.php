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
class Zend_View_Helper_SiteHeader {
	
	/**
	 * @var Zend_View_Interface 
	 */
	public $view;
	
	/**
	 * 
	 */
	public function siteHeader() {
		$header = "<div id='header' style='background-color: #EEEEEE; height: 30px;'>
    <div id='header-logo' style='float: left'>
        <b>ZF Quickstart Application</b>
    </div>
    <div id='header-navigation' style='float: right'>
        <a href='<?php echo $this->url(array('controller'=>'guestbook'), 'default', true) ?>'>Guestbook</a>
        <a href='<?php echo $this->url(array('controller'=>'usuarios'), 'default', true) ?>'>Usuarios</a>
        <a href='<?php echo $this->url(array('controller'=>''), 'default', true) ?>'>SALIR</a>
    </div>
</div>";
		return $header;
	}
	
	/**
	 * Sets the view field 
	 * @param $view Zend_View_Interface
	 */
	public function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}
}
