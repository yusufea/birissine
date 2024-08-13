<div class="sticky-summary-side">
    <?php if ($page == 'check'): ?>
        <div class="card-border mb-2 flex gap-2 alignItems-center p-2 py-3">
            <input type="checkbox" style="width: 30px; height: 30px;">
            <p class="font-family-regular text-xs">
                <span class="underline font-family-semibold">Ön Bilgilendirme Koşulları</span>'nı ve <span class="underline font-family-semibold">Mesafeli Satış Sözleşmesi</span>'ni okudum, onaylıyorum.
            </p>
        </div>
    <?php endif; ?>
    <div id="product-summary" class="card-border py-2">
        <h3 class="font-family-regular text-lg pb-1">Sipariş Özeti</h3>
        <div class="flex-column gap-1 mt-1_5">
            <div class="flex justify-between">
                <p class="text-sm font-family-regular">Ürünler</p>
                <p class="text-sm font-family-regular">602 TL</p>
            </div>
            <div class="flex justify-between">
                <p class="text-sm font-family-regular">Kargo</p>
                <p class="text-sm font-family-regular">47 TL</p>
            </div>
            <div class="flex justify-between">
                <p class="text-sm font-family-regular">İndirimler</p>
                <p class="text-sm font-family-regular">0 TL</p>
            </div>
            <hr class="my-2" style="background-color: #e6e6e6;opacity:0.5">
            <div class="flex justify-between">
                <p class="text-base font-family-regular">Toplam</p>
                <h2 class="font-family-semibold text-lg">649 TL</h2>
            </div>
        </div>
    </div>
    <a href="check.php">
        <button class="button button-black block w-100 mx-auto mt-3 font-family-semibold text-md">Devam Et</button>
    </a>
</div>