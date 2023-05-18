<?php
$consumer_key="ck_478d793df5c97cb79b940d37f3cd849a2d2ee3b5";
$customer_key="cs_d041e70813df6a4ff57b4d1332ce3c5cb8a14be7";
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
  'http://localhost/Ecommerce-api/eshop',
  $consumer_key,
  $customer_key,
  [
    'version' => 'wc/v3/',
  ]
);

$data = [
    'title' => 'The new title!',
    'user_id' => 24,
    'staus' => 'shared',
];
print_r($woocommerce->post('wishlist/create', $data));
?>
