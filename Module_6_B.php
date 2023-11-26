<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="process.php" />	
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">  
<style>
	table,tbody,th, td {
	border: solid 1pt black;
	border-collapse: collapse;
	padding: 10pt;	
}
</style>
</head>
<body>

<Section>
     <h2>Data</h2>
         
<table>
<tr>
	<th>CourseNo</th>
	<th>Title</th>
	<th>Instructor</th>
</tr>
 
 

<tr>
 	<td>6201</td>
    <td>Info Sys Development</td>
    <td>Dasgupta</td>
</tr>

<tr>
 	<td>6202</td>
    <td>Database Management</td>
    <td>Park</td>
</tr>
 
<tr>
 	<td>6204</td>
    <td>Project Management</td>
    <td>Carayannis</td>
</tr>
 
<tr>
 	<td>6205</td>
    <td>Web App Development</td>
    <td>Chen</td>
</tr>
  <tr>
 	<td>6206</td>
    <td>Security</td>
    <td>White</td>
 </tr>
 
  <tr>
 	<td>6209</td>
    <td>Web and Social</td>
    <td>Duan</td>
 </tr>
    
</table>

<br>


<form action ="https://uborujaniii.info/class/module6/process.php" method ="post">" method ="post">


<Section>
     <h2>Course Input</h2>
         
<fieldset>
<Legend>Select Course</Legend>
	<tr>
		<td >Course Number</td>	
			
                <br>
		
		<select name= "courseno">
        <option>CourseNo</option>
		<option>6201</option>
		<option>6202</option>
		<option>6204</option>
		<option>6205</option>
		<option>6206</option>
		<option>6209</option>
		</select>
	</tr>
    		<br>
           <br>

	<tr>
		<td>Course Title</td>
			
                <br>
		<select name="title">
		<option>Select Course</option>
		<option>Info Sys Development</option>
		<option>Database Management</option>
		<option>Project Management</option>
		<option>Web App Development</option>
		<option>Security</option>
		<option>Web and Social</option>	
        </select>
	</tr>
		<br>
        <br>
	<tr>
		<td>Instructor</td>
			<br>
		<select name= "instructor">
        <option>Select Instructor</option>
		<option>Dasgupta</option>
		<option>Park</option>
		<option>Carayannis</option>
		<option>Chen</option>
		<option>White</option>
		<option>Duan</option>
		</select>
	</tr>
			<br>
            <br>
	<tr>
		<td>Meeting Time</td>
		<br>
		<input type="Time" placeholder= "Time" name="Time" />
	</tr>
	
	<br>
    <br>

	<tr>
		<label for="active"> <br>Active</label> 
        <br>
         <input type="radio" name="status" value="Yes" checked>Yes</input>
         <input type="radio" name="status" value="No">No</input>
        <input type="submit" value="Submit">

	</tr>
    
 </Section>

</fieldset>
</form>

</Section>
</body>

</html>



</body>

</html>