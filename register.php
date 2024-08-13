<?php
require_once("header.php");
?>
<link rel="stylesheet" href="assets/css/register.css">
<link rel="stylesheet" href="assets/css/login.css">
<main style="background-color: #fafafa !important;">
    <div id="contract-text" class="modal-2">
        <div class="modal-content-2">
            <div class="modal-header-2">
                <div class="flex justify-between alignItems-center">
                    <div class="flex-column gap-1">
                        <h4 class="text-base font-family-semibold">Aydınlatma Metni</h4>
                    </div>
                    <span class="modal-close-icon">&times;</span>
                </div>
            </div>
            <div class="my-2" style="height: 1px;background-color: #333; opacity:0.1"></div>
            <div>
                <p class="font-family-regular text-sm p-2" style="overflow-y: scroll;height:400px">
                    Kanun, kişisel verileri işlenen ilgili kişilere bu verilerinin kim tarafından, hangi amaçlarla ve hukuki sebeplerle işlenebileceği, kimlere hangi amaçlarla aktarılabileceği hususunda bilgi edinme hakkı tanımakta ve bu hususları, veri sorumlusunun aydınlatma yükümlülüğü kapsamında ele almaktadır. Buna göre veri sorumlusu, Kanunun 10. maddesi çerçevesinde kişisel verilerin elde edilmesi sırasında bizzat veya yetkilendirdiği kişi aracılığıyla aşağıdaki bilgileri ilgili kişiye sağlamakla yükümlüdür:

                    Veri sorumlusunun ve varsa temsilcisinin kimliği,
                    Kişisel verilerin hangi amaçla işleneceği,
                    Kişisel verilerin kimlere ve hangi amaçla aktarılabileceği,
                    Kişisel veri toplamanın yöntemi ve hukuki sebebi,
                    11. maddede sayılan diğer hakları.
                    Veri işleme faaliyetinin ilgili kişinin açık rızasına bağlı olduğu veya faaliyetin Kanundaki diğer bir şart kapsamında yürütüldüğü durumlarda da veri sorumlusunun ilgili kişiyi bilgilendirme yükümlülüğü devam etmektedir. Yani, ilgili kişi, kişisel verisinin işlendiği her durumda aydınlatılmalıdır.
                    Kanun, kişisel verileri işlenen ilgili kişilere bu verilerinin kim tarafından, hangi amaçlarla ve hukuki sebeplerle işlenebileceği, kimlere hangi amaçlarla aktarılabileceği hususunda bilgi edinme hakkı tanımakta ve bu hususları, veri sorumlusunun aydınlatma yükümlülüğü kapsamında ele almaktadır. Buna göre veri sorumlusu, Kanunun 10. maddesi çerçevesinde kişisel verilerin elde edilmesi sırasında bizzat veya yetkilendirdiği kişi aracılığıyla aşağıdaki bilgileri ilgili kişiye sağlamakla yükümlüdür:

                    Veri sorumlusunun ve varsa temsilcisinin kimliği,
                    Kişisel verilerin hangi amaçla işleneceği,
                    Kişisel verilerin kimlere ve hangi amaçla aktarılabileceği,
                    Kişisel veri toplamanın yöntemi ve hukuki sebebi,
                    11. maddede sayılan diğer hakları.
                    Veri işleme faaliyetinin ilgili kişinin açık rızasına bağlı olduğu veya faaliyetin Kanundaki diğer bir şart kapsamında yürütüldüğü durumlarda da veri sorumlusunun ilgili kişiyi bilgilendirme yükümlülüğü devam etmektedir. Yani, ilgili kişi, kişisel verisinin işlendiği her durumda aydınlatılmalıdır.
                    Kanun, kişisel verileri işlenen ilgili kişilere bu verilerinin kim tarafından, hangi amaçlarla ve hukuki sebeplerle işlenebileceği, kimlere hangi amaçlarla aktarılabileceği hususunda bilgi edinme hakkı tanımakta ve bu hususları, veri sorumlusunun aydınlatma yükümlülüğü kapsamında ele almaktadır. Buna göre veri sorumlusu, Kanunun 10. maddesi çerçevesinde kişisel verilerin elde edilmesi sırasında bizzat veya yetkilendirdiği kişi aracılığıyla aşağıdaki bilgileri ilgili kişiye sağlamakla yükümlüdür:

                    Veri sorumlusunun ve varsa temsilcisinin kimliği,
                    Kişisel verilerin hangi amaçla işleneceği,
                    Kişisel verilerin kimlere ve hangi amaçla aktarılabileceği,
                    Kişisel veri toplamanın yöntemi ve hukuki sebebi,
                    11. maddede sayılan diğer hakları.
                    Veri işleme faaliyetinin ilgili kişinin açık rızasına bağlı olduğu veya faaliyetin Kanundaki diğer bir şart kapsamında yürütüldüğü durumlarda da veri sorumlusunun ilgili kişiyi bilgilendirme yükümlülüğü devam etmektedir. Yani, ilgili kişi, kişisel verisinin işlendiği her durumda aydınlatılmalıdır.
                </p>
            </div>
        </div>
    </div>
    <div class="py-4 auth-container mx-auto">
        <div class="my-2">
            <h4 class="text-center text-xl font-family-black">Merhaba,</h4>
            <h6 class="text-center text-lg font-family-regular">
                Birissine'ye giriş yap veya hesap oluştur
            </h6>
        </div>
        <form class="login-card flex-column gap-7">
            <div class="tabs open-sans text-sm font-semibold">
                <a href="login.php" class="tab font-family-semibold">Giriş Yap</a>
                <div class="tab register-text font-family-semibold">Üye Ol</div>
            </div>
            <div class="flex-column gap-1">
                <h6 class="font-family-semibold text-sm">E-Posta</h6>
                <input class="input email-input" type="text" placeholder="E-posta adresi veya telefon numarası">
            </div>
            <div class="flex-column gap-1">
                <h6 class="font-family-semibold text-sm">Şifre</h6>
                <div class="password-container">
                    <input id="password" class="input password-input" type="password" placeholder="Şifre">
                    <span class="material-symbols-outlined toggle-password" id="togglePassword">visibility</span>
                </div>
                <p class="font-family-regular text-xs">Şifreniz <span class="font-family-semibold">en az 10 karakter </span> olmalı. <span class="font-family-semibold">1 büyük harf, 1 küçük harf</span> ve <span class="font-family-semibold">rakam</span> içermelidir</p>
            </div>
            <div class="flex-column gap-2">
                <h6 class="font-family-regular text-sm">Cinsiyet (Opsiyonel)</h6>
                <div class="flex justify-center" style="border: solid 1px #e6e6e6;border-radius:6px">
                    <div class="font-family-semibold text-md sex-card sex-card-female p-1 py-1_5 w-full text-center selected pointer">
                        Kadın
                    </div>
                    <div class="font-family-semibold text-md sex-card sex-card-male p-1 py-1_5 w-full text-center pointer">
                        Erkek
                    </div>
                </div>
            </div>
            <div class="flex-column gap-3">
                <div class="flex gap-1">
                    <input type="checkbox">
                    <p class="font-family-regular text-13">Tarafıma elektronik ileti gönderilmesini kabul ediyorum.</p>
                </div>
                <div class="flex gap-1">
                    <input type="checkbox">
                    <p class="font-family-regular text-13">Kişisel verilerimin işlenmesine yönelik <span class="underline" id="contractButton">aydınlatma metnini</span> okudum ve anladım.</p>
                </div>
            </div>
            <div class="flex-column gap-2">
                <button type="submit" class="login-button font-family-semibold text-md text-xs p-2_5" role="button">
                    Üye Ol
                </button>
                <p class="font-family-regular text-xxs">
                    Kişisel verileriniz, <span class="font-family-semibold">Aydınlatma Metni</span> kapsamında işlenmektedir. “Devam et” veya “Sosyal Hesap” butonlarından birine basarak <span class="font-family-semibold pointer">Üyelik Sözleşmesi</span>’ni ve <span class="font-family-semibold">Gizlilik Politikası</span>’nı okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.
                </p>
            </div>
            <div class="flex justify-center gap-3">
                <div class="flex gap-2 other-register-card p-2 w-full pointer">
                    <img src="assets/media/images/facebook_logo.png" style="width: 40px;">
                    <div class="flex-column">
                        <span class="font-family-semibold text-sm">Facebook</span>
                        <h6 class="font-family-regular text-sm">ile kaydol</h6>
                    </div>
                </div>
                <div class="flex gap-2 other-register-card p-2 w-full pointer">
                    <img src="assets/media/images/google_loog.png" style="width: 40px;">
                    <div class="flex-column">
                        <span class="font-family-semibold text-sm">Google</span>
                        <h6 class="font-family-regular text-sm">ile kaydol</h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <script src="assets/js/register.js"></script>
    <?php
    require_once("footer.php");
    ?>