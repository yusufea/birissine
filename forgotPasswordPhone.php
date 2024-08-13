<?php require_once('header.php') ?>
<link rel="stylesheet" href="assets/css/forgotPassword.css">
<main style="background-color: #fafafa;">
    <div class="auth-container mx-auto  py-4">
        <div class="flex-column gap-10">
            <h3 class="text-center text-2xl font-family-semibold">
                Şifre Yenileme
            </h3>
            <form class="login-card flex-column gap-7">
                <div class="tabs text-sm">
                    <a href="forgotPassword.php" class="tab font-family-semibold">E-posta</a>
                    <div class="tab phone-text font-family-semibold">Telefon Numarası</div>
                </div>
                <!-- <input class="input email-input" type="text" placeholder="Telefon Numarası"> -->
                <input type="tel" id="phone" name="phone" placeholder="0 (___) ___ __ __" style="height: 23px;" class="input  email-input" required>
                <button type="submit" class="repassword-button font-family-semibold text-sm p-2_5" role="button">
                    Şifremi Yenile
                </button>
            </form>
        </div>
    </div>
</main>
<script src="assets/js/auth.js"></script>
<?php require_once('footer.php') ?>