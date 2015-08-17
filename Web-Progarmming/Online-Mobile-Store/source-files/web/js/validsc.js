function validateForm() {
    var fb = document.forms["registerform"]["username"].value;
    var sb = document.forms["registerform"]["password"].value;
	var tb = document.forms["registerform"]["email"].value;
	var fob = document.forms["registerform"]["address"].value;
	var fvb = document.forms["registerform"]["fname"].value;
	var sx = document.forms["registerform"]["lname"].value;
	
	var atpos = tb.indexOf("@");
    var dotpos = tb.lastIndexOf(".");
	
var valid = true;
	if (fb == null || fb == "" || sb == null || sb == "" || tb == null || tb == "" || fob == null || fob == ""|| fvb == null || fvb == ""|| sx == null || sx == "") {
     alert("All fields are mandatory. Please fill out all the fields");
	 return false;
	 }
	
    if ( atpos < 1 || dotpos < atpos+2 || dotpos+2 >= x.length ) {
     alert("Please fill a proper email address");
	  return false;
    }   
  }