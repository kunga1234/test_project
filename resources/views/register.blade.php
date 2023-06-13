<!DOCTYPE html>
<html>
@include('common.css')
<body>
  <h2>Regestration Form</h2>
  <div class="container">
    <form action="/register_new_user" method="post">
        <div class="row">

        <div class="col-md-12">
            <label for="full           _name">full_name:<span class="text-danger">*</span></label>
            <input type="text" id="full_name" name="full_name" required>
            </div>
            <div class="col-md-12">
            <label for="username">Email:<span class="text-danger">*</span></label>
            <input type="text" id="email" name="email" required>
            </div>
            <div class="col-md-12">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            </div>
           <div class="col-md-12">
           <label for="Contact No">Contact No:</label>
            <input type="Contact No" id="Contact No" name="contact_no" required>
           </div>
                <div class="col-md-12">
                <label for="status">Role</label>
            <select name="role" id="role">
                <option value="">Select</option>
                @foreach($response_data as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
                </div>
            <input type="submit" value="Login">
        </div>
      
    </form>
  </div>
</body>
</html>
