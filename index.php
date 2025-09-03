<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

*{
    margin: 0;
    padding: 0;
}

body{
    font-family: 'Segoe UI', sans-serif;
    background: whitesmoke;
    display: flex;
    color: #fff;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

#container{
    background-color: #1e293b;
    padding: 40px 30px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0,0,0,0,3);
    width: 80%;
    max-width: 400px;
}

.register-form h1{
    text-align: center;
    margin-bottom: 30px;
    color: inherit;
}

.input-group{
    margin-bottom: 20px;
}

.input-group label{
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
}

.input-group input{
    width: 90%;
    padding: 10px;
    border: none;
    border-radius: 6px;
    outline: none;
    background-color: #334155;
    color: #fff;
}

.btn-register{
    width: 95%;
    padding: 12px;
    background-color: #334155;
    color: inherit;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
}

    </style>
</head>
<body>
    
<div id="container">
        <form action="process.php" class="register-form" method="post">
            <h1>Computer Lab II</h1>

            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="full_name" id="full_name" placeholder="Enter Name" required>
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
            </div>

            <div class="input-group">
                <label for="department">Department</label>
                <input type="text" name="department" id="department" placeholder="Enter Department" required>
            </div>

            <div class="input-group">

                <label for="matric-number">Matric Number</label>
                <input type="text" name="matric_number" id="matric_number" placeholder="Enter Matric Number">
            </div>

            <button type="submit" class="btn-register">Register</button>
            <a href="view.php">View Registered Student</a>
</body>
</html>