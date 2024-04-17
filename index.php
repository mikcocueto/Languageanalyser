<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Distribution Identifier</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <h1>Language Distribution Identifier</h1>
    <form id="classificationForm">
        <label for="sentence">Enter a sentence:</label><br>
        <input type="text" id="sentence" name="sentence"><br><br>
        <button type="button" id="identifyButton">Identify</button>
    </form>
    <div id="resultContainer"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("identifyButton").addEventListener("click", function() {
                identify();
            });

            document.getElementById("sentence").addEventListener("keydown", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault(); 
                    identify();
                }
            });

            function identify() {
                var sentence = document.getElementById("sentence").value;
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "classify.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        document.getElementById("resultContainer").innerHTML = xhr.responseText;
                    }
                };
                xhr.send("sentence=" + encodeURIComponent(sentence));
            }
        });
    </script>
</body>
</html>
