<?
namespace Routes;

use \Libraries\Router as Router;
Class Route{

	public $router;


	public function __construct(){

		$this->router = new Router();


		$match = $this->router->match();
		if( $match && is_callable( $match['target'] ) ) {
		    call_user_func_array( $match['target'], $match['params'] );
		} else {
		    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
		}
	}


}
?>