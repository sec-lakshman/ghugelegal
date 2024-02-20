<?php include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">
  <title>Files Upload and Download</title>
  <style type="text/css">
    select:not([multiple]) {
      -webkit-appearance: none;
      -moz-appearance: none;
      background-position: right 50%;
      background-repeat: no-repeat;

      padding: .5em;
      padding-right: 1.5em
    }

    #mySelect {
      border-radius: 0
    }

    #dropdown {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    .button {
      border: none;
      color: white;
      padding: 8px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 8px 2px;
      cursor: pointer;
    }

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
      padding-top: 0px;
      padding-bottom: 0px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 3px;
      padding-bottom: 3px;
      text-align: left;
      background-color: #686e68;
      color: white;
    }
  </style>
  <div class="header">


    <div class="container">
      <div class="row">

        <!-- <nav id='cssmenu' style="float:right;margin-top:-20px;">
<a href="../adminPanel.html"><button style="background-color: #313133;" class="button" type="" name="">Admin Page</button></a>

</nav> -->
      </div>
    </div>
  </div>
</head>

<body>

  <table id="customers">
    <thead>
      <th>Sl.no</th>
      <th>Name</th>
      <th>Date</th>
      <th>Email</th>
      <th>Categories</th>
      <th>Message</th>
      <th>Type</th>

    </thead>
    <tbody>
      <?php


      // function button2() {
      // echo "This is Button2 that is selected";

      // $resultz = "SELECT * FROM feedback";
      $resultz = "SELECT * FROM Appointment";
      $result = $db->query($resultz);


      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          // $date1 = $row['date'];
          // $date2 = $row['Lastdate'];
          // $diff = abs(strtotime($date2) - strtotime($date1));

          // $years = floor($diff / (365*60*60*24));
          // $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
          // $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));



          // $now = time(); 
          // $your_date = strtotime($date2);
          // $datediff = $your_date - $now;
          // $totaldays = round($datediff / (60 * 60 * 24));


      ?>



          <tr>
            <td><?php echo $row['sl.no']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td style="width:120px"><?php echo $row['date']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['categories']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['type']; ?></td>
          </tr>
      <?php }
      }

      ?>
    </tbody>
  </table>
</body>

</html>