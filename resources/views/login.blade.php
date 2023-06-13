<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h2 {
      text-align: center;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
    }
    
    .container label {
      display: block;
      margin-bottom: 10px;
    }
    
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    
    .container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h2>Login Form</h2>
  <div class="container">
    <form action="/login" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
