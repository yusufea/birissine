<?php require_once('header.php') ?>
<link rel="stylesheet" href="assets/css/forgotPassword.css">
<main style="background-color: #fafafa !important;">
    <div class="auth-container mx-auto open-sans py-4">
        <form class="flex-column gap-10">
            <h3 class="text-center text-2xl font-family-semibold">
                Şifre Yenileme
            </h3>
            <div class="login-card flex-column gap-7">
                <div class="tabs open-sans text-sm font-semibold">
                    <div class="tab mail-text font-family-semibold">E-posta</div>
                    <a href="forgotPasswordPhone.php" class="tab font-family-semibold">Telefon Numarası</a>
                </div>
                <input class="input email-input" type="text" placeholder="E-posta adresi">
                <button type="submit" class="repassword-button font-family-semibold text-sm p-2_5" role="button">
                    Şifremi Yenile
                </button>
            </div>
        </form>
    </div>
</main>
<?php require_once('footer.php') ?>