<?php
/// Code by Verdi.K
///
/// 2017 Copyright All rights reserved.

require_once("./config.php");
require_once("./session.php");

$router = new Buki\Router();
$request = new Core\Request();

$layout = new Core\Template("layout");
$layout->set("sitename", $sitename);
$layout->set("sitelink", $sitelink);


$router->get("/", function() use (&$layout) {

	$index = new Core\Template("index");

    // Highlighted products
    $highlighted = new Views\IndexSpotlight();
    $index->set("spotlight", $highlighted->value());

	// Products list
	$productList = new Views\ProductList("New");
	$index->set("newProductList", $productList->value());

	$productList = new Views\ProductList("Top");
	$index->set("topProductList", $productList->value());

	// Blog list
	$blogList = new Views\BlogList();
	$index->set("blogList", $blogList->value());

	// Finalize page
	$layout->set("pageName", "Home");
	$layout->set("pageContent", $index->output());
	echo $layout->output();
});


$router->get("/category/{u}/", function($category) use (&$layout) {

	$cat = new Core\Template("category");

	$productList = new Views\CategoryList($category);
	$cat->set("itemList", $productList->value());

	// Finalize page
	$layout->set("pageName", $category);
	$layout->set("pageContent", $cat->output());
	echo $layout->output();
});


$router->get("/register", function() use (&$layout) {

	$register = new Core\Template("register");
	$user = new Model\User();

	$register->set("token",$user->generateFormToken("register"));

	// Finalize page
	$layout->set("pageName", "Sign Up");
	$layout->set("pageContent", $register->output());
	echo $layout->output();
});


$router->get("/contact", function() use (&$layout) {

	$contact = new Core\Template("contact");

	// Finalize page
	$layout->set("pageName", "Contact");
	$layout->set("pageContent", $contact->output());
	echo $layout->output();
});

$router->get("/cart", function() use (&$layout) {

	$cart = new Core\Template("cart");
	$cartList = new Views\CartList();

	$cart->set("cartItems", $cartList->value());


	// Finalize page
	$layout->set("pageName", "Cart");
	$layout->set("pageContent", $cart->output());
	echo $layout->output();
});


$router->get("/account", function() use (&$layout) {

	$account = new Core\Template("account");

	// Finalize page
	$layout->set("pageName", "Account");
	$layout->set("pageContent", $account->output());
	echo $layout->output();
});


//**** POST ROUTES **** //

$router->post("/register", function() use (&$layout) {

	$register = new Core\Template("register");
	$user = new Controller\UserController();
	$u = new Model\User(); // from middleware

	if($user->create())
		$u->redirectTo("login");
	else
		echo $user->displayErrors();


	// Finalize page
	$register->set("token",$u->generateFormToken("register"));
	$layout->set("pageName", "Sign Up");
	$layout->set("pageContent", $register->output());
	echo $layout->output();
});



// -------------------------- //
// *** ADMIN PANEL ROUTES ***//
// -------------------------- //

$panel = new Core\Template("panel-layout");
$panel->set('sitelink', $sitelink);
$panel->set('sitename', $sitename);


$router->group('admin', function($r) use (&$panel) {


	$r->get('/', function() use (&$panel) {

		$data = new Model\Dashboard();
		$home = new Views\Panel\Dashboard($data);

		// Finalize page
		$panel->set("pageName", "Dashboard");
		$panel->set("pageContent", $home->output());
		echo $panel->output();
	});


	$r->get('/orders', function() use (&$panel) {

		$orders = new Views\Panel\Orders();
		$list = new Views\Panel\PanelList("order");

		$orders->set('orderList', $list->value());

		// Finalize page
		$panel->set("pageName", "Orders");
		$panel->set("pageContent", $orders->output());
		echo $panel->output();
	});


	$r->get('/products', function() use (&$panel) {

		$user = new Model\User(); // from middleware
		$prod = new Views\Panel\Products();
		$list = new Views\Panel\PanelList("product");

		$prod->set('productList', $list->value());
		$prod->set('token', $user->generateFormToken('product'));

		// Finalize page
		$panel->set("pageName", "Products");
		$panel->set("pageContent", $prod->output());
		echo $panel->output();
	});


	$r->post('/products/add', function() {

		$user = new Model\User(); // from middleware
		$controller = new Controller\ProductController();

		if($controller->create()) {
			echo json_encode([
					'success' => true,
					'message' => $controller->successMessage("Product was successfully created.")]);
		} else {
			echo json_encode([
					'success' => false,
					'message' => $controller->dispatchErrors()]);
		}
	});


	$r->post('/products/delete/{i}', function($id) {

		$user = new Model\User(); // from middleware
		$controller = new Controller\ProductController();

		if($controller->delete($id)) {
			echo json_encode([
					'success' => true,
					'message' => $controller->successMessage("Product was successfully deleted.")]);
		} else {
			echo  json_encode([
					'success' => true,
					'message' => $controller->dispatchErrors()]);
		}
	});


	$r->get('/users', function() use (&$panel) {

		$userpage = new Views\Panel\Users();
		$list = new Views\Panel\PanelList("user");

		$userpage->set('userList', $list->value());

		// Finalize page
		$panel->set("pageName", "Users");
		$panel->set("pageContent", $userpage->output());
		echo $panel->output();
	});


	$r->post('/users/delete/{i}', function($id) use (&$panel) {

		$controller = new Controller\UserController();

		if($controller->deleteUser($id)) {
			echo json_encode([
				'success' => true,
				'message' => $controller->successMessage("User was successfully deleted.")]);
		} else {
			echo json_encode([
				'success' => false,
				'message' => $controller->dispatchErrors()]);
		}
	});


	$r->get('/settings', function() use (&$panel) {

		$settings = new Views\Panel\Settings();

		// Finalize page
		$panel->set("pageName", "Settings");
		$panel->set("pageContent", $settings->output());
		echo $panel->output();
	});
});

// *** MIDDLEWARES *** //

function isLoggedIn() {
    $user = new Model\User();

    if($user->isLoggedIn())
        $user->loadUser($request->getSessions->get('user_session'));
    else
        echo 'not logged in';//$user->redirectTo('/nstore/login');
}

function isAdmin() {
    $user = new Model\User();

    if($user->isLoggedIn())
        $user->loadUser($request->getSessions->get('user_session'));
    else
        echo 'not logged in';//$user->redirectTo('/nstore/login');

    if(!$user->isAdmin())  echo 'not admin';//$user->redirectTo('/nstore/');
}

function restrictIfConnected() {

}

$router->run();
?>
