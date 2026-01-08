<?php 
include_once __DIR__ . '/vendor/autoload.php';
use App\Controllers\TestController;
$pagetitle = 'Login';
include_once 'resources/components/includes/header_component.php';


$test = (new TestController() )->testMode();

?>
    <!-- <div class="p-1">
        <button class="buttonTheme p-2" id="themeButton"><img id="image" src="public/assets/images/moon.png" width="25"></button>
    </div>

    <div class="container">
        <div class="box">
            <div class="columns box">
                <div class="column mr-3 has-background-white is-one-third box">1</div>
                <div class="column has-background-white box">2</div>
            </div>
        </div>
    </div> -->


    <button class="button mr-3" id="myButton">Send</button>



<?php
include_once __DIR__ . '/resources/components/includes/footer_component.php';
?>
