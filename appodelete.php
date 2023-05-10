<?php
 $aid=$_GET['aid'];

  $db = mysqli_connect("localhost", "root", "", "test");
  // Get all the submitted data from the form
  $sql = "delete from appoint where aid='$aid'";

  // Execute query
  $result=mysqli_query($db, $sql);
  
?>
<script type="text/javascript">
    window.location="profile.php";
</script>
