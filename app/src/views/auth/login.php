    <div class="container auth-wrapper">
        <div class="row auth-cover">
            <!-- Left Section with Background Image -->
            <div class="col-lg-8 d-none d-lg-block position-relative">
                <img src="/asset/background_sekolah.png" alt="Login Background">
                <div class="position-center text-white">
                    <h1 class="display-3 fw-bold">CERDAS</h1>
                    <h2 class="fs-4">Centralized Education Resource and Digital Academic System</h2>
                </div>
            </div>

            <!-- Right Section with Form -->
            <div class="col-lg-4 col-12 auth-bg" style="z-index: 1;">
                <div class="text-center mb-4">
                    <img src="path/to/logo_big.png" alt="EduSphere Logo" class="img-fluid">
                </div>
                <h2 class="text-center fw-bold">Welcome</h2>
                <p class="text-center">Please sign in with your ID</p>
                <?php if (isset($data["error"])): ?>
        <p style="color:red;"><?php echo $data["error"]; ?></p>
    <?php endif; ?>
                <form action="<?= BASEURL; ?>/Auth/authenticate" method="POST">
                    <!-- Username Input -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <!-- Remember Me Checkbox -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="remember-me" name="remember-me">
                        <label class="form-check-label" for="remember-me">Remember Me</label>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </form>

                <!-- Divider -->
                <div class="divider text-center my-3">
                    <span>or</span>
                </div>
                
                <!-- Google Login -->
                <div class="text-center">
                    <a href="#" class="btn btn-danger w-100">Login with Google</a>
                </div>
            </div>
        </div>
    </div>