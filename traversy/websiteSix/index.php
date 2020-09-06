<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Champion</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script>
        function showSuggestion(str) {
            if (str.length == 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                var xHttp = new XMLHttpRequest();
                xHttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xHttp.open("GET", "suggest.php?q=" + str, true);
                xHttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Champions</h1>
        <form>
            Search Champion: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>
            Suggestions: <span id="output" style="font-weight: bold"></span>
        </p>
    </div>
</body>
</html>