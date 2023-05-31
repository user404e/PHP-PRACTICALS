<!DOCTYPE html>
<html>
<head>
    
    <title>Form Input</title>
</head>
<body>
    <form action="data.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td> : </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Employee ID</td>
                <td> : </td>
                <td><input type="number" name="empid"></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td> : </td>
                <td><select name="department">
                    <option value="Computer">Computer</option>
                    <option value="Electrical">Electrical</option>
                    <option value="BioMedical">BioMedical</option>
                    <option value="EC">EC</option>
                </select></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td> : </td>
                <td>
                    <select name="position">
                    <option value="Trainee">Trainee</option>
                    <option value="Officer">Officer</option>
                    <option value="Senior Officer">Senior Officer</option>
                    <option value="Educative">Educative</option>
                    <option value="Senior Educative">Senior Educative</option>
                    <option value="Junior Manager">Junior Manager</option>
                    <option value="Assistant Manager">Assistant Manager</option>
                    <option value="Manager">Manager</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td> : </td>
                <td>Male : <input type="radio" name="gender" value="male"> Female : <input type="radio" name="gender" value="female"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td> : </td>
                <td><input type="number" name="mobilenumber"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td><input type="text" name="email"></td>
            </tr>
            
            <tr>
                <td>Address</td>
                <td> : </td>
                <td><textarea name="address" id="" cols="20" rows="5"></textarea></td>
            </tr>
        </table>

        <input type="submit">
        </form>
</body>
</html>