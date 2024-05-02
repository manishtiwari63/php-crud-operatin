
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <?php  
          if(isset($_GET['id'])){
            $con = mysqli_connect('localhost', 'root', '', 'one');
          $result=mysqli_query($con, "SELECT * from one where id=$_GET[id]");
          $row=mysqli_fetch_assoc($result);
          }
  ?>
</head>

<body>
  <div class="container">
    <form action="#">

      <label for="fname">First Name</label>
      <input type="text" id="fname" value="<?= $row['fname'] ?>" name="fname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname"  value="<?= $row['lname'] ?>" name="lname"  placeholder="Your last name..">
      
      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
      
      <input type="text" id="id" name="id" value="<?= $row['id'] ?>" hidden>
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"> <?= $row['subject'] ?></textarea>

      <input type="submit" name="submit" value="submit">

    </form>
    <?php
    if (isset($_GET['submit'])) {
      print_r($_GET);
      $con = mysqli_connect('localhost', 'root', '', 'one');
      echo $sql = "update  one set fname='$_GET[fname]',  lname='$_GET[lname]', country='$_GET[country]', subject='$_GET[subject]' where id='$_GET[id]'";
      
      if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href='Table.php'</script>";
      } else
        echo 'not inserted';
    }
    ?>
  </div>
</body>

</html>