// start add commas input number

$('input.number').keyup(function(event) {
// skip for arrow keys
if(event.which >= 37 && event.which <= 40) return;


$(this).val(function(index, value) {
  return value
  .replace(/\D/g, "")
  .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  ;
});
});
// end add commas input number
 
// formar number output
Number.prototype.format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
        num = this.toFixed(Math.max(0, ~~n));
    
    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};

// cal rate
function convertBuy(degree) {
	var x;
	if (degree == "CBUY") {
		x = document.getElementById("rmb-buy").value;
		x = x.replace (/,/g, "");
		var rate = document.getElementById("rate-buy").value;
		var F = x*rate;  
		var TOTALBUY = F.format(0, 3, ',', '.');
		document.getElementById("vnd-buy").value = TOTALBUY;
	} else {  
		x = document.getElementById("vnd-buy").value;
		x = x.replace (/,/g, "");
		var rate = document.getElementById("rate-buy").value;
		RMB = x/rate;
		var TOTALBUY = RMB;
		var TOTALBUY = TOTALBUY.format(0, 3, ',', '.');
		var CBUY = (TOTALBUY);   
		document.getElementById("rmb-buy").value = CBUY;
	}
}

// cal rate
function convertSell(degree) {
	var x;
	if (degree == "CSELL") {
		x = document.getElementById("vnd-sell").value;
		x = x.replace (/,/g, "");
		var rate = document.getElementById("rate-sell").value;
		RMB = x/rate;
		var TOTALSELL = RMB;
		var TOTALSELL = TOTALSELL.format(0, 3, ',', '.');  
		document.getElementById("rmb-sell").value = TOTALSELL;
	} else {  
		x = document.getElementById("rmb-sell").value;
		x = x.replace (/,/g, "");
		var rate = document.getElementById("rate-sell").value;
		var F = x*rate;
		var CSELL = F.format(0, 3, ',', '.');
		document.getElementById("vnd-sell").value = CSELL;
	}
}

//add the class to the clicked element                      
$(".btn-tq-vn").click(function() { 
	$(this).addClass("actived");
	$(".btn-vn-tq").removeClass("actived");
	$("#form-vn-tq").addClass("hidden");
	$("#form-tq-vn").removeClass("hidden");  
});
$(".btn-vn-tq").click(function() { 
	$(this).addClass("actived");
	$(".btn-tq-vn").removeClass("actived");
	$("#form-tq-vn").addClass("hidden");
	$("#form-vn-tq").removeClass("hidden");    
});