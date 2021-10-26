<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Conten-Type" content="text/html,charset=utf-8"/>
        <title>Register</title>

    </head>
    <body>
        <h1>
            REGISTER
        </h1>
        <form action="CheckInformation.php"method="POST">
            <table cellpadding="0" cellspacing="0" >
                <tr>
                    <td>
                        User Name: 
                    </td>
                    <td>
                        <input type="test" name="txtUsername" size="50">
                    </td>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type ="text" name="txtPassword" size ="50">
                    </td>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Full name:
                    </td>
                    <td>
                        <input type="text" name="txtFullname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Birth day :
                    </td>
                    <td>
                        <input type="text" name="txtBirthday" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Sex :
                    </td>
                    <td>
                        <select Male="txtSex">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Register" />
            <input type="reset" value="Retype" />
                </tr>
        </form>
    </body>
</html>