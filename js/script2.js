function stockCheck(val,stock){
	if(val>stock && stock!==0){
		document.getElementById("buy").disabled = true;
		document.getElementById("add-cart").disabled = true;
		document.getElementById("qty").style = "border: 1px solid red;border-radius:2px";
		document.getElementById("stock-msg").innerHTML="Only "+stock+" items left! Please choose a quantity less than or equal to <u>"+stock+"</u> to place an order.";
	}
	else if(stock>0){
		document.getElementById("buy").disabled = false;
		document.getElementById("add-cart").disabled = false;
		document.getElementById("qty").style = "border: 1px solid black;border-radius:2px";
		document.getElementById("stock-msg").innerHTML="<span style='color:green'>In Stock</span>";
	}
}