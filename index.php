<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damien's website</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <H1></H1>
<main>
    <form action="formhandler.php" method="post">
        <label for="firstname">First Name:</label>
        <input id="firstname" type="text" name="firstname" placeholder="Enter first name">

        <label for="lastname">Last Name:</label>
        <input id="lastname" type="text" name="lastname" placeholder="Enter last name">

        <label for="age">Age:</label>
        <input id="age" type="text" name="age" placeholder="Enter age" pattern="\d+" title="Please enter a valid integer">

           <button type='submit' >submit </button>
    </form>

</main>
    
</body>
</html>