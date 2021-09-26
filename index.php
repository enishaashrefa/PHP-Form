<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="bg-img">
       <h1>Admission Form</h1>
     
       <p>Please fill in this form to create an account.</p>
     <form action="index.php" class="container"> 
        
        <label><b>Name</b></label>
        <input type="text" placeholder="Enter name" name="name" id="name" required><br>

        <label><b>Age</b></label>
        <input type="num" placeholder="Enter age" name="age" id="age" required><br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>
        
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required><br>
        
        <label><b>Subject</b></label>
        <input type="text" placeholder="Enter Subject name" name="subject" id="subject" required><br>
        
        
        <button type="submit" class="btn">Register</button>
        <hr>
     </form>
    
    </div>
</Form>
    
</body>
</html>