<!DOCTYPE html>
<html>
<body>

    <h1>Employee Information</h1>

    <form action="data.php" method="POST">

        Name : <input type="text" name="name"> <br><br>

        Employee Id : <input type="text" name="empid"> <br><br>

        Email : <input type="text" name="email"> <br><br>

        Mobile Number : <input type="text" name="mobileno"> <br><br>

        Gender : Male  <input type="radio" name="gender" value="male"> Female  <input type="radio" name="gender" value="female"> <br><br>

        Address : <textarea name="address" cols="20" rows="5"></textarea> <br><br>

        Department : <select name="department">
            <option value="Finance">Finance</option>
            <option value="IT">IT</option>
            <option value="Marketing">Marketing</option>

        </select> <br><br>

        Position : <select name="position">
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Associate">Associate</option>
            <option value="Intern">Intern</option>

        </select> <br><br>

        <input type="submit">
    </form>
</body>
</html>