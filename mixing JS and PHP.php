<?php
/*
* Simple concept for calling php functions through javascript
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php /* Basic html outline above */?>

<?php /***** !IMPORTANT BITS BELOW *****/ ?>

<?php /* Radio Buttons with a Javascript onClick event (_radioSelector)*/?>

<div>
  <input type="radio" value="ObjectOne" name="Objects" id="_ObjectOne" onclick="_radioSelector()">
  <label for="_ObjectOne">SCHEMA - An approach to suicide prevention training</label>
</div>

<div>
  <input type="radio" value="ObjectTwo" name="Objects" id="_ObjectTwo" onclick="_radioSelector()">
  <label for="_ObjectTwo">ObjectTwo</label>
</div>

<?php /*
 * Div below will be updated with content from javascript using the ID PLACEFORDATA
 * 
 */?>
<div id="PLACEFORDATA"></div>

<script>

/*
 * Storing HTML data in a JS variable
 * 
 */

let _ObjectOneHtml = `
  <div>
    <h2>Object One!</h2>
    <h4>This is normal HTML</h4>
    <p>This is a paragraph tag used in HTML and as you can see it works...</p>
    <a href="#">LINK using A href</a>
    <h2>PHP function being called below using do_shortcode and contact form 7</h2>
    <?php echo do_shortcode('[contact-form-7 id="000000" title="RANDOM CF 7"]');?>
  </div>
  `;

  let _ObjectTwoHtml = `
  <div>
    <h2>Object Two</h2>
    <h4>This is normal HTML</h4>
    <p>This is a paragraph tag used in HTML and as you can see it works...</p>
    <a href="#">LINK using A href</a>
    <h2>PHP function being called below using do_shortcode and contact form 7</h2>
    <?php echo do_shortcode('[contact-form-7 id="000000" title="RANDOM CF 7"]');?>
  </div>
  `;

/*
 * Creating a javascript function
 * Call the object and return the data
 * 
 */
    _callObjectOne = () =>{
    return (_ObjectOneHtml);
}

    _callObjectTwo = () =>{
    return (_ObjectTwoHtml);
}

/*
 * 
 * Get Element by ID (See Div above)
 * 
 */
const getElement = document.getElementById("PLACEFORDATA");

/*
 * Function _radioSelector checks what has been selected and returns innerHTML as return function above. 
 */

function _radioSelector() {
  if (document.getElementById("_ObjectOne").checked) {
      //console.log("Data selected: _ObjectOne")
     getElement.innerHTML = _callObjectOne();
  }

  else if (document.getElementById("_ObjectTwo").checked) {
      //console.log("Data selected: _ObjectTwo")
      getElement.innerHTML = _callObjectTwo();
  }
}

  </script>
 
 <?php /***** !IMPORTANT BITS ABOVE *****/ ?>

<?php /* Basic html outline below */?>
</body>
</html>