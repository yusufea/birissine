document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tabs .tab");
  const orderContent = document.getElementById("orderContent");

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      tabs.forEach((t) => t.classList.remove("active-tab"));

      this.classList.add("active-tab");
      this.classList.add("selected-tab-border");

      updateOrderContent(this.id);
    });
  });

  function updateOrderContent(tabId) {
    orderContent.innerHTML = "";

    let content = "";

    switch (tabId) {
      case "addressTab":
        content = `<div class="flex justify-between mt-5 relative">
                <div id="deliveryAddress" class="w-full flex-column gap-4 p-4">
                    <div class="flex justify-between alignItems-center">
                        <h6 class="font-family-semibold text-base pointer text-gray">Teslimat Adresi</h6>
                        <div id="invoiceSameAsDelivery" class="flex gap-1 alignItems-center absolute" style="right:27px">
                            <input type="checkbox" id="sameAddressCheckbox">
                            <label for="sameAddressCheckbox" class="font-family-regular text-sm text-gray">Faturamı Aynı Adrese Gönder</label>
                        </div>
                    </div>
                    <div id="delivery-address-area" class="bill-address-area">
                        <!-- <div id="newAddressButton2" class="flex justify-center gap-2 add-new-address-side" style="width: 50%;">
                            <span class="material-symbols-outlined">add</span>
                            <h6 class="font-family-semibold text-base pointer">Yeni Adres Ekle</h6>
                        </div> -->
                        <div class="flex-column address-card-width new-address-button" style="justify-content:end">
                            <div class="flex gap-2 justify-center alignItems-center rounded-md" style="height:136px;background-color: #fafafa;border: solid 1px #e6e6e6;">
                                <span class="material-symbols-outlined">add</span>
                                <h6 class="font-family-semibold text-base pointer">Yeni Adres Ekle</h6>
                            </div>
                        </div>
                        <div class="flex-column gap-2 w-full address-card-width address-table address-cart">
                            <div class="flex justify-between">
                                <div class="flex gap-1">
                                    <input type="radio" name="adres">
                                    <h6 class="font-family-semibold text-sm">Evim</h6>
                                </div>
                                <h6 class="font-family-semibold text-gray-t underline text-sm pointer edit-address-button">Düzenle</h6>
                            </div>
                            <div class="card-border p-4 flex-column gap-2 address-card">
                                <div class="flex justify-between alignItems-center">
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">person</span>
                                        <h6 class="font-family-semibold text-sm">asdsadasdasd</h6>
                                    </div>
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">smartphone</span>
                                        <h6 class="font-family-semibold text-sm">5252525</h6>
                                    </div>
                                </div>
                                <p class="font-family-regular text-md">qweqweqwe</p>
                                <h6 class="font-family-semibold text-md">asdasd</h6>
                            </div>
                        </div>
                        <div class="flex-column gap-2 w-full address-card-width address-table address-cart">
                            <div class="flex justify-between">
                                <div class="flex gap-1">
                                    <input type="radio" name="adres">
                                    <h6 class="font-family-semibold text-sm">Evim</h6>
                                </div>
                                <h6 class="font-family-semibold text-gray-t underline text-sm pointer edit-address-button">Düzenle</h6>
                            </div>
                            <div class="card-border p-4 flex-column gap-2 address-card">
                                <div class="flex justify-between alignItems-center">
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">person</span>
                                        <h6 class="font-family-semibold text-sm">asdsadasdasd</h6>
                                    </div>
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">smartphone</span>
                                        <h6 class="font-family-semibold text-sm">5252525</h6>
                                    </div>
                                </div>
                                <p class="font-family-regular text-md">qweqweqwe</p>
                                <h6 class="font-family-semibold text-md">asdasd</h6>
                            </div>
                        </div>
                        <div class="flex-column gap-2 w-full address-card-width address-table address-cart">
                            <div class="flex justify-between">
                                <div class="flex gap-1">
                                    <input type="radio" name="adres">
                                    <h6 class="font-family-semibold text-sm">Evim</h6>
                                </div>
                                <h6 class="font-family-semibold text-gray-t underline text-sm pointer edit-address-button">Düzenle</h6>
                            </div>
                            <div class="card-border p-4 flex-column gap-2 address-card">
                                <div class="flex justify-between alignItems-center">
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">person</span>
                                        <h6 class="font-family-semibold text-sm">asdsadasdasd</h6>
                                    </div>
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">smartphone</span>
                                        <h6 class="font-family-semibold text-sm">5252525</h6>
                                    </div>
                                </div>
                                <p class="font-family-regular text-md">qweqweqwe</p>
                                <h6 class="font-family-semibold text-md">asdasd</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="separator" style="opacity:0.3">
                <div id="invoiceAddressContainer"  class="w-full flex-column gap-4 p-4">
                    <div id="invoiceAddress" class="flex-column gap-4">
                        <h6 class="font-family-semibold text-base pointer text-gray">Fatura Adresi</h6>
                        <div class="flex gap-2 justify-center alignItems-center rounded-md new-address-button" style="height:136px;background-color: #fafafa;border: solid 1px #e6e6e6;">
                            <span class="material-symbols-outlined">add</span>
                            <h6 class="font-family-semibold text-base pointer">Yeni Adres Ekle</h6>
                        </div>
                        <div class="flex-column gap-2 w-full address-card-width address-table address-cart">
                            <div class="flex justify-between">
                                <div class="flex gap-1">
                                    <input type="radio" name="adres2">
                                    <h6 class="font-family-semibold text-sm">Evim</h6>
                                </div>
                                <h6 class="font-family-semibold text-gray-t underline text-sm pointer edit-address-button">Düzenle</h6>
                            </div>
                            <div class="card-border p-4 flex-column gap-2 address-card">
                                <div class="flex justify-between alignItems-center">
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">person</span>
                                        <h6 class="font-family-semibold text-sm">asdsadasdasd</h6>
                                    </div>
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">smartphone</span>
                                        <h6 class="font-family-semibold text-sm">5252525</h6>
                                    </div>
                                </div>
                                <p class="font-family-regular text-md">qweqweqwe</p>
                                <h6 class="font-family-semibold text-md">asdasd</h6>
                            </div>
                        </div>
                        <div class="flex-column gap-2 w-full address-card-width address-table address-cart">
                            <div class="flex justify-between">
                                <div class="flex gap-1">
                                    <input type="radio" name="adres2">
                                    <h6 class="font-family-semibold text-sm">Evim</h6>
                                </div>
                                <h6 class="font-family-semibold text-gray-t underline text-sm pointer edit-address-button">Düzenle</h6>
                            </div>
                            <div class="card-border p-4 flex-column gap-2 address-card">
                                <div class="flex justify-between alignItems-center">
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">person</span>
                                        <h6 class="font-family-semibold text-sm">asdsadasdasd</h6>
                                    </div>
                                    <div class="flex gap-1 alignItems-center">
                                        <span class="material-symbols-outlined text-lg">smartphone</span>
                                        <h6 class="font-family-semibold text-sm">5252525</h6>
                                    </div>
                                </div>
                                <p class="font-family-regular text-md">qweqweqwe</p>
                                <h6 class="font-family-semibold text-md">asdasd</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        break;
      case "paymentTab":
        content = `<div class="flex-column gap-6">
                    <div class="flex gap-4 card-border p-4 ">
                <div class="flex-column gap-5 w-full">
                    <h6 class="font-family-semibold text-lg">Kart Bilgileri</h6>
                    <div class="flex-column gap-2 w-full">
                        <label class="font-family-regular text-sm">
                            Kart Numarası
                        </label>
                        <input class="input" type="text" placeholder="" style="height:40px;width:100%">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex-column gap-2 w-full">
                            <label class="font-family-regular text-sm">
                                Son Kullanma Tarihi
                            </label>
                            <div>
                                <select class="dropdown-menu" id="dropdown-menu-credit-month" style="height: 40px;">
                                    <option value="" selected disabled>Ay</option>
                                </select>
                                <select class="dropdown-menu" id="dropdown-menu-credit-year" style="height: 40px;">
                                    <option value="" selected disabled>Yıl</option>
                                </select>
                            </div>
                            <div class="flex gap-1">
                                <input type="checkbox">
                                <h6 class="font-family-regular text-sm">3D Secure ile ödemek istiyorum</h6>
                            </div>
                        </div>
                        <div class="flex-column gap-2" style="width: 20%;">
                            <label class="font-family-regular text-sm">
                                CVV
                            </label>
                            <input class="input" type="text" placeholder="" maxlength="3" style="height:40px;width:100%">
                        </div>
                    </div>
                </div>
                <hr style="opacity: 0.3;">
                <div class="w-full">
                    <h6 class="font-family-semibold text-lg">Taksit Seçenekleri</h6>
                    <h6 class="font-family-regular text-sm">Kartınıza uygun taksit seçeneğini seçiniz</h6>
                    <table id="installment-table">
                        <thead>
                            <tr>
                                <th class="font-family-semibold text-md">Taksit Sayısı</th>
                                <th class="font-family-semibold text-md">Aylık Ödeme</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dinamik olarak buraya eklenecek -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-border p-4 flex-column gap-10">
                <h6 class="font-family-semibold text-lg">Sözleşmeler ve Formlar</h6>
                <div class="flex-column gap-2">
                    <h6 class="font-family-semibold text-sm">Cayma Hakkı</h6>
                    <div class="rulement-area" style="overflow-y: auto;">
                        <p class="font-family-regular text-sm text-gray-t px-2">
                            Nasıl İade Ederim?


                            1. "Hesabım" > “Siparişlerim'' > “Sipariş detay” adımlarını takip edin.

                            2. İade Kargo Kodu Oluştur butonuna tıklayın.

                            3. İade edilecek ürün ve iade nedeni seçin. Aynı üründen birden fazla satın aldıysanız iade edilecek ürün adedini de seçmeniz gerekir.

                            4. İade etmek istediğiniz ürünlerin uygunluğuna göre size önerilen iade yöntemlerinden birini seçin.

                            5. Birden fazla kargo seçeneği çıktığı durumda kargo seçiminizi yapın.

                            6. Ekranda çıkan iade kargo kodunu not alın. İade kargo kodunuza siparişlerim sayfasından da ulaşabilirsiniz.

                            7. İade kodu aynı olan ürünleri faturasıyla beraber aynı pakete koyun ve paketin sağlam olduğundan emin olun.

                            8. İade kodu farklı olan ürünler aynı kargoya verilse bile farklı paketler halinde verilmelidir.

                            9. Seçtiğiniz iade yöntemine göre 7 gün içinde paketinizi seçeceğiniz gel al noktası veya kargo şubesine teslim edin veya randevu gününde adresinize gelecek görevliye teslim edin.

                            10. 7 günü geçirdiğiniz durumda yeniden iade kargo kodu almanız gerekir.


                            İade Koşulları:

                            1- Ürünün paketi hasar görmemiş ve kullanılmamış olması gerekmektedir.

                            2- Ürünün tüm aksesuarları ve orijinal kutusu ile beraber iade edilmesi gerekmektedir.

                            3- Aşağıdaki ürün gruplarının ambalajı açılmamış, denenmemiş, bozulmamış ve kullanılmamış olmaları halinde iadesi kabul edilir.

                            • Sağlık ve hijyen açısından uygun olmayan ürünlerin (Kozmetik ve kişisel bakım ürünleri,parfüm, epilatör, tıraş makinesi, kulaklık, iç giyim ürünleri, mayo, bikini vb.)

                            • Kopyalanabilir yazılım ve programlar (DVD, VCD, CD, kasetler vb.)

                            • Kitap ve kırtasiye sarf malzemeleri (toner, kartuş, şerit vb.)

                            4- Tek kullanımlık ürünlerin ve hızlı bozulan veya son kullanma tarihi geçme ihtimali olan ürünlerin iadesi kabul edilmemektedir.
                        </p>
                    </div>
                </div>
                <div class="flex-column gap-2">
                    <h6 class="font-family-semibold text-sm">Ön Bilgilendirme Formu</h6>
                    <div class="rulement-area" style="overflow-y: auto;">
                        <p class="font-family-regular text-sm text-gray-t px-2">
                            ÖN BİLGİLENDİRME FORMU
                            1. TARAFLAR VE KONU
                            İşbu Ön Bilgilendirme Formu’nun konusu, Alıcı ve Satıcı arasındaki Sözleşme’ye ilişkin Kanun ve Yönetmelik hükümleri uyarınca bilgilendirilmesidir. Ayrıca Yönetmelik uyarınca yer verilmesi zorunlu olan hususlar Ön Bilgilendirme Formu’nda yer almaktadır.

                            ALICI, Ön Bilgilendirme Formu ve Sözleşme’ye ilişkin bilgileri üyeliğinin bağlı olduğu “Hesabım” sayfasından takip edebilecek olup değişen bilgilerini bu sayfa üstünden güncelleyebilecektir. Ön Bilgilendirme Formu ve Sözleşme’nin bir nüshası Alıcı’nın üyelik hesabında mevcuttur ve talep edilmesi halinde ayrıca elektronik posta ile de gönderilebilecektir.

                            2. TANIMLAR
                            Ön Bilgilendirme Formu ve Sözleşme’nin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı açıklamaları ifade edeceklerdir.

                            ALICI : Bir Mal veya Hizmet’i ticari veya mesleki olmayan amaçlarla edinen, kullanan veya yararlanan gerçek kişiyi,
                            Bakanlık : Türkiye Cumhuriyeti Ticaret Bakanlığı’nı,
                            Banka : 5411 sayılı Bankacılık Kanunu uyarınca kurulan lisanslı kuruluşları,
                            DSM veya Elektronik Ticaret Aracı Hizmet Sağlayıcı : Oluşturduğu sistem ile Satıcı’nın Ürün/Hizmet’i satışa sunduğu Platform’u işleten ve Satıcı adına mesafeli sözleşme kurulmasına aracılık eden DSM Grup Danışmanlık İletişim ve Satış Ticaret Anonim Şirketi’ni,
                            Hizmet : Bir ücret veya menfaat karşılığında yapılan ya da yapılması taahhüt edilen Ürün sağlama dışındaki her türlü tüketici işleminin konusunu,
                            Kanun : 6502 sayılı Tüketicinin Korunması Hakkında Kanun’u,
                            Kargo Şirketi : Ürün’ün Alıcı’ya ulaştırılmasını, iade süreçlerinde Alıcı’dan alınarak Satıcı veya DSM’ye ulaştırılmasını sağlayan anlaşmalı kargo veya lojistik şirketini,
                            Ön Bilgilendirme Formu : Sözleşme kurulmadan ya da buna karşılık herhangi bir teklif Alıcı tarafından kabul edilmeden önce Alıcı’yı Yönetmelik’te belirtilen asgari hususlar konusunda bilgilendirmek için hazırlanan formu,
                            Platform : DSM’ye ait www.trendyol.com adlı internet sitesini ve mobil uygulamasını,
                            Satıcı : Kamu tüzel kişileri de dahil olmak üzere ticari veya mesleki amaçlarla tüketiciye Ürün/Hizmet sunan ya da Ürün/Hizmet sunanın adına ya da hesabına hareket eden ve aşağıda bilgileri bulunan gerçek ve/veya tüzel kişiyi,
                            Sözleşme : Satıcı ve Alıcı arasında akdedilen Sözleşme’yi,
                            Trendyol Teslimat Noktası : Alıcı’nın satın aldığı Ürünler’i kolayca teslim alabildiği anlaşmalı esnaf noktalarını, kargo şubelerini ve zincir mağazalarını,
                            Ürün : Alışverişe konu olan taşınır eşya, konut veya tatil amaçlı taşınmaz mallar ile elektronik ortamda kullanılmak üzere hazırlanan yazılım, ses, görüntü ve benzeri her türlü gayri maddi malı,
                            Yönetmelik : Mesafeli Sözleşmeler Yönetmeliği’ni ifade eder.
                            3. ALICI, SATICI VE ELEKTRONİK TİCARET ARACI HİZMET SAĞLAYICI
                            ALICI BİLGİLERİ
                            Teslim Edilecek Kişi : İnci Altuntoprak
                            Teslimat Adresi : Sağlık bilimleri üniversitesi Gülhane külliyesi kız öğrenci yurdu etlik/Ankara
                            Telefon : 541*****40
                            Faks : 541*****40
                            E-posta/Kullanıcı Adı : yusuf.e.a@hotmail.com
                            SATICI BİLGİLERİ
                            Satıcının Ticaret Unvanı / Adı ve Soyadı : GÖZDE MUŞ
                            Satıcının Adresi : yeniköy mahallesi yeniköy sokak no:91 d:2
                            Satıcının Mersis Numarası :
                            Satıcının Vergi Kimlik Numarası : 9691416394
                            Satıcının Telefonu : 5344394794
                            Satıcının Faks Numarası : 5344394794
                            Satıcı KEP ve E-posta Bilgileri : gozde.mus@hs01.kep.tr
                            ELEKTRONİK TİCARET ARACI HİZMET SAĞLAYICI BİLGİLERİ
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Unvanı : DSM Grup Danışmanlık İletişim ve Satış Ticaret A.Ş.
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Adresi : Maslak Mahallesi Saat Sokak Spine Tower No:5 iç kapı:19 Sarıyer İstanbul
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Mersis Numarası : 0313055766900016
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Vergi Kimlik Numarası : Maslak VD- 3130557669
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Telefonu : 0 212 331 0 200
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Faks Numarası : 0 212 332 18 93
                            Elektronik Ticaret Aracı Hizmet Sağlayıcı Şikâyet/Öneri Kanalları : 0 212 331 0 200 telefon numarası üzerinden ve Platform’da yer alan “Trendyol Asistan’a Sor” başlıklı alandan şikayet ve öneriler iletilebilecektir.
                            4. ÜRÜN/HİZMET BİLGİLERİ
                        </p>
                    </div>
                </div>
                <div class="flex-column gap-2">
                    <h6 class="font-family-semibold text-sm">Mesafeli Satış Sözleşmesi</h6>
                    <div class="rulement-area" style="overflow-y: auto;">
                        <p class="font-family-regular text-sm text-gray-t px-2">
                            MESAFELİ SATIŞ SÖZLEŞMESİ
                            1. TARAFLAR
                            İşbu Mesafeli Satış Sözleşmesi ("Sözleşme"), Alıcı ve Satıcı arasında aşağıda belirtilen hüküm ve şartlar çerçevesinde elektronik ortamda kurulmuştur. Alıcı ve Satıcı, Sözleşme kapsamında birlikte “Taraflar”, ayrı ayrı “Taraf” olarak anılacaktır.

                            2. TANIMLAR
                            Sözleşme’nin uygulanmasında ve yorumlanmasında aşağıda yazılı terimler karşılarındaki yazılı açıklamaları ifade edeceklerdir.

                            ALICI : Bir Mal veya Hizmet’i ticari veya mesleki olmayan amaçlarla edinen, kullanan veya yararlanan gerçek kişiyi,
                            Bakanlık : Türkiye Cumhuriyeti Ticaret Bakanlığı’nı,
                            Banka : 5411 sayılı Bankacılık Kanunu uyarınca kurulan lisanslı kuruluşları,
                            DSM veya Elektronik Ticaret Aracı Hizmet Sağlayıcı : Oluşturduğu sistem ile Satıcı’nın Ürün/Hizmet’i satışa sunduğu Platform’u işleten ve Satıcı adına mesafeli sözleşme kurulmasına aracılık eden DSM Grup Danışmanlık İletişim ve Satış Ticaret Anonim Şirketi’ni,
                            Hizmet : Bir ücret veya menfaat karşılığında yapılan ya da yapılması taahhüt edilen Ürün sağlama dışındaki her türlü tüketici işleminin konusunu,
                            Kanun : 6502 sayılı Tüketicinin Korunması Hakkında Kanun’u,
                            Kargo Şirketi : Ürün’ün Alıcı’ya ulaştırılmasını, iade süreçlerinde Alıcı’dan alınarak Satıcı veya DSM’ye ulaştırılmasını sağlayan anlaşmalı kargo veya lojistik şirketini,
                            Ön Bilgilendirme Formu : Sözleşme kurulmadan ya da buna karşılık herhangi bir teklif Alıcı tarafından kabul edilmeden önce Alıcı’yı Yönetmelik’te belirtilen asgari hususlar konusunda bilgilendirmek için hazırlanan formu,
                            Platform : DSM’ye ait www.trendyol.com adlı internet sitesini ve mobil uygulamasını,
                            Satıcı : Kamu tüzel kişileri de dahil olmak üzere ticari veya mesleki amaçlarla tüketiciye Ürün/Hizmet sunan ya da Ürün/Hizmet sunanın adına ya da hesabına hareket eden ve Sözleşme’nin 5. maddesinde bilgileri bulunan gerçek ve/veya tüzel kişiyi,
                            Sözleşme : Satıcı ve Alıcı arasında akdedilen Sözleşme’yi,
                        </p>
                    </div>
                </div>
            </div>
        </div>`;
        break;
      default:
        content = `<div>default</div>`;
    }

    orderContent.innerHTML = content;

    if (tabId === "addressTab") {
      const sameAddressCheckbox = document.getElementById(
        "sameAddressCheckbox"
      );
      const invoiceAddress = document.getElementById("invoiceAddressContainer");
      const separator = document.getElementById("separator");
      const deliveryAddressArea = document.getElementById(
        "delivery-address-area"
      );
      const card = document.querySelectorAll(".address-card-width");

      sameAddressCheckbox.addEventListener("change", function () {
        if (this.checked) {
          invoiceAddress.style.display = "none";
          separator.style.display = "none";
          deliveryAddressArea.classList.add("delivery-address-area");
          deliveryAddressArea.classList.remove("bill-address-area");

          card.forEach((element) => {
            element.style.width = "calc((100% / 2) - 8px)";
          });
        } else {
          invoiceAddress.style.display = "block";
          separator.style.display = "block";
          deliveryAddressArea.classList.remove("delivery-address-area");
          deliveryAddressArea.classList.add("bill-address-area");
          card.forEach((element) => {
            element.style.width = "100%";
          });
        }
      });

      const newAddressModal = document.getElementById("newAddressModal");
      const newAddressButtons = document.querySelectorAll(
        ".new-address-button"
      );
      const modalCloseIcon =
        document.getElementsByClassName("modal-close-icon")[0];

      newAddressButtons.forEach((button) => {
        button.onclick = function () {
          newAddressModal.style.display = "block";
        };
      });

      modalCloseIcon.onclick = function () {
        newAddressModal.style.display = "none";
      };

      var editAddressModal = document.getElementById("editAddressModal");
      var editAddressModalClose = document.getElementsByClassName("close")[0];
      var btns = document.querySelectorAll(".edit-address-button");

      btns.forEach((button) => {
        button.onclick = function () {
          editAddressModal.style.display = "block";
        };
      });

      editAddressModalClose.onclick = function () {
        editAddressModal.style.display = "none";
      };

      // Tüm radio butonlarını seç
      const addressRadios = document.querySelectorAll(
        '.address-table input[type="radio"]'
      );

      // Her radio butonuna olay dinleyicisi ekle
      addressRadios.forEach((radio) => {
        radio.addEventListener("change", function () {
          // Seçili radio butonun ait olduğu kartı bul
          const selectedCard =
            this.closest(".address-table").querySelector(".address-card");

          // Tüm radio butonlarını kontrol et
          addressRadios.forEach((radio) => {
            const card = radio
              .closest(".address-table")
              .querySelector(".address-card");

            // Eğer name değerleri aynı değilse sınıfı kaldırma
            if (radio.name === this.name) {
              card.classList.remove("selected");
            }
          });

          // Seçili karta 'selected' sınıfını ekle
          if (selectedCard) {
            selectedCard.classList.add("selected");
          }
        });
      });
    }

    if (tabId === "paymentTab") {
      const monthDropdown = document.getElementById(
        "dropdown-menu-credit-month"
      );
      const yearDropdown = document.getElementById("dropdown-menu-credit-year");
      const selectedMonthText = document.getElementById("selected-month");
      const selectedYearText = document.getElementById("selected-year");

      // Ay seçenekleri
      const months = [
        { value: "01", text: "Ocak" },
        { value: "02", text: "Şubat" },
        { value: "03", text: "Mart" },
        { value: "04", text: "Nisan" },
        { value: "05", text: "Mayıs" },
        { value: "06", text: "Haziran" },
        { value: "07", text: "Temmuz" },
        { value: "08", text: "Ağustos" },
        { value: "09", text: "Eylül" },
        { value: "10", text: "Ekim" },
        { value: "11", text: "Kasım" },
        { value: "12", text: "Aralık" },
      ];

      // Yıl seçenekleri
      const years = [];
      for (let year = 2023; year <= 2033; year++) {
        years.push({ value: year.toString(), text: year.toString() });
      }

      // Ay dropdown'ına seçenekleri ekleme
      months.forEach((month) => {
        const option = document.createElement("option");
        option.value = month.value;
        option.text = month.text;
        monthDropdown.appendChild(option);
      });

      // Yıl dropdown'ına seçenekleri ekleme
      years.forEach((year) => {
        const option = document.createElement("option");
        option.value = year.value;
        option.text = year.text;
        yearDropdown.appendChild(option);
      });

      // Ay seçildiğinde
      monthDropdown.addEventListener("change", function () {
        const selectedMonth =
          monthDropdown.options[monthDropdown.selectedIndex].text;
        selectedMonthText.textContent = `Seçilen Ay: ${selectedMonth}`;
      });

      // Yıl seçildiğinde
      yearDropdown.addEventListener("change", function () {
        const selectedYear =
          yearDropdown.options[yearDropdown.selectedIndex].text;
        selectedYearText.textContent = `Seçilen Yıl: ${selectedYear}`;
      });

      const installmentOptions = [
        { installment: "Tek Çekim", amount: "76,99 TL" },
        { installment: "2 Taksit", amount: "40,91 TL" },
        { installment: "3 Taksit", amount: "27,81 TL" },
        { installment: "4 Taksit", amount: "21,27 TL" },
        { installment: "6 Taksit", amount: "14,60 TL" },
        { installment: "8 Taksit", amount: "11,49 TL" },
        { installment: "9 Taksit", amount: "10,42 TL" },
      ];

      const tableBody = document.querySelector("#installment-table tbody");

      installmentOptions.forEach((option, index) => {
        const row = document.createElement("tr");

        const installmentCell = document.createElement("td");
        installmentCell.innerHTML = `<div class="flex alignItems-center gap-2"><input type="radio" name="installment" value="${index}"> <span class="font-family-semibold text-sm">${option.installment}</span></div>`;
        row.appendChild(installmentCell);

        const amountCell = document.createElement("td");
        amountCell.classList.add("font-family-regular");
        amountCell.classList.add("text-sm");
        amountCell.textContent = option.amount;
        row.appendChild(amountCell);

        tableBody.appendChild(row);

        // Radio butonuna olay dinleyici ekle
        const radioButton = installmentCell.querySelector(
          "input[type='radio']"
        );

        if (index === 0) {
          // İlk elemanı varsayılan olarak seçili yap
          radioButton.checked = true;
          row.classList.add("shadow-effect")
        }
        radioButton.addEventListener("change", function () {
          // Tüm satırlardan shadow-effect sınıfını kaldır
          const rows = tableBody.querySelectorAll("tr");
          rows.forEach((r) => r.classList.remove("shadow-effect"));

          // Seçili satıra shadow-effect sınıfını ekle
          if (radioButton.checked) {
            row.classList.add("shadow-effect");
          }
        });
      });
    }
  }

  document.getElementById("addressTab").click();
});

document.addEventListener("DOMContentLoaded", function () {
  // Tüm radio butonlarını seç
  const addressRadios = document.querySelectorAll(
    '.address-table input[type="radio"]'
  );

  // Her radio butonuna olay dinleyicisi ekle
  addressRadios.forEach((radio) => {
    radio.addEventListener("change", function () {
      // Seçili radio butonun ait olduğu kartı bul
      const selectedCard =
        this.closest(".address-table").querySelector(".address-card");

      // Tüm radio butonlarını kontrol et
      addressRadios.forEach((radio) => {
        const card = radio
          .closest(".address-table")
          .querySelector(".address-card");

        // Eğer name değerleri aynı değilse sınıfı kaldırma
        if (radio.name === this.name) {
          card.classList.remove("selected");
        }
      });

      // Seçili karta 'selected' sınıfını ekle
      if (selectedCard) {
        selectedCard.classList.add("selected");
      }
    });
  });
});

const provinceOptions = [
  { value: "Lütfen şehir seçiniz", text: "Lütfen şehir seçiniz" },
  { value: "istanbul", text: "İstanbul" },
  { value: "ankara", text: "Ankara" },
  { value: "bursa", text: "Bursa" },
  { value: "kirsehir", text: "Kırşehir" },
  { value: "izmir", text: "İzmir" },
  { value: "malatya", text: "Malatya" },
  { value: "gaziantep", text: "Gaziantep" },
  { value: "tekirdag", text: "Tekirdağ" },
  { value: "agri", text: "Ağrı" },
  { value: "sinop", text: "Sinop" },
  { value: "kars", text: "Kars" },
  { value: "canakkale", text: "Çanakkale" },
  // Daha fazla seçenek ekleyin
];

const districtOptions = {
  istanbul: [
    { value: "besiktas", text: "Beşiktaş" },
    { value: "kadikoy", text: "Kadıköy" },
    // Daha fazla ilçe ekleyin
  ],
  ankara: [
    { value: "cankaya", text: "Çankaya" },
    { value: "kecioren", text: "Keçiören" },
    // Daha fazla ilçe ekleyin
  ],
  // Diğer iller için ilçeler ekleyin
};

const quarterOptions = {
  besiktas: [
    { value: "levent", text: "Levent" },
    { value: "etiler", text: "Etiler" },
    // Daha fazla mahalle ekleyin
  ],
  kadikoy: [
    { value: "moda", text: "Moda" },
    { value: "fenerbahce", text: "Fenerbahçe" },
    // Daha fazla mahalle ekleyin
  ],
  // Diğer ilçeler için mahalleler ekleyin
};

function createOption(option) {
  return `<option class='select-option-text' value="${option.value}">${option.text}</option>`;
}

const provinceDropdownMenu = document.getElementById("dropdown-menu-province");
const districtDropdownMenu = document.getElementById("dropdown-menu-district");
const quarterDropdownMenu = document.getElementById("dropdown-menu-quarter");

const provinceDropdownMenu2 = document.getElementById(
  "dropdown-menu-province-2"
);
const districtDropdownMenu2 = document.getElementById(
  "dropdown-menu-district-2"
);
const quarterDropdownMenu2 = document.getElementById("dropdown-menu-quarter-2");

// İl dropdown'ını doldur
provinceOptions.forEach((option) => {
  provinceDropdownMenu2.innerHTML += createOption(option);
});

// İl seçildiğinde ilgili ilçeleri yükle
provinceDropdownMenu.addEventListener("change", function () {
  const selectedProvince = this.value;

  districtDropdownMenu.innerHTML = '<option value="">İlçe Seçin</option>'; // İlçeleri sıfırla
  quarterDropdownMenu.innerHTML = '<option value="">Mahalle Seçin</option>'; // Mahalleleri sıfırla
  districtDropdownMenu.disabled = true;
  quarterDropdownMenu.disabled = true;

  if (selectedProvince) {
    const districts = districtOptions[selectedProvince] || [];
    districts.forEach((option) => {
      districtDropdownMenu.innerHTML += createOption(option);
    });
    districtDropdownMenu.disabled = false;
  }
});

// İlçe seçildiğinde ilgili mahalleleri yükle
districtDropdownMenu.addEventListener("change", function () {
  const selectedDistrict = this.value;

  quarterDropdownMenu.innerHTML = '<option value="">Mahalle Seçin</option>'; // Mahalleleri sıfırla
  quarterDropdownMenu.disabled = true;

  if (selectedDistrict) {
    const quarters = quarterOptions[selectedDistrict] || [];
    quarters.forEach((option) => {
      quarterDropdownMenu.innerHTML += createOption(option);
    });
    quarterDropdownMenu.disabled = false;
  }
});

// İl dropdown'ını doldur
provinceOptions.forEach((option) => {
  provinceDropdownMenu.innerHTML += createOption(option);
});

// İl seçildiğinde ilgili ilçeleri yükle
provinceDropdownMenu.addEventListener("change", function () {
  const selectedProvince = this.value;

  districtDropdownMenu.innerHTML = '<option value="">İlçe Seçin</option>'; // İlçeleri sıfırla
  quarterDropdownMenu.innerHTML = '<option value="">Mahalle Seçin</option>'; // Mahalleleri sıfırla
  districtDropdownMenu.disabled = true;
  quarterDropdownMenu.disabled = true;

  if (selectedProvince) {
    const districts = districtOptions[selectedProvince] || [];
    districts.forEach((option) => {
      districtDropdownMenu.innerHTML += createOption(option);
    });
    districtDropdownMenu.disabled = false;
  }
});

// İlçe seçildiğinde ilgili mahalleleri yükle
districtDropdownMenu.addEventListener("change", function () {
  const selectedDistrict = this.value;

  quarterDropdownMenu.innerHTML = '<option value="">Mahalle Seçin</option>'; // Mahalleleri sıfırla
  quarterDropdownMenu.disabled = true;

  if (selectedDistrict) {
    const quarters = quarterOptions[selectedDistrict] || [];
    quarters.forEach((option) => {
      quarterDropdownMenu.innerHTML += createOption(option);
    });
    quarterDropdownMenu.disabled = false;
  }
});

// NEW ADDRESS MODAL
var newAddressModal = document.getElementById("newAddressModal");
var newAddressButton = document.getElementById("newAddressButton");
var modal_close_icon = document.getElementsByClassName("modal-close-icon")[0];

// EDİT ADDRES MODAL
var editAddressModal = document.getElementById("editAddressModal");
var editAddressModalClose = document.getElementsByClassName("close")[0];
var btns = document.querySelectorAll(".edit-address-button");

editAddressModalClose.onclick = function () {
  editAddressModal.style.display = "none";
};

btns.forEach(function (btn) {
  btn.onclick = function () {
    editAddressModal.style.display = "block";
  };
});

// DELETE ADDRESS MODAL
var deleteAddressModal = document.getElementById("deleteAddressModal");
var closeIcon = document.getElementsByClassName("close")[1];
var deleteAddressBtns = document.querySelectorAll(".delete-address-button");

// DELETE MODAL HAYIR BUTONU
var deleteAddresModalNoButton = document.getElementById(
  "deleteAddresModalNoButton"
);
window.onclick = function (event) {
  if (event.target == deleteAddressModal) {
    deleteAddressModal.style.display = "none";
  }
  if (event.target == editAddressModal) {
    editAddressModal.style.display = "none";
  }
  if (event.target == newAddressModal) {
    newAddressModal.style.display = "none";
  }
};

// document.addEventListener("DOMContentLoaded", function () {
//   const monthDropdown = document.getElementById("dropdown-menu-credit-month");
//   const yearDropdown = document.getElementById("dropdown-menu-credit-year");
//   const selectedMonthText = document.getElementById("selected-month");
//   const selectedYearText = document.getElementById("selected-year");

//   // Ay seçenekleri
//   const months = [
//     { value: "01", text: "Ocak" },
//     { value: "02", text: "Şubat" },
//     { value: "03", text: "Mart" },
//     { value: "04", text: "Nisan" },
//     { value: "05", text: "Mayıs" },
//     { value: "06", text: "Haziran" },
//     { value: "07", text: "Temmuz" },
//     { value: "08", text: "Ağustos" },
//     { value: "09", text: "Eylül" },
//     { value: "10", text: "Ekim" },
//     { value: "11", text: "Kasım" },
//     { value: "12", text: "Aralık" },
//   ];

//   // Yıl seçenekleri
//   const years = [];
//   for (let year = 2023; year <= 2033; year++) {
//     years.push({ value: year.toString(), text: year.toString() });
//   }

//   // Ay dropdown'ına seçenekleri ekleme
//   months.forEach((month) => {
//     const option = document.createElement("option");
//     option.value = month.value;
//     option.text = month.text;
//     monthDropdown.appendChild(option);
//   });

//   // Yıl dropdown'ına seçenekleri ekleme
//   years.forEach((year) => {
//     const option = document.createElement("option");
//     option.value = year.value;
//     option.text = year.text;
//     yearDropdown.appendChild(option);
//   });

//   // Ay seçildiğinde
//   monthDropdown.addEventListener("change", function () {
//     const selectedMonth =
//       monthDropdown.options[monthDropdown.selectedIndex].text;
//     selectedMonthText.textContent = `Seçilen Ay: ${selectedMonth}`;
//   });

//   // Yıl seçildiğinde
//   yearDropdown.addEventListener("change", function () {
//     const selectedYear = yearDropdown.options[yearDropdown.selectedIndex].text;
//     selectedYearText.textContent = `Seçilen Yıl: ${selectedYear}`;
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const installmentOptions = [
//     { installment: "Tek Çekim", amount: "76,99 TL" },
//     { installment: "2 Taksit", amount: "40,91 TL" },
//     { installment: "3 Taksit", amount: "27,81 TL" },
//     { installment: "4 Taksit", amount: "21,27 TL" },
//     { installment: "6 Taksit", amount: "14,60 TL" },
//     { installment: "8 Taksit", amount: "11,49 TL" },
//     { installment: "9 Taksit", amount: "10,42 TL" },
//   ];

//   const tableBody = document.querySelector("#installment-table tbody");

//   installmentOptions.forEach((option, index) => {
//     const row = document.createElement("tr");

//     const installmentCell = document.createElement("td");
//     // installmentCell.classList.add("flex")
//     // installmentCell.classList.add("gap-2")
//     // installmentCell.classList.add("p-2")
//     // installmentCell.classList.add("alignItems-center")
//     installmentCell.innerHTML = `<div class="flex alignItems-center gap-2"><input type="radio" name="installment" value="${index}"> <span class="font-family-semibold text-sm">${option.installment}</span></div>`;
//     row.appendChild(installmentCell);

//     const amountCell = document.createElement("td");
//     amountCell.classList.add("font-family-regular");
//     amountCell.classList.add("text-sm");
//     amountCell.textContent = option.amount;
//     row.appendChild(amountCell);

//     tableBody.appendChild(row);
//   });
// });

// const phoneRegex =
//   /([(]?)([5])([0-9]{2})([)]?)([\s]?)([0-9]{3})([\s]?)([0-9]{2})([\s]?)([0-9]{2})$/g;

// document.getElementById("phone").addEventListener("input", function () {
//   const phoneNumber = this.value;
//   const cleanedPhoneNumber = phoneNumber.replace(/\s+/g, ""); // Boşlukları kaldır

//   const phoneInput = document.getElementById("phone");

//   const letterRegex = /[a-zA-Z]/;
//   const containsLetter = letterRegex.test(cleanedPhoneNumber);
//   // const aa = phoneRegex.test(cleanedPhoneNumber);
//   // console.log(aa)
//   if (containsLetter) {
//     phoneInput.style.border = "1px solid red";
//   } else if (cleanedPhoneNumber.length > 10) {
//     phoneInput.style.border = "1px solid red";
//   } else {
//     phoneInput.style.border = "1px solid #e6e6e6";
//   }
// });

// document.getElementById("phone2").addEventListener("input", function () {
//   const phoneNumber = this.value;
//   const cleanedPhoneNumber = phoneNumber.replace(/\s+/g, ""); // Boşlukları kaldır

//   const phoneInput = document.getElementById("phone2");

//   const letterRegex = /[a-zA-Z]/;
//   const containsLetter = letterRegex.test(cleanedPhoneNumber);
//   // const aa = phoneRegex.test(cleanedPhoneNumber);
//   // console.log(aa)
//   if (containsLetter) {
//     phoneInput.style.border = "1px solid red";
//   } else if (cleanedPhoneNumber.length > 10) {
//     phoneInput.style.border = "1px solid red";
//   } else {
//     phoneInput.style.border = "1px solid #e6e6e6";
//   }
// });

document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phone");

  phoneInput.addEventListener("input", function () {
    let value = phoneInput.value.replace(/\D/g, ""); // Sadece rakamları al

    // Başlangıçta 0 ekleyip değerleri formatla
    let formattedValue = "";
    if (value.length > 0) {
      formattedValue += "0";
    }
    if (value.length > 1) {
      formattedValue += " (" + value.slice(1, 4);
    }
    if (value.length > 4) {
      formattedValue += ") " + value.slice(4, 7);
    }
    if (value.length > 7) {
      formattedValue += " " + value.slice(7, 9);
    }
    if (value.length > 9) {
      formattedValue += " " + value.slice(9, 11);
    }

    phoneInput.value = formattedValue;
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phone2");

  phoneInput.addEventListener("input", function () {
    let value = phoneInput.value.replace(/\D/g, ""); // Sadece rakamları al

    // Başlangıçta 0 ekleyip değerleri formatla
    let formattedValue = "";
    if (value.length > 0) {
      formattedValue += "0";
    }
    if (value.length > 1) {
      formattedValue += " (" + value.slice(1, 4);
    }
    if (value.length > 4) {
      formattedValue += ") " + value.slice(4, 7);
    }
    if (value.length > 7) {
      formattedValue += " " + value.slice(7, 9);
    }
    if (value.length > 9) {
      formattedValue += " " + value.slice(9, 11);
    }

    phoneInput.value = formattedValue;
  });
});
