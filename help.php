<?php require_once('header.php') ?>
<link rel="stylesheet" href="assets/css/help.css">
<style>
    .label-border {
        display: block;
        border-bottom: solid 1px #e6e6e6;
        cursor: pointer;
    }

    input[type="radio"]:checked+.label-border h4 {
        color: #232f3e;
    }
</style>
<div class="container my-4" style="min-height: 100vh;">
    <div class="row gap-7">
        <div class="col-2">
            <?php require_once('settingsTabs.php') ?>
        </div>
        <div class="col-10">
            <div class="flex-column gap-6">
                <div class="page-header-tag p-3 card-border">
                    <h3 class="font-family-semibold text-base">
                        Popüler Sorular
                    </h3>
                </div>
                <div class="card-border">
                    <article>
                        <input id="article1" type="radio" name="articles" checked>
                        <label for="article1" class="label-border p-3">
                            <h4 class="font-family-semibold text-md">Ücret iadem ne zaman yapılır?</h4>
                        </label>
                        <div>
                            <p class="font-family-regular text-sm text-gray-t p-3">
                                İptal ettiğiniz ürünün ücret iadesi bankanıza bağlı olarak değişkenlik gösterebilir. Bu süre yaklaşık 1 haftayı bulabilir.

                                İade ettiğiniz ürünün ücret iade süreci aşağıdaki gibidir;

                                • Ürün satıcıya ulaştıktan sonra en geç 48 saat içerisinde iade şartlarına uygunluğu kontrol edilir.

                                • Ürün iade şartlarına uygunsa, iadeniz onaylanır ve ücret iadeniz bankanıza bağlı olarak 2-10 iş günü içerisinde ödeme yapmış olduğunuz kartınıza yansır.

                                • Ürün iade şartlarına uygun değilse adresinize geri gönderilir.

                                Not:

                                • Bankanıza ücret iadesi yapıldığında üyelik e-posta adresinize bilgilendirme mesajı gönderilir. Tutarın kartınıza/hesabınıza yansıma süresi bankanıza bağlıdır.

                                • Banka kartına yapılan iadenlerin hesabınıza yansıma süresi daha uzundur.

                                • Bankanızdan ücret iadesi kontrolü yapmak için “Hesabım” > “Siparişlerim“ adımından referans numaranızı görüntüleyebilirsiniz.

                                • Taksitli yapılan alışverişlerin ücreti bankaya tek seferde ödenir ancak bankanız bu tutarı kredi kartınıza taksitli bir şekilde iade eder.
                            </p>
                        </div>
                    </article>
                    <article>
                        <input id="article2" type="radio" name="articles">
                        <label for="article2" class="label-border p-3">
                            <h4 class="font-family-semibold text-md">Siparişimin teslimat adresini veya alıcı adını değiştirebilir miyim?</h4>
                        </label>
                        <div>
                            <p class="font-family-regular text-sm text-gray-t p-3">
                                Eğer siparişiniz “Kargoya Verildi” statüsündeyse alıcı ve/veya adres değişikliğini ancak kargo firmaları yapabilir. Değişiklik talebinizi iki şekilde iletebilirsiniz.
                                Kargonun gönderildiği kargo firması ile aşağıdaki numaralardan irtibata geçerek:
                                a. AGT Çağrı Merkezi için 0850 480 76 77
                                b. Aras Kargo için 444 25 52
                                c. Ceva Lojistik için 0216 999 24 40
                                d. Horoz Lojistik için 0850 202 33 50
                                e. MNG Kargo için 444 06 06
                                f. PTT Kargo için 444 1 788
                                g. Sürat Kargo için 0850 202 02 02
                                ı. Yurtiçi Kargo için 444 99 99
                            </p>
                        </div>
                    </article>
                    <article>
                        <input id="article3" type="radio" name="articles">
                        <label for="article3" class="label-border p-3">
                            <h4 class="font-family-semibold text-md">Siparişim ne zaman gelir?</h4>
                        </label>
                        <div>
                            <p class="font-family-regular text-sm text-gray-t p-3">
                                • Satın aldığınız ürünler Hesabım->Siparişlerim->Sipariş Detay sayfasında belirtilen teslimat tarih aralığında teslim edilir.
                            </p>
                        </div>
                    </article>
                    <article>
                        <input id="article4" type="radio" name="articles">
                        <label for="article4" class="label-border p-3">
                            <h4 class="font-family-semibold text-md">Siparişimi nasıl iptal edebilirim?</h4>
                        </label>
                        <div>
                            <p class="font-family-regular text-sm text-gray-t p-3">
                                Yanlış ürün sipariş ettiyseniz veya fikrinizi değiştirdiyseniz ürünlerinizin kargo hazırlıkları başlamadan önce aşağıdaki şekilde kolayca iptal edebilirsiniz.
                            </p>
                        </div>
                    </article>
                    <article>
                        <input id="article5" type="radio" name="articles">
                        <label for="article5" class="label-border p-3">
                            <h4 class="font-family-semibold text-md">Kampanyadan yararlandığım bir siparişte iptal ya da iade yaparsam kampanya iptal olur mu?</h4>
                        </label>
                        <div>
                            <p class="font-family-regular text-sm text-gray-t p-3">
                                Yanlış ürün sipariş ettiyseniz veya fikrinizi değiştirdiyseniz ürünlerinizin kargo hazırlıkları başlamadan önce aşağıdaki şekilde kolayca iptal edebilirsiniz.
                            </p>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>