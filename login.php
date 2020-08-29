<?php include ('includes/heder.php'); ?>




    <body class="h-100">


    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <!-- Form -->
                <form action="register.php" method="post">

                    <div class="container text-center">
                        <h3>Member Login</h3>
                    </div>
                    <div class="container text-center" id="reg-form">

                      <div class="form-group">
                            <label>User Email </label>
                            <input name="email" type="email" class="form-control" id="user_email";>
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" id="password";>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>


                    </div>
            </div>
            </form>
        </div>


<?php include ('includes/footer.php'); ?>