<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <table>
            <tr>
                <td>First Name:</td>
            </tr>
            <tr>
                <td><input type="text" name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
            </tr>
            <tr>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr>
                <td>Gender</td>
            </tr>
                <td>
                    <input type="radio" name="gender" value="Male"><label for="gender">Male</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="gender" value="Female"><label for="gender">Female</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="gender" value="Other"><label for="gender">Other</label>
                </td>
            </tr>
            <tr>
                <td>Nationality:</td>
            </tr>
            <tr>
                <td><select name="nationality">
                        <option name="Indonesian">Indonesian</option>
                        <option name="Singaporean">Singaporean</option>
                        <option name="Malaysian">Malaysian</option>
                        <option name="Australian">Australian</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bio:</td>
            </tr>
            <tr>
                <td>Language Spoken:</td>
            </tr>
                <td>
                    <input type="checkbox" name="language" value="Bahasa Indonesia"><label for="language">Bahasa Indonesia</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="language" value="English"><label for="language">English</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="language" value="Other"><label for="language">Other</label>
                </td>
            </tr>
            <tr>
                <td>Bio:</td>
            </tr>
            <tr>
                <td><textarea name="bio"></textarea></td>
            </tr>

        </table>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
