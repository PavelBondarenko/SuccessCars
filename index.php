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
<input type=hidden name="retURL" value="https://web-to-lead-test1.herokuapp.com/">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="bandarenka.pavel2002@gmail.com">                                 -->
<!--  ----------------------------------------------------------------------  -->

<div class="row">
    <div class="col">
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text">
    </div>
    </div>

    <div class="col">
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text">
    </div>
    </div>

    <div class="col">
    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text">
    </div>
    </div>

    <div class="col">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text">
    </div>
    </div>

    <div class="col">
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text">
    </div>
    </div>

    <div class="col">
    <div class="form-group">
        Product:<select  id="00N5j000000pTbO" name="00N5j000000pTbO" title="Product"><option value="">--None--</option><option value="Car">Car</option>
            <option value="Part">Part</option>
            <option value="Accessory">Accessory</option>
            </select>
    </div>
    </div>

    <div class="g-recaptcha" data-sitekey="6LcZn4AdAAAAAOlrL-IeD55FyZ6m1o0w81AOLNm2"></div>

    <div class="col">
    <input type="submit" value="Submit" name="submit">
    </div>
</div>



</form>
