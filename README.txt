Welcome to MBCTest

http://www.beyerbeyer.co.uk/mbctest/index.php/ctest

Goto:
Number, Four Operations, Integers, Addition.
Select products from "My Products"

Click on Cart
Click on Proceed to Checkout.

Enter Paypal Sandbox account details.

email: matthewbeyer-test2@hotmail.com
password: mothership2

and Login.
Select Continue.

Return to 'Checkout successful".

Key functions:
index() to load home view

To view product details and image:
change_content(link_name) to load list of chosen category
number() loads number list into home page
node_select.js responds when class="number_node" is clicked on
my_browsing() to to display list of products of selected category id
load->model('ctest_model');
get_products_by_cat_id($cat_id)
load->view('my_browsing', $data) to display list of products of selected category id
node_select.js  to invoke an ajax response in when an item is clicked on
ctest/load_item_view() to load item
ctest_model->get_product_by_item_id($item_id); to get product details
load->view('product_view', $data) to load product details and image into home page

To complete checkout:

Three cURL requests are made:
SetExpressCheckout
GetExpressCheckoutDetails
DoExpressCheckoutPayment

ctest/cart() to load shopping cart into home page
load->model('products_model') to load database functions
products_model->get_products() to get products in cart
load->view('cart', $products) to load cart into home page
index.php/checkout_pp to begin checkout
load->library('paypal') to load paypal class
cart->contents() to get contents of cart
paypal->pp_merchant($nvpreq) to SetExpressCheckout and send cart and user details to paypal and get a token from paypal
header("Location:".$payPalURL) to load paypal page using token.
/index.php/ctest/pp_review& 
load->model('pp_review');
load->library('paypal'); 
paypal->pp_merchant($nvpreq) to GetExpressCheckoutDetails
paypal->pp_merchant($nvpreq) to DoExpressCheckoutPayment
ctest/checkout_success() to load success message in home page.


To add an item:
ctest/add_or_update() to check if new item needs to be added to cart.




