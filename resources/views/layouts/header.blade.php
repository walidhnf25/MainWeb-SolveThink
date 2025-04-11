<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 w-100">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <img src="{{ asset('img/st_new_1.png') }}" alt="SolveThink Logo" class="img-fluid" style="max-height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::routeIs('index') ? 'active' : '' }}">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('software*') || Request::is('ml-ai*') || Request::is('iot*') ? 'active' : '' }}" data-bs-toggle="dropdown">E-Learning</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('software') }}" class="dropdown-item {{ Request::is('software*') ? 'active' : '' }}">Software Development</a>
                        <a href="{{ route('ml-ai') }}" class="dropdown-item {{ Request::is('ml-ai*') ? 'active' : '' }}">ML AI Data Science</a>
                        <a href="{{ route('iot') }}" class="dropdown-item {{ Request::is('iot*') ? 'active' : '' }}">Internet of Things</a>
                    </div>
                </div>
                <a href="{{ route('component.index') }}" class="nav-item nav-link {{ Request::routeIs('component.index') ? 'active' : '' }}">Electronic Component</a>
                <!-- <a href="{{ route('product.index') }}" class="nav-item nav-link {{ Request::is('product*') ? 'active' : '' }}">Product</a> -->
                <a href="about.html" class="nav-item nav-link {{ Request::is('about*') ? 'active' : '' }}">About</a>
                <a href="contact.html" class="nav-item nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a>
            </div>
            <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            @if (Auth::guest())
                <a href="#" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            @else
            <div class="dropdown">
                <a href="#" class="btn btn-secondary text-light rounded-pill py-1 px-3 ms-2 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-2 fs-5"></i>
                    <span class="fs-6">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

<!-- Registrasi Modal -->
<div class="modal fade" id="registrasiModal" tabindex="-1" aria-labelledby="registrasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg overflow-hidden">
            <!-- Modal Header -->
            <div class="modal-header text-white justify-content-center position-relative">
                <h5 class="modal-title" id="registrasiModalLabel"><i class="bi bi-person-fill"></i> Registrasi Akun</h5>
                <!-- Tombol X untuk Batal -->
                <button type="button" class="btn btn-sm position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Cancel" style="background-color: transparent; border: none;">
                    <i class="bi bi-x-lg fs-4 text-dark"></i>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body bg-light p-4">
                <form action="{{ route('prosesregistrasi') }}" method="POST">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control rounded-end" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control rounded-end" id="email" name="email" placeholder="Masukkan email" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control rounded-end" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control rounded-end" id="confirmPassword" name="confirmPassword" placeholder="Masukkan ulang password" required>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn text-white rounded-pill btn-registrasi" onclick="handleRegistration(event)">Registrasi</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p class="text-center mt-2">Sudah memiliki akun? <a href="#" id="openLoginModal">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg overflow-hidden">
            <div class="modal-header text-white justify-content-center position-relative">
                <h5 class="modal-title mx-auto" id="loginModalLabel">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </h5>
                <button type="button" class="btn btn-sm position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Cancel" style="background-color: transparent; border: none;">
                    <i class="bi bi-x-lg fs-4 text-dark"></i>
                </button>
            </div>
            <div class="modal-body bg-light p-4">
                <div id="loginAlert" class="alert alert-danger alert-dismissible fade show mb-3" role="alert" style="display: none;">
                    <span id="loginAlertMessage"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form action="{{ route('proseslogin') }}" method="POST">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control rounded-end" id="email" name="email" placeholder="Masukkan email" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control rounded-end" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn text-white rounded-pill mb-2 btn-login"
                        style="background: linear-gradient(90deg, #4B6CB7, #182848);"
                        onclick="handleLogin(event)">Login</button>
                        <hr class="my-2">
                        <button type="button" class="btn btn-outline-danger rounded-pill"><i class="bi bi-google"></i> Masuk dengan Google</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p class="text-center mt-2">Belum punya akun? <a href="#" id="openRegisterModal">Daftar sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="loginSuccessAlert" class="custom-alert" style="display: none;" role="dialog" aria-modal="true" aria-labelledby="loginAlertTitle">
    <div class="custom-alert-content">
        <div class="alert-icon">
            <div class="checkmark">&#10004;</div>
        </div>
        <div class="alert-message">
            <h4 id="loginAlertTitle">Login Berhasil!</h4>
            <p id="loginSuccessMessage">Anda berhasil login. Mengalihkan...</p>
        </div>
        <div class="alert-actions">
            <button type="button" class="btn-confirm" onclick="closeLoginAlert()">OK</button>
        </div>
    </div>
</div>

