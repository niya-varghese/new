<html>
<head>
<title>HTML Calculator</title>
</head>
<body bgcolor= "#F8F8FF" text= "black">
<form name="calculator" >
</br>
<center><b> CALCULATOR</b>
</br>
<input type="button" value="10" onClick="document.calculator.ans.value+='1'">
<input type="button" value="2" onClick="document.calculator.ans.value+='2'">
<input type="button" value="3" onClick="document.calculator.ans.value+='3'">
</br>
<input type="button" value="4" onClick="document.calculator.ans.value+='4'">
<input type="button" value="5" onClick="document.calculator.ans.value+='5'">
<input type="button" value="6" onClick="document.calculator.ans.value+='6'">
</br>
<input type="button" value="7" onClick="document.calculator.ans.value+='7'">
<input type="button" value="8" onClick="document.calculator.ans.value+='8'">
<input type="button" value="9" onClick="document.calculator.ans.value+='9'">
</br>
<input type="button" value="0" onClick="document.calculator.ans.value+='0'">
</br>
<input type="button" value="-" onClick="document.calculator.ans.value+='-'">
<input type="button" value="+" onClick="document.calculator.ans.value+='+'">
<input type="button" value="*" onClick="document.calculator.ans.value+='*'">
<input type="button" value="/" onClick="document.calculator.ans.value+='/'">
 

</br>
<input type="reset" value="clear">
<input type="button" value="=" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)">
<br><b>Result is:</b> <input type="textfield" name="ans" value="">
</form>
</body>
</html>
