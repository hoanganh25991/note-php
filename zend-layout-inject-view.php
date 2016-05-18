<?php
/**
 * in zend, inject view into layout
 * ONLY happen inside ACTION
 * not in constructor
 */
//inside layout
//<?php echo $this->msg;
//we call this $childView, under the name "msg"
class PostController extends AbstractActionController{

	public function __construct(){
		/**
		 * not work
		 */
		$this->layout()->addChild($childView, "msg");
	}

	public function indexAction(){
		/**
		 * work
		 */
		$this->layout()->addChild($childView, "msg");
	}
}

////////////////////////////////////////////////
// HOW CAN WE INJECT SOMETHING INTO METHOD??? //
///////////////////////////////////////////////
