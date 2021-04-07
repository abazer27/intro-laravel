<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>
</head>
<body>
    <div class="container">
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/wellcome" method="POST">
            @csrf
            <label for="fname">First Name:</label><br><br>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last Name:</label><br><br>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="gender">Gender:</label><br><br>
            <input type="radio" id="male" name="gender">Male<br>
            <input type="radio" id="female" name="gender">Female<br>
            <input type="radio" id="other" name="gender">Other<br>
            <br><br>
            <label for="nationality">Nationality :</label><br><br>
            <select name="nationality" id="nationality">
                <option value="">Indonesian</option>
                <option value="">Singapuran</option>
                <option value="">Malaysian</option>
                <option value="">Australian</option>
            </select> <br><br>
            <label for="language">Language Spoken:</label><br><br>
            <input type="checkbox" id="language1"><label for="language1">Bahasa Indonesia</label><br>
            <input type="checkbox" id="language2"><label for="language2">English</label><br>
            <input type="checkbox" id="language3"><label for="language3">Other</label><br><br>
            <label for="bio">Bio:</label><br><br>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="Sing Up">
        </form>
    </div>
</body>
</html>