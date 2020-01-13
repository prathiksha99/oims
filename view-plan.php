<?php
    include('db.php');
    $getquery = mysqli_query($con, "SELECT * FROM plans");
?>
<html>
    <body>
        <table border>
            <tr>
                <th> Speed </th>
                <th> Data </th>
                <th> FUP </th>
                <th> Price </th>
                <th> GST </th>
            </tr>
<?php
    while($getdata = mysqli_fetch_assoc($getquery)) { ?>
<tr>
    <td><?php echo $getdata['speed'];?></td>
    <td><?php echo $getdata['data'];?></td>
    <td><?php echo $getdata['fup'];?></td>
    <td><?php echo $getdata['price'];?></td>
    <td><?php echo $getdata['gst'];?></td>
</tr>
<?php } ?>
        </table>
    </body>
</html>