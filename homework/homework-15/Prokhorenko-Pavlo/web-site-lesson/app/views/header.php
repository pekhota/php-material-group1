<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <?php
            if (!empty($_SESSION["user"])) {
                ?>
                <a href="/adminpanel/news">
                    <img src="https://w7.pngwing.com/pngs/811/233/png-transparent-computer-icons-user-login-desktop-others-blue-computer-prints.png" width="38" height="30" class="me-3" alt="Bootstrap">
                </a>
                <a href="/logout" type="button" class="btn btn-primary">Logout</a>
                <?php
            } else {
                ?>
                <a href="/login" type="button" class="btn btn-primary">Login</a>
                <a href="/signup" type="button" class="btn btn-primary">Sign-up</a>
                <?php
            }
        ?>

    </div>
</header>