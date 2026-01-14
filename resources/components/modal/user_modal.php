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
                        <div class="userPhoto mb-3 mt-2 is-flex is-justify-content-left mb-1">
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
                        <div class="mt-4">
                            <div class="columns">
                                <div class="column">
                                    <label class="label">Firstname</label>
                                    <input class="input" type="text" name="firstname" placeholder="Firstname" required />
                                </div>
                                <div class="column">
                                    <label class="label">Middlename</label>
                                    <input class="input" type="text" name="Middlename" placeholder="Middlename" required />
                                </div>
                                <div class="column">
                                    <label class="label">Lastname</label>
                                    <input class="input" type="text" name="Lastname" placeholder="Lastname" required />
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-4">
                            <div class="columns">
                                <div class="column">
                                    <label class="label">Username</label>
                                    <input class="input" type="text" name="Username" placeholder="Username" required />
                                </div>
                                <div class="column">
                                    <label class="label">Password</label>
                                    <input class="input" id="passwordInput" type="password" name="Password" placeholder="Password" required />
                                    <span class="eye" id="toggleCheck"><i class="bi bi-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        

                        </form>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modalFooter">
                        <button class="button is-light" id="cancelModal" type="button">Cancel</button>
                        <button class="button is-primary">Save</button>
                    </div>
                </div>
            </div>


<style>

</style>

<script>
    // Toggle password visibility
    document.getElementById('toggleCheck').addEventListener('click', function() {
        var passwordInput = document.getElementById('passwordInput');
        var icon = this.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    });
</script>

<script>
  const fileInput = document.querySelector("#file-js-example input[type=file]");
  fileInput.onchange = () => {
    if (fileInput.files.length > 0) {
      const fileName = document.querySelector("#file-js-example .file-name");
      fileName.textContent = fileInput.files[0].name;
    }
  };
</script>
