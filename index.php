<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word Ban</title>
</head>

<body>
    <section>
        <?php
        echo "Sostituisci parola";
         ?>
         <br>
        <!-- form -->
        <form action="analyzer.php" method="GET">
            <label for="parah"> Paragrafo</label>
            <input type="text" id="parag" name="parag"> 
            <br>
            <label for="banned"> Parola da censurare</label>
            <input type="text" id="banned" name="banned">
            <br>  
            <button type="submit">Censura</button> 
        </form>
    </section>
</body>
</html>