<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <div class="field-body">
        <div class="field">
            <div class="control">
                <button class="button is-primary" onclick="reportBug()">
                    Send Report
                </button>
            </div>
        </div>
    </div>
    <div id="form-container">

    </div>
</body>
<style>
.isHidden {
    display: none;
}
</style>

<script>
const reportBug = async () => {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("form-container").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "form.php", true);
    xhttp.send();

}
</script>

</html>