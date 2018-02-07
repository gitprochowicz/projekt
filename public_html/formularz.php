<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .error {
                color: red;
                border:1px solid red;
                width:200px;
            }
        </style>
    </head>
    <body>

                    <form method="get" action="formularz.php">
                Imię: 
                <input type="text" name="firstname">
                <br>
                Nazwisko:
                <input type="text" name="lastname">
                <BR>
                Płeć:
                <br>
                Kobieta <input type="radio" name="gender"  value="Kobieta">
                <BR>
                Mężczyzna <input type="radio" name="gender" value="Mężczyzna">
                <input name='error' type='hidden'>
                <button type="submit" name="submit">Wyślij</button>
            </form>
                </body>
</html>


