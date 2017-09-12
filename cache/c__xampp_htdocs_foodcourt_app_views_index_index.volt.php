<!DOCTYPE html>
<?= $this->assets->outputCss() ?>
<?= $this->assets->outputJs() ?>
<html>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image:green;

    /* Full height */
    height: 50%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>

<div class="bg"></div>


<p>This example creates a half page background image. Try to resize the browser window to see how it always will cover 50% of the screen, and that it scales nicely on all screen sizes.</p>

</body>
</html>