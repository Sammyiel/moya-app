<style type="text/css"> body {
    font-size: 0.9em;
    color: #212121;
    font-family: Arial;
}
.container{
	width: 250px;
    margin: 30px auto;
    box-sizing: border-box;
  }

#frm-mobile-verification {
    border: #E0E0E0 1px solid;
    border-radius: 1px;
    padding: 30px;



    text-align: center;
}

.form-heading {
    font-size: 1.5em;
    margin-bottom: 30px;
}

.form-row {
    margin-bottom: 30px;
}

.form-input {
    padding: 10px 20px;
    width: 20%;
    box-sizing: border-box;
    border-radius: 3px;
    border: #E0E0E0 1px solid;
}

.btnSubmit {
    background: #4cb7ff;
    padding: 8px 20px;
    border: #47abef 1px solid;
    border-radius: 3px;
    width: 20%;
    color: #FFF;
}





</style>


	<div class="container">
		
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			<center><div class="form-row">
				<input type="number" id="mobile" class="form-input"
					placeholder="Enter mobile">
			

			<input type="button" class="btnSubmit" value="Submit"
				onClick="send">
                <input type="number"  id="mobileOtp" class="form-input" placeholder="Enter the code">   
                <input id="verify" type="button" class="btnSubmit" value="Continue" onClick="verifyOTP();">     
				<div class="form-row">
				
	

		
	</div>
		</form></center>
	</div>

	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>
</html>