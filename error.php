<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=
    RenderCSS("error")
    ?>
    <title>Error</title>
</head>

<body>
    <section class="errorPage">
        <div class="errorTop"></div>
        <div class="errorBottom">
            <div class="errorBottom-left">
                <h2>Oops!</h2>
                <p>The page you're trying to reach doesn't exist.</p>
                    <div class="btn-back-home"><button><a href="<?= Redirect("Home") ?>">GO HOME</a></button></div>
                <h1>4<img src="" alt="">4</h1>
            </div>
            <div class="errorBottom-right"><img src="" alt=""></div>
        </div>
    </section>