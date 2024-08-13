<?php
require_once("header.php");
?>
<link rel="stylesheet" href="assets/css/login.css">
<main style="background-color: #fafafa !important">
    <div class="py-4 auth-container mx-auto">
        <div class="my-2">
            <h4 class="text-center text-xl font-family-black">Merhaba,</h4>
            <h6 class="text-center text-lg font-family-regular">
                Birissine'ye giriş yap veya hesap oluştur
            </h6>
        </div>
        <form class="login-card flex-column gap-7 mt-4">
            <div class="tabs open-sans text-sm font-semibold">
                <div class="tab login-text font-family-semibold">Giriş Yap</div>
                <a href="register.php" class="tab font-family-semibold">Üye Ol</a>
            </div>
            <div class="flex-column gap-1">
                <h6 class="font-family-semibold text-sm">E-Posta</h6>
                <input class="input email-input" type="text" placeholder="E-posta adresi">
            </div>
            <div class="flex-column gap-1">
                <h6 class="font-family-semibold text-sm">Şifre</h6>
                <div class="password-container">
                    <input id="password" class="input password-input" type="password" placeholder="Şifre">
                    <span class="material-symbols-outlined toggle-password" id="togglePassword">visibility</span>
                </div>
            </div>
            <a href="forgotPassword.php" class="text-black-t text-sm font-family-semibold">Şifremi Unuttum</a>
            <button type="submit" class="login-button font-family-semibold text-md p-2_5" role="button">
                Giriş Yap
            </button>
        </form>
    </div>
</main>

<script src="./assets/js/login.js"></script>
<?php
require_once("footer.php");
?>