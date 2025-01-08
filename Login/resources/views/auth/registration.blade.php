<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Register Page</span></div>
            <form>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" value="" placeholder="Username" required name="name">
                </div>
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" value="" placeholder="Email" required name="email">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" value="" placeholder="Password" required name="password">
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" value="" placeholder="Confirm Password" required name="password_confirmation">
                </div>
                <div>
                    <select name="selectbox" id="is_role">
                        <option value="">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">Patient</option>
                        <option value="3">Doctor</option>

                    </select>
                </div>
                <div class="row button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
