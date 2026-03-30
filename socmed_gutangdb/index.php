<?php include 'views/header.php'; ?>
        <div class="registration-form">
            <p class="title">REGISTER</p>
            <form action="models/register_account.php" method="POST">
                <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Meok@gmail.com">
                <label for="firstname">First name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Romeo">
                <label for="lastname">Last name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Gutang">
                <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="******">
                <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="******">               
                    <input type="submit" value="Signup">
            </form>
        </div>
<?php include 'views/footer.php';
