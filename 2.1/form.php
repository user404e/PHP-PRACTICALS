<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM</title>
</head>
<body>
    <form action="show-data.php" method="POST">
        First Name : <input type="text" name="fname"><br><br>

        Last Name : <input type="text" name="lname"><br><br>

        Age : <input type="number" name="age"><br><br>

        Mobile Number : <input type="number" name="mobileno"><br><br>

        Address : <textarea name="address" id="" cols="30" rows="5"></textarea><br><br>

        Gender : <input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female <br><br>

        Department : <select name="department" id="">
                        <option value="Computer">Computer</option>
                        <option value="Electrical">Electrical</option>
                        <option value="EC">EC</option>
                    </select><br><br>

        
        Sem : <input type="radio" name="sem" value="1"> 1 
            <input type="radio" name="sem" value="2"> 2 
            <input type="radio" name="sem" value="3"> 3 
            <input type="radio" name="sem" value="4"> 4 
            <input type="radio" name="sem" value="5"> 5 
            <input type="radio" name="sem" value="6"> 6 
            <br><br>

        <input type="submit">
    </form>
</body>
</html>