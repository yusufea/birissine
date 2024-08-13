<?php require_once('header.php') ?>
<link rel="stylesheet" href="assets/css/allOrders.css">
<div class="container my-4" style="min-height: 100vh;">
    <div class="row gap-7">
        <div class="col-2">
            <?php require_once('settingsTabs.php') ?>
        </div>
        <div class="col-10">
            <div class="flex-column gap-6">
                <div class="page-header-tag p-3 card-border">
                    <h3 class="font-family-semibold text-base">
                        Siparişlerim
                    </h3>
                </div>
                <div class="flex gap-2 tabs">
                    <div class="card-border p-2 order-tab" id="tabAll">
                        <h6 class="font-family-semibold text-sm">Tümü</h6>
                    </div>
                    <div class="card-border p-2 order-tab" id="tabOngoing">
                        <h6 class="font-family-semibold text-sm">Devam Eden Siparişler</h6>
                    </div>
                    <div class="card-border p-2 order-tab" id="tabReturns">
                        <h6 class="font-family-semibold text-sm">İadeler</h6>
                    </div>
                    <div class="card-border p-2 order-tab" id="tabCancellations">
                        <h6 class="font-family-semibold text-sm">İptaller</h6>
                    </div>
                </div>
                <div id="orderContent" class="flex-column gap-2 card-border rounded-md">
                    <!-- Sipariş detayları burada olacak -->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/allOrder.js"></script>
<?php
require_once("footer.php");
?>