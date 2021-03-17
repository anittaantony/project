<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<p><b>Search</b></p>  


<input id="myInput" type="text" placeholder="Search/Designation/Department">
<br><br>

<table>
  <thead>
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Designation</th>
  </tr>
  </thead>
  <tbody id="myTable">
     @foreach($users as $key=> $report)
  <tr>
    <td>{{$report->name}}</td>
    <td>{{$report->des}}</td>
    <td>{{$report->dep}}</td>
  </tr>
  @endforeach  
 
  </tbody>
</table>
  

</body>
</html>
