<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link href="Example1.css" rel="stylesheet">
</head>

<body>
    <section id="banner">
        <h1>
            Portal dla wedkarzy
        </h1>
    </section>
    <section id="left1">
        <h3>
            Ryby zamieszkajace rzeki
        </h3>
        <ol>
            <?php
                $ryba = mysqli_connect('localhost', 'root', '', 'wedkowanie')
            ?>      
        </ol>
    </section>
    <section id="left2">
        <h3>
            Ryby drapizne naszych wod
        </h3>
        <table>
            <tr>
                <th>L.p</th>
                <th>Gatunek</th>
                <th>Wystepowanie</th>
            </tr>
        </table>
    </section>
    <section id="right">
        <img src="images.jpg" alt="Piekna ryba" width="400" height="320">
    </section>
    <section id="footer">
        <p>Strone wykonal: Aliaksei Novik, Я сосу большой пинос у негра</p>
    </section>
</body>

</html>