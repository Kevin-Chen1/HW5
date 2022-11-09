<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<script>
function myFunc(theObject) {
  theObject.make = 'Toyota';
}

const mycar = {
  make: 'Honda',
  model: 'Accord',
  year: 1998,
};

// x gets the value "Honda"
const x = mycar.make;

// the make property is changed by the function
myFunc(mycar);
// y gets the value "Toyota"
const y = mycar.make;
</script>
  

</body>
</html>
