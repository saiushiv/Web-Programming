# Web-Programming
Contains the codes written in : Javascript,JQuery, HTMl, Responsive CSS, PHP,AJAX

# Programs performs following funtions:

1) PGM-1 : Javascript function:

You should implement the function validateField. validateField should take in three parameters, fieldElem, infoMessage, and validateFn. 
fieldElem is a jQuery element that represents a single form text field. infoMessage should be a string that gives a human-readable description of the field’s requirements. validateFn should be a function that validates the field’s value.

When the function is invoked, you should insert a <span> notification element immediately after the form field. The notification element should initially be hidden.
When the field is currently being edited, the notification element’s text should be infoMessage, its class should be “info”, and it should be visible.
When the field is not being edited:
•	If the field is empty, the notification element should be hidden.
•	If the field is non-empty and the form field validates, the notification element’s text should be “OK”, its class should be “ok”, and it should be visible.
•	If the field is non-empty and the form field does not validate, the notification element’s text should be “Error”, its class should be “error”, and it should be visible.
Additionally, use this function to validate the form fields on the web page. You may use any sensible information messages of your choosing. The validations are as follows:
•	The username field must contain only alphabetical or numeric characters.
•	The password field should be at least 8 characters long.
•	The email address field should contain a @ character.

-----------------------------------------------------------------------------------------------------------------------------

2) PGM-2: a combination of Javascript and PHP:

****PGM-2a : javascript function is:

Your task for this assignment is to write JavaScript code for a web page to display the baby names and popularity rankings. 
Once clicked on the button, you will call Ajax function which will ultimately make a request for babynames.php on the server.

*****PGM-2b: PHP script:

In babynames.php, you will connect to the database and fetch the top-five popular names for both girls and boys for the given year. 
The results will be passed to the client and will be used to dynamically change the contents of the divisions on the html page. You will populate one division with top-five male names, other with top-five female names. Along with each baby name, you will also list the popularity ranking of the name for the given year.

-----------------------------------------------------------------------------------------------------------------------------

3) PGM-3 : Javascript function to create image slideshow:

You should implement the function createSlideshow and createSlideshow should take in two parameters, slideshowElem and duration. slideshowElem  is a jQuery element that represents a single slideshow element. duration is a number that specifies the duration in milliseconds between image transitions. duration should be a optional parameter. If omitted, the duration should be set to 5000 by default.

-----------------------------------------------------------------------------------------------------------------------------

4) PGM-4: PHP scrip to consume RESTful webservice:

Find geographic coordinates (latitude, longitude) of a given city by using Google's Geocoding API.  
https://developers.google.com/maps/documentation/geocoding/

---------------------------------------------------------------------------------------------------------------------------

5) Online mobile store: A fully function online mobile store.

Please visit this link to see this site live : http://saishiv.byethost32.com/mobistore/ 

