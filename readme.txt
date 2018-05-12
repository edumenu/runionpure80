Hi! Thanks for purchase interio theme.

how to run ?
____________


1. install Sass -  http://sass-lang.com/install
2. open comand line / cmd 
3. go to your project directory, enter :

sass --watch scss/theme-light.scss:css/theme-light.css
sass --watch scss/bootstrap-light.scss:css/bootstrap-light.css
to compile light version 

or


sass --watch scss/theme-dark.scss:css/theme-dark.css
sass --watch scss/bootstrap-dark.scss:css/bootstrap-dark.css
to compile dark version

output files you will find in css directory.
3. Enjoy!


how to use add to cart button?
______________________________

example code:

<span class="btn btn-default add-item" data-image="img/product.png" data-name="Textile classic grey chair" data-cost="400.00" data-id="1" >
<span class="ti-shopping-cart"></span>add to cart
</span> 

data attributes
data-image="" - to define url to img (using in cart)
data-name="" - to define name, this name will show in cart
data-cost="" - cost of your item without delivery
data-id="" - uniqe id for each item 

your add to cart button need each data attribute and class: "add-item"

pay pal settings (line 103 of index file)
_________________________________________

name="business" - your pay pal e-mail
name="item-name" - tell about your products 
name="currency_code" - your currency code

don't change:
name="cmd" value="_xclick"
name="amount"

example form:

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="cart-form" id="cart-form">
		<!-- Identify your business so that you can collect the payments. -->
		<input type="hidden" name="business" value="yourpaypal@email.com">
		<!-- Specify a Buy Now button. -->
		<input type="hidden" name="cmd" value="_xclick">
		<!-- Specify details about the item that buyers will purchase. -->
		<input type="hidden" name="item_name" value="Interio store - checkout">
		<input type="hidden" name="amount" id="amount" value="">
		<input type="hidden" name="currency_code" value="USD">
		<!-- Display the payment button. -->
		<button type="submit" name="submit" class="btn btn-default btn-lg">
		pay pal checkout <span class="ti-arrow-right"></span>
		</button>
	</form>
