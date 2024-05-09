<section class="intro">
    <div class="mask d-flex align-items-center h-100" style="background-color: #D6D6D6;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="my-md-5 pb-5">

                                <h1 class="fw-bold mb-0">Đăng Nhập</h1>

                                <i class="fas fa-user-astronaut fa-3x my-5"></i>

                                <form action="./index.php?act=login" method="POST">

                                    <div class="form-outline mb-4">
                                        <label for="typeEmail" class="form-label">Account</label>
                                        <input type="text" id="typeEmail" name="account" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typePassword">Password</label>
                                        <input type="password" id="typePassword" name="password" class="form-control form-control-lg" />
                                    </div>

                                    <button class="btn btn-primary btn-lg btn-rounded gradient-custom text-body px-5" name="loginSubmit" type="submit">Login</button>

                                </form>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="./index.php?act=signup" class="text-body fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>