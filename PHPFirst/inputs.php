<link rel="stylesheet" href="out.css">
<?php
    echo "Text: ".$_POST["text"]."<br>";
    echo "Range: ". $_POST["range"]."<br>";
    $checkbox = $_POST["checkbox"] ?? "off";
    echo "Checkbox: ".$checkbox."<br>";
    echo "Radio: ".$_POST["radio"]."<br>";
    echo "Color: ".$_POST["color"]."<br>";
    echo "Url: ".$_POST["url"]."<br>";
    echo "Date: ".$_POST["date"]."<br>";
    echo "Tel: ".$_POST["tel"]."<br>";
?>