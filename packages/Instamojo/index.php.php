<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://js.instamojo.com/v1/checkout.js"></script>
<button class="btn" onclick="payment.actionCheckout();">Checkout</button>
<script type="text/javascript">

var payment = {
	actionCheckout:function(){
		$.ajax({
			url:'call_api.php',
			success:function(response){
				console.log(response);
  			Instamojo.open(response);
			}
		});
	}
}
</script>