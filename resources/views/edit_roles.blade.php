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
  <h2>Role Management</h2>
  <div class="container">
    <form action="/update_role" method="post">
    @csrf

      <label >Role Name:</label>
      <input type="text" value="{{$data->name}}" id="role_name" name="role_name" >
      <input type="hidden" value="{{$data->id}}" name="recordid" >
      <input type="hidden" value="{{$data->status}}" id="statusid" >
      
      <label >Status:</label>
      <input type="radio" value="active" id="status1" name="status" >
      <label >active</label>
      <input type="radio" value="inactive" id="status2" name="status" >
      <label >inactive</label>
      <script>
        let status_value=document.getElementById('statusid').value;
        if(status_value=="Active"){
          document.getElementById('status1').checked=true;
        }else{
          document.getElementById('status2').checked=true;
        }
      </script>

      
      <input type="submit" value="submit">
    </form>
  </div>
</body>
</html>
