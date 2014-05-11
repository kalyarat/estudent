
<?php
class Users extends \phalcon\Mvc\controller{
	public function indexAction()
	{
		$user = new Users();
		$this->view->name = "kalyarat";
		$this->view->items = Users::find();
	}
}