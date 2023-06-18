<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontakt</title>
</head>
<body>

    <h1>halo</h1>
    <div id="div1">
        <a href="fima.html"><h1>Strona główna</h1></a>
    </div>
    <div id="div2">
        <a href="Ofirmie.html"><h1>O firmie</h1></a>
    </div>
    <div id="div3">
        <a href="produkty.html"><h1>Nasze produkty</h1></a>
    </div>
    <div id="div4">
        <a href="kontakt.php"><h1>Kontakt</h1></a>
    </div>

    <div id="kontakt">
        <form action="kontakt.php" method="post">
            <input type="text" name="imie" placeholder="Imię*"><br>
            <input type="text" name="nazwisko" placeholder="Nazwisko"><br>
            <input type="text" name="mail" placeholder="E-mail*"><br>
            <input type="text" name="numer" placeholder="Numer telefonu*"><br>
            <input type="text" name="wiad" placeholder="Wiadomość*"><br>
            <input type="reset" value="Wyczyść">
            <input type="submit" value="Wyślij">

            <p>Zaznaczenie tego pola oznacza, że rozumiesz i akceptujesz, że przesłane przez Ciebie informacje<br>
                będą przechowywane i przeglądane zgodnie z naszą Polityką Prywatności.</p>

            <p>
                <input type="checkbox" name="akceptacja"> Tak, rozumiem i akceptuję, że moje dane będą przechowywane.
            </p>
        </form>
    </div>

    <?php
    $connect = mysqlli_connect('localhost' , 'root' , '' , 'firma');
    $imie=$_post['imie'];
    $nazwisko=$_post['nazwisko'];
    $mail=$_post['mail'];
    $numer=$_post['numer'];
    $wiad=$_post['wiad'];
$zapytanie  = mysqli_query($connect,"INSERT INTO projekt1 (`Imie`, `Nazwisko`, `E-mail`, `Numer Telefonu`) VALUES ('$imie', '$nazwisko', '$mail', '$numer')");
mysqli_close($connect);
    ?>

</body>
</html>

