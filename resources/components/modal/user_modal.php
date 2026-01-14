<!-- Modal Overlay -->
            <div class="modalOverlay p-2" id="modalOverlay">
                <div class="modalForm">

                    <!-- Modal Header -->
                    <div class="modalHeader">
                        <h1 class="modalTitle">Add New User</h1>
                        <span class="closeBtn" id="closeModal">&times;</span>
                    </div>

                    <!-- Modal Body -->
                    <div class="modalBody">
                        <form action="" method="post" enctype="multipart/form-data" class="userForm">
                            <!--- User photo --->
                        <div class="userPhoto mb-3 mt-2 is-flex is-justify-content-left">
                           <div id="file-js-example" class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="resume" />
                                <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label"> Choose a file… </span>
                                </span>
                                <span class="file-name"> No file uploaded </span>
                            </label>
                            </div>
                        </div>
                        <hr>
                        <div class="columns">
                            <div class="column is-col-min-1">
                                <label class="label">Firstname</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Firstname">
                                </div>
                            </div>
                            <div class="column is-col-min-1">
                                <label class="label">Middlename</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Middlename">
                                </div>
                            </div>
                             <div class="column is-col-min-1">
                                <label class="label">Lastname</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Lastname">
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-col-min-1">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="username">
                                </div>
                            </div>
                    <div class="column is-col-min-1">
                        <label class="label">Password</label>

                        <div class="control has-icons-right">
                            <input
                                id="password"
                                class="input"
                                type="password"
                                placeholder="Password"
                            >

                            <span
                                class="icon is-right password-toggle"
                                id="togglePassword"
                            >
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                    </div>





                        </div>
                        <!--- name details --->
                        <!-- <div class="columns mt-2">
                            <div class="column is-4">
                                <div class="field">
                                    <label class="label">Firstname</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="firstname">
                                    </div>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="field">
                                    <label class="label">Middlename</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="middlename">
                                    </div>
                                </div>
                            </div>
                            <div class="column is-4">
                                <div class="field">
                                    <label class="label">Lastname</label>
                                    <div class="control">
                                        <input class="input" type="text" placeholder="lastname">
                                    </div>
                                </div>
                            </div>
                        </div> -->
    
                        </form>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modalFooter">
                        <button class="button is-light" id="cancelModal" type="button">Cancel</button>
                        <button class="button is-primary">Save</button>
                    </div>
                </div>
            </div>

<script>
document.getElementById('togglePassword').addEventListener('click', function () {
    const password = document.getElementById('password');
    const icon = this.querySelector('i');

    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.replace('bi-eye', 'bi-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.replace('bi-eye-slash', 'bi-eye');
    }
});
</script>

<style>
#togglePassword::hover {
    cursor: pointer;
}
</style>

