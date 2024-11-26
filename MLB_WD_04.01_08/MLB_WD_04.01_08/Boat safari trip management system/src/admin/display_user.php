<?php  include 'Connection.php'; 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserAccount Page</title>
    <script src="Feedback.js"></script>
    <link rel = "stylesheet" href="admin2.css">
    <link rel = "stylesheet" href="user.css">
</head>
<body>
    <hr class = "new1">
    <div class = "position">
	<div class="header">
		<img src = "logo1.png">
	</div>
	
	<nav>
		<div class = "logo">
			<p>hikka safariseas</p>
		</div>
	</nav>
	</div>
	
    <!-- add a header (c)-->
    <header>
        <!-- add a horizontal line (d)-->
		<hr class = "new1">
        <!-- add a horizontal menu (e) -->
		<div class="bar">
            <div class="headbtn">
                  <a  id="button" href= "admin2.html">Dashboard</a></li>
                  <a id="button" href= "display_user.php">User Account</a></li>
                  <a id="button" href= "Feedback1.html">Feedback</a></li>
            </div>
        </div>		
		<br>
    <h1 class="p1">User Accounts</h1><br>
    <hr class="new1">

    <table border="2px" cellpadding="5px" cellspacing="5px">
    

        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age </th>
            <th>User name </th>
            <th>Password </th>
            <th>Admin ID </th>
        </tr>    
        <?php
        $query = "SELECT * FROM customer";
        $data = mysqli_query($con,$query);
        $result = mysqli_num_rows($data);
        
        if($result){
          while($row=mysqli_fetch_array($data)){
        ?>
           <tr>     
                <td><?php echo $row['Cus_ID'];?></td>
                <td><?php echo $row['F_name'];?></td>
                <td><?php echo $row['L_name'];?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Gender'];?></td>
                <td><?php echo $row['Age'];?></td>
                <td><?php echo $row['User_name'];?></td>
                <td><?php echo $row['Password'];?></td>
                <td><?php echo $row['Admin_ID'];?></td>
                <td><button id="btn3" type="button" onclick="updateUser('<?php echo $row['Cus_ID']; ?>')"><b>Update</b></button></td>
                <td><button id="btn1" type="button" onclick="deleteUser('<?php echo $row['Cus_ID']; ?>')"><b>Delete</b></button></td>
                

            </tr>      
                <?php
            }
          }else
          {
            ?>
              <tr>
                <td>No Records found</td>
              </tr>
    <?php
          }

        ?> 
                
        </tr>
           
    </table>

    <hr class="new1">

        <!-- add a footer (g)-->
        <br>
        <footer class="footer">
	<div class = "container">
		<div class = "footer-content">
			<h3> Contact Us </h3>
			<p> E-mail: hikkaSafariseas@gmail.com </p>
			<p> Phone: +94-7743357800</p>
			<p> Address: 159/6 Hikkaduwa, Sri Lanka </p>
		</div>
		<div class = "footer-content">
			<h3> Quick Links </h3>
				<ul class = "list">
					<li><a href = "#">HOME</a></li>
					<li><a href = "#">ABOUT</a></li>
					<li><a href = "#">SERVICES</a></li>
					<li><a href = "#">CONTACT</a></li>
				</ul>
		</div>
		<div class = "footer-content">
			<h3> Follow Us </h3>
			<ul class = "social-icons">
				<li><a href="https://www.facebook.com/"><img src="facebook.png" alt="facebook" ></a></li>
                <li><a href="https://twitter.com/"><img src="twitter.png" alt="Twitter" ></a></li>
                <li><a href="https://www.instagram.com/"><img src="instagram.png" alt="Instagram" ></a></li>
                <li><a href="https://www.google.com/"><img src="Google.jpg" alt="Google" ></a></li>
			</ul>
		</div>
	</div>	
    <script>
        function updateUser(id) {
            // You can now use the 'firstName' parameter in this function
            // For example, you can display an alert with the first name:
            alert("Updating user: " + id);
        }

        function deleteUser(userID) {
            const requestOptions = {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            userID : userID
          })
        };

        fetch('delete_user.php', requestOptions)
          .then(response => response.json())
          .then(data => {
            location.reload(); 
            alert("User Deleted ");
          })
          .catch(error => {
                    console.log
          });
        }
    </script>   

    </body>
</html>