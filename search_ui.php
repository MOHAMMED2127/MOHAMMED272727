<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Users ASS3</title>
</head>
<body>
  <center>
    <h2>User Search (Secure)</h2>

    <!-- للتجربة الضعيفة -->
    <!--<h3>Vulnerable Search</h3>
    <form action="search_logic_vulnerable.php" method="get">
      <label>username</label>
      <input type="text" name="username" required>
      <button type="submit">Search</button>
    </form>-->

   <!-- <br>
    <hr>-->

    <!-- للحل الآمن -->
    <h3>Secure Search</h3>
    <form action="search_logic_secure.php" method="get">
      <label>username</label>
      <input type="text" name="username" required>
      <button type="submit">Search</button>
    </form>
  </center>
</body>
</html>
