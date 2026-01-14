
<?php include_once __DIR__ . '../../hero/hero.php'; ?>
<!-- Button to open modal -->
        <div class="mr-2 mt-4 mb-4 columns">
            <div class="column">
                <button class="button p-2 is-success" id="openModal"><i class="bi bi-person-plus-fill"></i>&nbsp;Add User</button>
            </div>
            <div class="column is-narrow">
            <div class="control has-icons-left">
                <input class="input" type="text" placeholder="Search Users">
                <span class="icon is-left">
                    <i class="bi bi-search"></i>
                </span>
                </div>
            </div>
        </div>

            <div class="columns is-multiline">
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">Card 1</p>
                            <p>Some useful info here.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">Card 2</p>
                            <p>More info here.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">Card 3</p>
                            <p>Additional info here.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">Card 3</p>
                            <p>Additional info here.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">Card 3</p>
                            <p>Additional info here.</p>
                        </div>
                    </div>
            </div>
            <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <p class="title">Card 3</p>
                            <p>Additional info here.</p>
                        </div>
                    </div>
            </div>
        </div>


        <!-- Modal Overlay -->
    <?php include_once __DIR__ . '../../modal/user_modal.php'; ?>
<style>
    #password {
        padding-right: 40px;
    }
</style>