<!-- Failed Login Alert -->
<div id="loginFailedAlert" class="custom-alert" style="display: none;" role="dialog" aria-modal="true" aria-labelledby="loginFailedAlertTitle">
    <div class="custom-alert-content error">
        <div class="alert-icon error">
            <div class="error-mark">&#10008;</div>
        </div>
        <div class="alert-message">
            <h4 id="loginFailedAlertTitle">Login Gagal!</h4>
            <p id="loginFailedMessage">Email atau password yang Anda masukkan salah.</p>
        </div>
        <div class="alert-actions">
            <button type="button" class="btn-confirm error" onclick="closeLoginFailedAlert()">OK</button>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("openRegisterModal").addEventListener("click", function () {
        var loginModalEl = document.getElementById('loginModal');
        var registerModalEl = document.getElementById('registrasiModal');

        var loginModal = bootstrap.Modal.getInstance(loginModalEl);
        var registerModal = new bootstrap.Modal(registerModalEl);

        loginModal.hide(); // Tutup modal login

        loginModalEl.addEventListener('hidden.bs.modal', function () {
            registerModal.show(); // Tampilkan modal registrasi setelah modal login tertutup
        }, { once: true });
    });

    document.getElementById("openLoginModal").addEventListener("click", function () {
        var loginModalEl = document.getElementById('loginModal');
        var registerModalEl = document.getElementById('registrasiModal');

        var loginModal = new bootstrap.Modal(loginModalEl);
        var registerModal = bootstrap.Modal.getInstance(registerModalEl);

        registerModal.hide(); // Tutup modal registrasi

        registerModalEl.addEventListener('hidden.bs.modal', function () {
            loginModal.show(); // Tampilkan modal login setelah modal registrasi tertutup
        }, { once: true });
    });
});

// Alert Login Sukses dan Failed
function createLoginAlerts() {
    if (!document.getElementById('loginSuccessAlert')) {
        const successDiv = document.createElement('div');
        successDiv.id = 'loginSuccessAlert';
        successDiv.className = 'custom-alert';
        successDiv.style.display = 'none';
        successDiv.setAttribute('role', 'dialog');
        successDiv.setAttribute('aria-modal', 'true');
        document.body.appendChild(successDiv);
    }

    if (!document.getElementById('loginFailedAlert')) {
        const failedDiv = document.createElement('div');
        failedDiv.id = 'loginFailedAlert';
        failedDiv.className = 'custom-alert';
        failedDiv.style.display = 'none';
        failedDiv.setAttribute('role', 'dialog');
        failedDiv.setAttribute('aria-modal', 'true');
        document.body.appendChild(failedDiv);
    }

    // Add CSS for the error styling if it doesn't exist
    if (!document.getElementById('loginAlertStyles')) {
        const styleSheet = document.createElement('style');
        styleSheet.id = 'loginAlertStyles';
        document.head.appendChild(styleSheet);
    }
}

function handleLogin(event) {
    event.preventDefault();
    console.log('Login button clicked');

    const form = event.target.closest('form');
    if (!form) {
        console.error('Form not found');
        return;
    }

    const email = form.querySelector('input[name="email"]').value;
    const password = form.querySelector('input[name="password"]').value;

    if (!email || !password) {
        showLoginAlert('failed', 'Email dan password tidak boleh kosong');
        return;
    }


    createLoginAlerts();
    // dummy data
    if (email === "admin@gmail.com" && password === "123456") {

        showLoginAlert('success');

        setTimeout(() => {
            form.submit();
        }, 2000);
    } else {

        showLoginAlert('failed', 'Email atau password yang Anda masukkan salah.');
    }
}

let failedLoginAttempts = 0;

function showLoginAlert(type, message = null) {
    const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));

    // Only hide the login modal if it's a success alert
    if (loginModal && type === 'success') {
        loginModal.hide();
        // Reset counter on success
        failedLoginAttempts = 0;
    }

    // Increment counter on failure
    if (type === 'failed') {
        failedLoginAttempts++;
    }

    const alertId = type === 'success' ? 'loginSuccessAlert' : 'loginFailedAlert';
    const alertElement = document.getElementById(alertId);

    if (!alertElement) {
        console.error(`${alertId} element not found!`);
        return;
    }

    if (message) {
        const messageId = type === 'success' ? 'loginSuccessMessage' : 'loginFailedMessage';
        const messageElement = document.getElementById(messageId);
        if (messageElement) {
            messageElement.textContent = message;
        }
    }

    alertElement.style.display = 'flex';
    alertElement.style.zIndex = '9999';

    void alertElement.offsetWidth;

    alertElement.classList.add('show');
    console.log(`${type} login alert shown`);

    // For failed login, reopen the login modal after showing the alert
    if (type === 'failed') {
        // Calculate background darkness based on failed attempts (max 0.9 opacity)
        const opacity = Math.min(0.5 + (failedLoginAttempts * 0.1), 0.9);
        console.log(`Failed login attempt ${failedLoginAttempts}, setting opacity to ${opacity}`);

        setTimeout(() => {
            closeLoginAlert('failed');

            // Reopen the login modal with darker overlay
            const loginModal = document.getElementById('loginModal');
            if (loginModal) {
                // Show the modal
                const modal = new bootstrap.Modal(loginModal);
                modal.show();

                // Make the backdrop darker based on failed attempts
                setTimeout(() => {
                    const backdrops = document.querySelectorAll('.modal-backdrop');
                    // Get the most recently added backdrop (last in the collection)
                    if (backdrops && backdrops.length > 0) {
                        const backdrop = backdrops[backdrops.length - 1];
                        backdrop.style.opacity = opacity;
                        backdrop.style.transition = 'opacity 0.3s ease';
                    } else {
                        console.error('Modal backdrop not found');
                    }
                }, 50); // Reduced delay for better user experience
            }
        }, 1500); // Reduced to 1.5 seconds for better user experience
    } else if (type === 'success') {
        // Reset counter on success
        failedLoginAttempts = 0;
        console.log('Login successful, reset failed attempts counter');
    }
}


