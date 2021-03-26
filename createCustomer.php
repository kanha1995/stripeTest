
<?php


require_once('./stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_51GxbWeLL60kQSHtAyRr8YZPKU4OgwhUee9jS4K2ql8hWHRjpVc0loftEvEiwcfw22HEFo7i5KsaZXEkvGXUewhcg00ocHRIsmb');


$email =  $_POST['email'];
$fullName = $_POST['name'];
$phone  = $_POST['phone'];


$key = \Stripe\Customer::create([
  'description' => 'testing', 'email' => "$email", 'phone' => "$phone", 'name' => $fullName
]);


echo json_encode($key);

?>
