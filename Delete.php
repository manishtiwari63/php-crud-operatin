<?php
      $con = mysqli_connect('localhost', 'root', '', 'one');
      if(mysqli_query($con, "DELETE FROM one where id=$_GET[id]"))
        echo "<script>window.location.href='Table.php'</script>";
    else
        echo 'failed to deleted data from table';

?>