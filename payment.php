<html>
<head>

<title>Sign up Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:slateblue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>

</head>
 
<body>

<form name="registration" action = "SignUp.php"  method="POST">
 
<table align="center" cellpadding = "10">
 
<tr>
<td>Card Type</td>
 
<td>
<select name="card" id="card">
<option value="1">Credit</option>
<option value="2">Debit</option>
</td>
</tr>

<tr>
<td> Card Number</td>
<td><input type="text" name="number" maxlength="16"/>
</td>
</tr>
 
<tr>
<td>CVV</td>
<td><input type="password" name="cvv" maxlength="3"/>

</td>
</tr> 
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>Expiry Date</td>
 
<td>
<select id="by" name="Year">
 
<option value="-1">Year:</option>
<option value="2016">2018</option>
<option value="2015">2019</option>
<option value="2014">2020</option>
<option value="2013">2023</option>
<option value="2012">2024</option>
<option value="2011">2025</option>
<option value="2010">2026</option>
<option value="2009">2027</option>
<option value="2008">2028</option>
<option value="2007">2029</option>
<option value="2006">2030</option>
<option value="2005">2031</option>
</select>
 
<select id="bm" name="Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 

</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>Cardholder Name</td>
<td><input type="text" name="cardholder" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="phone_no" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<tr><td><img src="captcha.php"></td><td><input class="textbox" type="text" name="code"></td></tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">

<button type="button" id="mybtn" style="color:white;background-color:pink;color:black;height:40px;width:100px;margin-left:100px"><a href="end.html">Pay</a></button>
</td>
</tr>
</table>
 
</form>
 
</body>
</html>