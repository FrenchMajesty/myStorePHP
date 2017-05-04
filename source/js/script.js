// Checkbox
    $(function () {
      const sameAddressCheckBox = document.querySelector('#same-address')
      sameAddressCheckBox.addEventListener('change', toggleBillingAddress)
    })

    // Index page price highlight
    $('div[id^=text]').hover(function () {
        $(this).find('p, a').css('color', '#FF6E27');
    }, function() {
        $(this).find('p, a').css('color', 'black');
    });

function toggleBillingAddress(e) {
    let billingSection = $('.edge:last')
        billingSection.slideToggle(500, () => {

        if(billingSection.is(':visible')){
            // Require inputs
            billingSection.find('input').each((i,input) => input.setAttribute('required',''))

        }else {
            // Nullify inputs
            billingSection.find('input').each((i,input) => input.removeAttribute('required'))
        }
    })
}

 /* JAVASCRIPT BELOW

var pdetails = document.getElementsByClassName('product-details');
var rowDivs = document.getElementById('sec0');
//var	textDiv = document.getElementById('text1');
var linkArray = rowDivs.getElementsByTagName('a');
var price = rowDivs.getElementsByTagName('p');

function hover(){

	/*for (var i = 0; i < pdetails.length; i++) {
	var	textDiv = document.getElementById('text' + i);

		textDiv.onmouseover = function(){
			var foo = linkArray[i];
			var bar = price[i];
			return function() {
				foo.style.color = 'red';
				bar.style.color = 'red';

		};

		textDiv.onmouseout = function() {
			var foo = linkArray[i];
			var bar = price[i];
			return function() {
				foo.style.color = 'black';
				bar.style.color = 'black';
			}
		};
} */ /*

		textDiv = null;
		var	textDiv = document.getElementById('text1');

		textDiv.onmouseover = function(){
			linkArray[1].style.color = 'red';
			price[1].style.color = 'red';

	};

		textDiv.onmouseout = function() {
			price[1].style.color = 'black';
			linkArray[1].style.color = 'black';
		};
}


window.onload = function(){
hover();
}; */
