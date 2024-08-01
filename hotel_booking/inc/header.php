    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-1 shadow-sm sticky-top" style="background-color:#FADBD8 ;">
        <div class="container-fluid">
            <a class="navbar-brand me-3 fw-300 fs-3 h-font" href="index.php">
                <img src="img/logo-1.png" class="logo"></a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-4" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="about.php">About</a>
                </li>
            </ul>
            <div>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#RegisterModal">
                        <i class="bi bi-person-fill"></i>User
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Register Modal -->
    <div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            Register
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID (Aadhaar card, Passport, Driving license,etc.) that will be required duirng check-in.
                        </span>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone No.</label>
                            <input type="tel" class="form-control shadow-none" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none" required />
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none custom-btn">Register</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="text-secondary text-decoration-none" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#LoginModal">Do you have an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID (Aadhaar card, Passport, Driving license,etc.) that will be required duirng check-in.
                        </span>
                        <div class="mb-3">
                            <label class="form-label">Email address or Phone No.</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none custom-btn">Login</button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>