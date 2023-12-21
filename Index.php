<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}

.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}




input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}




    </style>
</head>
<body>
    <div class="Container">


    <form action="post.php" method="post">
<h3>Student Details</h3>
            <input type="number" name="rollno" id="rollno" placeholder="Enter your Roll No.">
            <input type="text" name="fname" id="fname" placeholder="Enter your first name">
            <input type="text" name="lname" id="lname" placeholder="Enter your last name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your address"></textarea>
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <button class="btn">Submit</button> 
        </form>

    </div>
</body>
</html>