<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <title>Turnaje</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <h3>Signup</h3>
  <form action="/turnajovnik/includes/formhandler.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-Mail">
    <button>Signup</button>
  </form>

<br>
  <br>
  <br>
  <br>
  <h3>Change account</h3>
  <form action="includes/userupdate.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-Mail">
    <button>Update</button>
  </form>
  <br>
  <br>
  <br>
  <br>
  <h3>Delete account</h3>
  <form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
  </form>



</body>

</html>