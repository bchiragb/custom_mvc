<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/db.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();

// Set the base path to run the app in a subdirectory.
// This path is used in urlFor().
$app->add(new BasePathMiddleware($app));

$app->addErrorMiddleware(true, true, true);



//simple
$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Hello");
    return $response;
})->setName('root');


//simple2
$app->get('/cc', function ($request, $response, $args) {
	$response->write("Welcome to Slim!");
	return $response;
});


//argument in api
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

//get
$app->get('/books', function($request, $response, $args) {
	$db = new db();
    $conn = $db->connect();
	$query = "select * from library order by book_id";
	$result = $conn->query($query);
	$customers = $result->fetchAll(PDO::FETCH_OBJ);
	$response->getBody()->write(json_encode($customers));
    return $response->withHeader('content-type', 'application/json')->withStatus(200);
});

//insert with row data in body { "name" : "amy", "isbn" : "amy@mail.com", "category" : "123449988383" }
//http://localhost/slim/books/add
$app->post('/books/add', function (Request $request, Response $response, array $args) {
	$data = $request->getParsedBody();
	$name = $data["name"];
	$isbn = $data["isbn"];
	$category = $data["category"];
	$sql = "INSERT INTO library (book_name, book_isbn, book_category) VALUES (:name, :isbn, :category)";

	try {
		$db = new Db();
		$conn = $db->connect();
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':isbn', $isbn);
		$stmt->bindParam(':category', $category);
		$result = $stmt->execute();
		$db = null;
		$response->getBody()->write(json_encode($result));
		return $response->withHeader('content-type', 'application/json')->withStatus(200);
	} catch (PDOException $e) {
		$error = array("message" => $e->getMessage());
		$response->getBody()->write(json_encode($error));
		return $response->withHeader('content-type', 'application/json')->withStatus(500);
	}
});

//update with row data in body { "name" : "amy", "isbn" : "amy@mail.com", "category" : "123449988383" }
//http://localhost/slim/books/update/5
$app->put('/books/update/{id}', function (Request $request, Response $response, array $args){
	$id = $request->getAttribute('id');
	$data = $request->getParsedBody();
	$name = $data["name"];
	$isbn = $data["isbn"];
	$category = $data["category"];
	$sql = "UPDATE library SET book_name = :name, book_isbn = :isbn, book_category = :category WHERE book_id = $id";

	try {
		$db = new Db();
		$conn = $db->connect();
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':isbn', $isbn);
		$stmt->bindParam(':category', $category);
		$result = $stmt->execute(); $db = null;
		$msgg = "Update successful! ";
		$response->getBody()->write(json_encode($msgg)); //$result
		return $response->withHeader('content-type', 'application/json')->withStatus(200);
	} catch (PDOException $e) {
		$error = array("message" => $e->getMessage());
		$response->getBody()->write(json_encode($error));
		return $response->withHeader('content-type', 'application/json')->withStatus(500);
	}
});


//http://localhost/slim/books/delete/5 --- delete
$app->delete('/books/delete/{id}', function (Request $request, Response $response, array $args) {
	$id = $args["id"];
	$sql = "DELETE FROM library WHERE book_id = $id";
	try {
		$db = new Db();
		$conn = $db->connect();
		$stmt = $conn->prepare($sql);
		$result = $stmt->execute();
		$msgg = "Delete successful!";
		$response->getBody()->write(json_encode($msgg));
		return $response->withHeader('content-type', 'application/json')->withStatus(200);
	} catch (PDOException $e) {
		$error = array("message" => $e->getMessage());
		$response->getBody()->write(json_encode($error));
		return $response->withHeader('content-type', 'application/json')->withStatus(500);
	}
});


//get data using form-data  name-123
$app->post('/data', function (Request $request, Response $response, array $args) {
    $input = $request->getParsedBody();
    $msgg = $input['name'];
    $response->getBody()->write(json_encode($msgg));
	return $response->withHeader('content-type', 'application/json')->withStatus(200);
});



//insert with raw data in body { "name" : "amy", "category" : "1234567890" }
//http://localhost/slim/books/addx
$app->post('/books/addx', function (Request $request, Response $response, array $args) {
	$datax = $request->getParsedBody();
	$response->getBody()->write(json_encode($datax));
	return $response->withHeader('content-type', 'application/json')->withStatus(200);
});





/* 

$app->redirect('/books', '/library', 301);
$app->get('/users/{id:[0-9]+}', function ($request, $response, array $args) {
$app->map(['GET', 'POST'], '/books', function ($request, $response, array $args) {	
$app->patch('/books/{id}', function ($request, $response, array $args) {
$app->any('/books/[{id}]', function ($request, $response, array $args) {
$app->get('/news[/{year}[/{month}]]', function ($request, $response, array $args) {
$app->get('/news[/{params:.*}]', function ($request, $response, array $args) { $params = explode('/', $args['params']);

$app->get('/tickets', function (Request $request, Response $response) {
    $this->logger->addInfo("Ticket list");
    $mapper = new TicketMapper($this->db);
    $tickets = $mapper->getTickets();
    $response->getBody()->write(var_export($tickets, true));
    return $response;
});

*/

$app->run();

