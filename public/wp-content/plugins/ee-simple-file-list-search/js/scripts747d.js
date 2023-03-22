// Simple File List | Search Extension | Script: scripts.js | Author: Mitchell Bennis | support@simplefilelist.com | Revised: 11.25.2019

jQuery(document).ready(function() {

	var currentURL = window.location.href; // This URL
	currentURL = eeSFLS_removeParam('eePage', currentURL);
	
	var eePage = parseInt( jQuery('#eePage').text() ); // Make sure it's a number
	var eeLastPage = parseInt( jQuery('#eeLastPage').text() ); // Make sure it's a number
	
	if( currentURL.indexOf("?") > 1 ) { // Make sure we have the correct operator
		var eeOp = '&';
	} else {
		var eeOp = '?';
	}

	jQuery( "#eeSFLS_goToStart" ).on('click', function() {
		
		currentURL = currentURL + eeOp + 'eePage=0';
		window.location.href = currentURL;
	});

	jQuery( "#eeSFLS_goBack" ).on('click', function() {
		
		currentURL = currentURL + eeOp + 'eePage=' + (eePage-1);
		window.location.href = currentURL;
	});

	jQuery( "#eeSFLS_goForward" ).on('click', function() {
		
		currentURL = currentURL + eeOp + 'eePage=' + (eePage+1);
		window.location.href = currentURL;
	});

	jQuery( "#eeSFLS_goToEnd" ).on('click', function() {
		
		currentURL = currentURL + eeOp + 'eePage=' + eeLastPage;
		window.location.href = currentURL;
	});


	// Date Pickers
	// http://api.jqueryui.com/datepicker/
	
	jQuery( "#eeSFLS_From" ).datepicker({ dateFormat: "yy-mm-dd", maxDate: "+0d" });
	jQuery( "#eeSFLS_To" ).datepicker({ dateFormat: "yy-mm-dd", maxDate: "+0d" });


}); // END Ready Function




// Remove an attribute in a URL
function eeSFLS_removeParam(key, sourceURL) {
    var rtn = sourceURL.split("?")[0],
        param,
        params_arr = [],
        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
    if (queryString !== "") {
        params_arr = queryString.split("&");
        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
            param = params_arr[i].split("=")[0];
            if (param === key) {
                params_arr.splice(i, 1);
            }
        }
        rtn = rtn + "?" + params_arr.join("&");
    }
    return rtn;
}