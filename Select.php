<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form action="#">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Your last name..">

      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" name="submit" value="submit">

    </form>
    <?php
    if (isset($_GET['submit'])) {
      $con = mysqli_connect('localhost', 'root', '', 'one');
      $sql = "insert into one(fname,lname,country,subject) values ('$_GET[fname]','$_GET[lname]','$_GET[country]','$_GET[subject]')";
      if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href='Table.php'</script>";
      } else
        echo 'not inserted';
    }
    ?>

  </div>
</body>

</html>