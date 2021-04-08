<?php 
echo "skrt skrt";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/css/uikit.min.css" />
</head>
<body>
    
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <form class="uk-form-stacked js-login">

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" required placeholder="your@email.com">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required placeholder="Your Password">
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Login</button>
                </div>

            </form>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/js/uikit-icons.min.js"></script>
</body>
</html>