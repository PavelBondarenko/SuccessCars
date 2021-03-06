<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<link rel="stylesheet" href="main.css">
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
</script>

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->

<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<input type=hidden name='captcha_settings' value='{"keyname":"product","fallback":"true","orgId":"00D5j000001uVaT","ts":""}'>
<input type=hidden name="oid" value="00D5j000001uVaT">
<input type=hidden name="retURL" value="https://sucesscarsform.herokuapp.com/">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="bandarenka.pavel2002@gmail.com">                                 -->
<!--  ----------------------------------------------------------------------  -->

<label for="company">Company</label><input  id="company" maxlength="40" name="company" size="20" type="text" required /><br>

<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required /><br>

<label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required /><br>

<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="email" required /><br>

<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" required /><br>

Product:<select  id="00N5j000000pTbO" name="00N5j000000pTbO" title="Product" required><option value="">--None--</option>
<option value="R001C1">Renault Logan</option>
<option value="R002C2">Renault Logan Stepway</option>
<option value="R003C3">Renault Sandero</option>
<option value="R004C4">Renault Sandero Stepway</option>
<option value="R005E1">K7M</option>
<option value="R006E2">K4M</option>
<option value="R007E3">H4M</option>
<option value="HK001C1">Kia Rio</option>
<option value="HK002C2">Kia Rio X-Line</option>
<option value="HK003C3">Hyundai Accent</option>
<option value="HK004C4">Hyundai Solaris</option>
<option value="HK005E1">G4LC</option>
<option value="HK006E2">G4FG</option>
<option value="VAG001C1">Volkswagen Polo Sedan</option>
<option value="VAG002C2">Volkswagen Polo 2021</option>
<option value="VAG003C3">Skoda Rapid</option>
<option value="VAG004E1">CZCA</option>
<option value="VAG005E2">CFW</option>
<option value="VAG006E3">CWVA</option>
<option value="VAG007E4">CFNA</option>
<option value="VAG008E5">CFNB</option>
<option value="L001C1">Lada Vesta</option>
<option value="L002C2">Lada Xray</option>
<option value="L003E1">VAZ-21179</option>
<option value="L004E2">VAZ-21129</option>
<option value="R008A1">Carpets Renault</option>
<option value="HK007A1">Carpets Hyundai</option>
<option value="HK008A2">Carpets Kia</option>
<option value="VAG009A1">Carpets Volkswagen</option>
<option value="VAG010A2">Carpets Skoda</option>
<option value="L005A1">Carpets Lada</option>
<option value="MI001A1">Phone holder Xiaomi</option>
</select><br>

<div class="g-recaptcha" data-sitekey="6LcZn4AdAAAAAOlrL-IeD55FyZ6m1o0w81AOLNm2"></div><br>
<input type="submit" name="submit">

</form>
