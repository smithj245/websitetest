<!DOCTYPE html>
<html lang="ENG">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>J-FORUM</title>
        <style>
            body {
                padding: 25px;
                background-color: #151515;
                color: #dcdcdc;
                font-family: "Courier New", Courier, monospace;
                font-size: 25px;
            }
            input::placeholder {
                color: #696969;
                opacity: 1;
            }
            input:placeholder-shown {
                font-style: italic;
            }
            .dark-mode {
                background-color: #151515;
                color: #dcdcdc;
            }
            .light-mode {
                background-color: white;
                color: black;
            }
        </style>
    </head>
    <body>
    <H1>J-FORUM</H1>
    <!-- Text box that fills entire page with a submit button -->
    <form action="frontpage.php" method="post">
        <label>
            <textarea
                    name="text"
                    rows="10"
                    cols="100"
                    style="background-color: #181A1BFF; border-color: #736b5e"
                    placeholder="Enter submission here"></textarea>
        </label>
        <br>
        <input type="submit" value="Submit" style="border-color: #736b5e; color: #e8e6e3; background-color: #181a1b">
    </form>
    <div>
        <button style="border-color: #736b5e; color: #e8e6e3; background-color: #181a1b" onclick="lightMode()">Light/Dark Toggle</button>
    </div>
        <script>
            function lightMode() {
                const element = document.body;
                element.classList.toggle("light-mode");
            }
        </script>
    </body>
</html>