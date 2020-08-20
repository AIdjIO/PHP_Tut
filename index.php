<?php 
require('db_connect.php');
$query_students='SELECT * FROM students  WHERE date(date_entered)=date(now()) ORDER BY date_entered';
$student_pdo_statment= $db->prepare($query_students);
$student_pdo_statment->execute();
$students = $student_pdo_statment->fetchAll();
$student_pdo_statment->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="main.css" />
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.css"/> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/cr-1.5.2/fc-3.3.1/fh-3.1.7/kt-2.5.2/r-2.2.5/rg-1.1.2/rr-1.2.7/sc-2.0.2/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <title>Read</title>
</head>
<body>
    <h3>Student List</h3>

<table id="myTable" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" role="grid" aria-describedby="example_info">
      <thead>
        <th><strong>ID:</strong></th>
        <th><strong>Name:</strong></th>
        <th><strong>Email:</strong></th>
        <th><strong>Street:</strong></th>
        <th><strong>City:</strong></th>
        <th><strong>State:</strong></th>
        <th><strong>Zip:</strong></th>
        <th><strong>Phone:</strong></th>
        <th><strong>Birthday:</strong></th>
        <th><strong>Sex:</strong></th>
        <th><strong>Entered:</strong></th>
        <th><strong>Lunch:</strong></th>
      </tr>
</thead>
      <!-- Get an array from the DB query and cycle
      through each row of data -->
      <tbody>
        <?php foreach($students as $student): ?>
        <tr>
            <td><?php echo $student['student_id']; ?></td>
            <td><?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['street']; ?></td>
            <td><?php echo $student['city']; ?></td>
            <td><?php echo $student['state']; ?></td>
            <td><?php echo $student['zip']; ?></td>
            <td><?php echo $student['phone']; ?></td>
            <td><?php echo $student['birth_date']; ?></td>
            <td><?php echo $student['sex']; ?></td>
            <td><?php echo $student['date_entered']; ?></td>
            <td><?php echo $student['lunch_cost']; ?></td>
        </tr>
        <?php endforeach; ?>
        <tbody>
    </table>
  
    <h3>Insert Student</h3>
    <form action="Create_student.php" method="post" id="add_student_form">
      <label>First Name : </label>
      <input type="text" name="first_name"><br>
      <label>Last Name : </label>
      <input type="text" name="last_name"><br>
      <label>Email : </label>
      <input type="text" name="email"><br>
      <label>Street : </label>
      <input type="text" name="street"><br>
      <label>City : </label>
      <input type="text" name="city"><br>
      <label>State : </label>
      <input type="text" name="state"><br>
      <label>Zip Code : </label>
      <input type="text" name="zip"><br>
      <label>Phone : </label>
      <input type="text" name="phone"><br>
      <label>Birth Date : </label>
      <input type="text" name="birth_date"><br>
      <label>Sex : </label>
      <input type="text" name="sex"><br>
      <label>Lunch Cost : </label>
      <input type="text" name="lunch"><br>
      <input type="submit" value="Add Student"><br>
    </form>
    <script>
	$(document).ready( function () {
			$('#myTable')
				.addClass( 'nowrap' )
				.dataTable( {
					responsive: true,
					columnDefs: [
						{ targets: [-1, -3], className: 'dt-body-right' }
          ],
          dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
				} );
		} );
      </script>
</body>
</html>