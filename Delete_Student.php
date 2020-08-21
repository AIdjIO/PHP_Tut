<?php
# Get data to input
# NEW add student_id input
$student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
 
# Verify that eveything has been entered
if($student_id == null){
  # Print an error if values aren't entered
  $err_msg = "Student ID Not Entered";
  include('db_error.php');
} else {
  require_once('db_connect.php');
  # Create your query using : to add parameters to the statement
  $query = 'DELETE FROM students WHERE student_id = :student_id';
 
  # Create a PDOStatement object
  $stm = $db->prepare($query);
  # Bind values to parameters in the prepared statement
  $stm->bindValue(':student_id', $student_id);
  # Execute the query and store true or false based on success
  $execute_success = $stm->execute();
  $stm->closeCursor();
 
  # If an error occurred print the error
  if(!$execute_success){
    print_r($stm->errorInfo()[2]);
  }
}
 
require_once('db_connect.php');
$query_students = 'SELECT * FROM students ORDER BY student_id';
$student_statement = $db->prepare($query_students);
$student_statement->execute();
$students = $student_statement->fetchAll();
$student_statement->closeCursor();
 ?>
 <!DOCTYPE HTML>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Delete</title>
     <link rel="stylesheet" type="text/css" href="main.css" />
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
   </head>
   <body>
     <h3>Student List</h3>
     <table>
     <table id="myTable" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" role="grid" aria-describedby="example_info">
         <thead>
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Street</th>
         <th>City</th>
         <th>State</th>
         <th>Zip</th>
         <th>Phone</th>
         <th>BD</th>
         <th>Sex</th>
         <th>Entered</th>
         <th>Lunch</th>
       </tr>
</thead>
<tbody>
       <!-- Get an array from the DB query and cycle
       through each row of data -->
       <?php foreach($students as $student) : ?>
         <tr>
           <!-- Print out individual column data -->
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
       <!-- Mark the end of the foreach loop -->
       <?php endforeach; ?>
       </tbody>
     </table>
     <h3>Delete Student</h3>
     <form action="delete_student.php" method="post"
       id="delete_student_form">
       <label>Student ID : </label>
       <input type="text" name="student_id"><br>
       <input type="submit" value="Delete Student"><br>
     </form>
   </body>
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
 </html>