function closeLoginAlert(type) {
    const alertId = type === 'success' ? 'loginSuccessAlert' : 'loginFailedAlert';
    const alertElement = document.getElementById(alertId);

    if (alertElement) {
        alertElement.classList.remove('show');

        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 300);
    }
}

function handleRegistration(event) {
    event.preventDefault();
    console.log('Registration button clicked');

    // Get form reference
    const form = event.target.closest('form');
    if (!form) {
        console.error('Registration form not found');
        return;
    }

    // Basic validation
    const name = form.querySelector('input[name="namaLengkap"]').value;
    const email = form.querySelector('input[name="email"]').value;
    const password = form.querySelector('input[name="password"]').value;
    const confirmPassword = form.querySelector('input[name="confirmPassword"]').value;

    // Check empty fields
    if (!name || !email || !password || !confirmPassword) {
        showRegistrationError('Silakan lengkapi semua kolom');
        return;
    }

    // Check password match
    if (password !== confirmPassword) {
        showRegistrationError('Password dan konfirmasi password tidak cocok');
        return;
    }

    // Show success alert
    showRegistrationSuccessAlert();

    // Submit the form after delay
    setTimeout(() => {
        console.log('Submitting registration form...');
        form.submit();
    }, 2000);
}

// Function to show error in registration modal
function showRegistrationError(message) {
    // Create alert if it doesn't exist
    let registrationAlert = document.getElementById('registrationAlert');
    if (!registrationAlert) {
        registrationAlert = document.createElement('div');
        registrationAlert.id = 'registrationAlert';
        registrationAlert.className = 'alert alert-danger alert-dismissible fade show mb-3';
        registrationAlert.setAttribute('role', 'alert');
        registrationAlert.innerHTML = `
            <span id="registrationAlertMessage"></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        // Insert at the beginning of modal body
        const modalBody = document.querySelector('#registrasiModal .modal-body');
        if (modalBody) {
            modalBody.insertBefore(registrationAlert, modalBody.firstChild);
        }
    }

    // Set message and display
    document.getElementById('registrationAlertMessage').textContent = message;
    registrationAlert.style.display = 'block';
}

// Create registration success alert
function createRegistrationSuccessAlert() {
    const alertDiv = document.createElement('div');
    alertDiv.id = 'registrationSuccessAlert';
    alertDiv.className = 'custom-alert';
    alertDiv.style.display = 'none';
    alertDiv.setAttribute('role', 'dialog');
    alertDiv.setAttribute('aria-modal', 'true');

    alertDiv.innerHTML = `
        <div class="custom-alert-content">
            <div class="alert-icon">
                <div class="checkmark">&#10004;</div>
            </div>
            <div class="alert-message">
                <h4>Registrasi Berhasil!</h4>
                <p>Akun Anda telah berhasil terdaftar.</p>
            </div>
            <div class="alert-actions">
                <button type="button" class="btn-confirm" onclick="closeRegistrationAlert()">OK</button>
            </div>
        </div>
    `;

    document.body.appendChild(alertDiv);
    return alertDiv;
}

// Show registration success alert
function showRegistrationSuccessAlert() {
    const alertElement = document.getElementById('registrationSuccessAlert') || createRegistrationSuccessAlert();

    // Hide the registration modal first
    const registrasiModal = bootstrap.Modal.getInstance(document.getElementById('registrasiModal'));
    if (registrasiModal) {
        registrasiModal.hide();
    }

    // Show alert
    alertElement.style.display = 'flex';
    alertElement.style.zIndex = '9999';

    // Force reflow for animation
    void alertElement.offsetWidth;

    // Add show class for animation
    alertElement.classList.add('show');
    console.log('Registration success alert shown');
}

// Close registration alert
function closeRegistrationAlert() {
    const alertElement = document.getElementById('registrationSuccessAlert');
    if (alertElement) {
        alertElement.classList.remove('show');

        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 300);
    }
}

function showLoginFailedAlert(message = "Email atau password yang Anda masukkan salah.") {
    const alertElement = document.getElementById('loginFailedAlert');
    const messageElement = document.getElementById('loginFailedMessage');

    if (alertElement && messageElement) {
        messageElement.textContent = message;
        alertElement.style.display = 'flex';

        // Force reflow for animation
        void alertElement.offsetWidth;

        // Add show class for animation
        alertElement.classList.add('show');
        console.log('Login failed alert shown');
    }
}

// Function to close failed login alert
function closeLoginFailedAlert() {
    const alertElement = document.getElementById('loginFailedAlert');
    if (alertElement) {
        alertElement.classList.remove('show');

        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 300);
    }
}
</script>