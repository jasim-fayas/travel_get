<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$selQry="select * from tbl_complaint p inner join tbl_user q on p.user_id=q.user_id where p.complaint_status='1'";
$data=$con->query($result=$selQry)
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UserComplaints</title>
</head>

<body><a href="ViewComplaints.php">Go to previous page</a>
<table width="776" height="83" border="1" style="margin-left: 330px;">
  <tr>
    <td width="152" height="26">Serial number</td>
    <td width="167">Title</td>
    <td width="129">Complaint</td>
    <td width="129">PostedDate</td>
    <td width="228">User name</td>
    <td width="66">Reply</td>
    <td width="228">ReplyDate</td>
  </tr>
  <?php
  $i=0;
  while($row=$data->fetch_assoc())
  {
  $i++;
  
  ?>
  <tr>
    <td height="49"><?php echo $i ?></td>
    <td><?php echo $row["complaint_title"]?></td>
    <td><?php echo $row["complaint_description"]?></td>
     <td><?php echo $row["complaint_date"]?></td>
    <td><?php echo $row["user_first_name"]?></td>
      <td><?php echo $row["complaint_reply"]?></td>
       <td><?php echo $row["complaint_reply_date"]?></td>
  </tr>
  <?php
  }
  ?>
</table>

</body>
<?php include("Foot.php"); ?>
</html>