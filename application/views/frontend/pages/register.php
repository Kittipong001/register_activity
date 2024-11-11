<h1>Register</h1>
<?php
echo form_open('main/create_user');
echo form_label('Username :', 'username');
echo form_input('username');
echo br();
echo form_label('Password :', 'password');
echo form_input('password');
echo br();
echo form_label('Email :', 'email');
echo form_input('email');
echo br();
echo form_label('Rank_id :', 'rank_id');
echo form_input('rank_id');
echo br();
echo br();
echo form_submit('mysubmit', 'Submit Post!');
echo form_close();
?>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    width: 300px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #007bff; /* สีฟ้า */
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #0056b3; /* สีเข้มขึ้นเมื่อชี้เมาส์ */
}
</style>