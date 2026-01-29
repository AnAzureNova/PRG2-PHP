 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <form action="inputs.php" method="post">
        <label for="text">TEXT: </label><input id="text" name="text" type="text">
        <label for="range">RANGE: </label><input id="range" name="range" type="range">
        <label for="checkbox">CHECK: </label><input id="checkbox" name="checkbox" type="checkbox">
        <label for="radio1">RADIO 1:</label><input id="radio1" name="radio" type="radio" value="1">
        <label for="radio2">RADIO 2:</label><input id="radio2" name="radio" type="radio" value="2">
        <label for="color">COLOR: </label><input id="color" name="color" type="color">
        <label for="url"></label>URL: <input id="url" name="url" type="url">
        <label for="date"></label>DATE: <input id="date" name="date" type="date">
        <label for="tel"></label>TEL: <input id="tel" name="tel" type="tel">
        <input type="submit">
        <p>TEST</p>
    </form>
 </body>
 </html>