
<?php
class IndexController extends \phalcon\Mvc\Controller{
	public function IndexAction(){
		$user = new Users();
			$this->view->items = Users::find();
	}
}