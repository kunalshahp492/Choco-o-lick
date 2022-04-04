<html>
<body>
<form action="https://www.example.com/payment/success/" method="POST" > 
			<!--<script style=" display:block;"
				src="https://checkout.razorpay.com/v1/checkout.js"    
				data-key="rzp_test_HN1Lu3k0ky5T6L"
				data-order_id="order_EMo6ke3pstvJdG"
				data-buttontext="A STEP TOWARDS A GOOD CAUSE"    
				data-name="Welfare"    
				data-description=""    
				data-image="https://example.com/your_logo.jpg"     
				data-theme.color="#000000"
				></script>-->
				<div class="information-wrapper">
				<button class="submit check_out" >PAY NOW
</button></div>

			<script src="https://checkout.razorpay.com/v1/checkout.js"></script><script>
var options = {
    "key": "rzp_test_H9ATd0Ov9XeDCO",
    "amount": 100, //  = INR 1
    "name": "Welfare",
    "description": "",
    "image": "https://cdn.razorpay.com/logos/7K3b6d18wHwKzL_medium.png",
    "handler": function (response){
        alert(response.razorpay_payment_id);
    },
    "theme": {
        "color": "#6A59CE"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}</script>
			<input type="hidden" custom="Hidden Element" name="hidden">
		</form>
        </body>
        </html>