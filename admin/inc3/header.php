<div class="grid_12 header-repeat">
    <div id="branding">
        <div class="floatleft logo">
            <img src="img/livelogo.png" alt="Logo" />
        </div>
        <div class="floatleft middle">
            <h1>Training with live project</h1>
            <p>www.trainingwithliveproject.com</p>
        </div>
        <div class="floatright">
            <div class="floatleft">
                <img src="img/img-profile.jpg" alt="Profile Pic" />
            </div>

            <?php
                if(isset($_GET['action']) && $_GET['action'] === 'logout')
                    Session::destroy();
            ?>

            <div class="floatleft marginleft10">
                <ul class="inline-ul floatleft">
                    <li>Hello <?php echo Session::get('adminUsername'); ?></li>
                    <li><a href="?action=logout">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="clear"></div>

    </div>
</div>

<div class="clear"></div>

    