<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Gestion de bodegas S.L.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigationContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form action="index.php" method="get">
                    <button style="border:none;" class="nav-link">Inicio<span class="sr-only">(current)</span></button>
                </form>
            </li>
            <?php if (isset($_GET["volverVino"])) {
    ?>
            <li class="nav-item">
                <form action="index.php" method="get">
                    <button style="border:none;" class="nav-link" name='ver' value='<?php echo $_GET["volverVino"] ?>'>Volver<span
                            class="sr-only">(current)</span></button>
                    <input type='text' name='action' value='bodegaView' class='d-none'>
                </form>
            </li>
            <?php
}?>
        </ul>
    </div>
</nav>