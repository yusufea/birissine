<?php require_once('header.php') ?>
<link rel="stylesheet" href="assets/css/userInfo.css">
<div class="container my-4" style="min-height: 100vh;">
    <div class="row gap-7">
        <div class="col-2">
            <?php require_once('settingsTabs.php') ?>
        </div>
        <div class="col-10">
            <div class="flex-column gap-6">
                <div class="page-header-tag p-3 card-border">
                    <h3 class="font-family-semibold text-base">
                        Kullanıcı Bilgilerim
                    </h3>
                </div>
                <div class="email-verification-attention p-3 flex justify-between alignItems-center">
                    <div class="flex gap-4 alignItems-center">
                        <span class="material-symbols-outlined" style="color: #16BE48;">
                            check
                        </span>
                        <h6 class=" text-base font-family-semibold">
                            E-Posta Adresinizi Doğrulamanız Gerekmektedir
                        </h6>
                    </div>
                    <button class="email-verification-button font-family-semibold text-sm px-4">Doğrula</button>
                </div>
                <div class="row gap-4">
                    <div class="col-6">
                        <form class="flex-column gap-6 card-border p-4 rounded-md">
                            <h5 class="font-family-semibold text-black-t text-md">
                                Üyelik Bilgilerim
                            </h5>
                            <div class="flex gap-6">
                                <div class="flex-column gap-2">
                                    <label class=" text-sm font-family-semibold">
                                        Ad*
                                    </label>
                                    <input class="input" type="text" placeholder="">
                                </div>
                                <div class="flex-column gap-2">
                                    <label class=" text-sm font-family-semibold">
                                        Soyad*
                                    </label>
                                    <input class="input" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="flex-column gap-1">
                                <label class=" text-sm font-family-semibold">
                                    E-Mail*
                                </label>
                                <input class="input" type="text" placeholder="">
                            </div>
                            <div class="flex-column gap-1">
                                <label class=" text-sm font-family-semibold">
                                    Cep Telefonu*
                                </label>
                                <div class="flex gap-2">
                                    <select id="dropdown-menu-phone-code">
                                        <option class='select-option-text' value="${option.value}">+90</option>
                                        <option class='select-option-text' value="${option.value}">+522</option>
                                    </select>
                                    <input type="tel" id="phone" name="phone" placeholder="0 (___) ___ __ __" style="height: 23px;" class="input" required>
                                    <button type="submit" class="update-button  font-family-semibold text-xs" role="button" style="width: 50%;">
                                        Güncelle
                                    </button>
                                </div>
                            </div>
                            <div class="flex-column gap-1">
                                <label class=" text-sm font-family-semibold">
                                    Doğum Tarihiniz*
                                </label>
                                <div class="flex gap-2 w-full">
                                    <select class="w-full dropdown-menu-date " id="dropdown-menu-day">
                                        <option class='select-option-text' value="${option.value}">1</option>
                                    </select>
                                    <select class="w-full dropdown-menu-date " id="dropdown-menu-month">
                                        <option class='select-option-text' value="${option.value}">1</option>
                                    </select>
                                    <select class="w-full dropdown-menu-date " id="dropdown-menu-year">
                                        <option class='select-option-text' value="${option.value}">1999</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="update-button  font-family-semibold text-md w-full" role="button" style="height: 45px;background-color:#ddd">
                                Güncelle
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form class="flex-column gap-4 card-border p-4 rounded-md">
                            <h5 class=" font-family-semibold text-black-t text-md">
                                Şifre Güncelleme
                            </h5>
                            <div class="flex-column gap-2">
                                <label class="text-sm font-family-semibold" required>
                                    Şu Anki Şifre*
                                </label>
                                <div class="password-container">
                                    <input id="nowPassword" class="input password-input password" type="password" placeholder="Şifre" required>
                                    <span class="material-symbols-outlined toggle-password" id="togglePassword">visibility</span>
                                </div>
                            </div>
                            <div class="flex-column gap-2">
                                <label class="text-sm font-family-semibold">
                                    Yeni Şifre*
                                </label>
                                <div class="password-container">
                                    <input id="newPassword" class="input password-input password" type="password" placeholder="Şifre" required>
                                    <span class="material-symbols-outlined toggle-password" id="togglePassword">visibility</span>
                                </div>
                                <label class="font-family-regular text-xxs">
                                    Şifreniz <span class="font-family-semibold">
                                        en az 10 karakter
                                    </span> olmalı. <span class="font-family-semibold">1 büyük harf, 1 küçük harf</span> ve <span class="font-family-semibold">rakam</span> içermelidir.
                                </label>
                            </div>
                            <div class="flex-column gap-2">
                                <label class=" text-sm font-family-semibold">
                                    Yeni Şifre (Tekrar)*
                                </label>
                                <div class="password-container">
                                    <input id="newPassword" class="input password-input password" type="password" placeholder="Şifre">
                                    <span class="material-symbols-outlined toggle-password" id="togglePassword">visibility</span>
                                </div>
                            </div>
                            <button type="submit" class="update-button  font-family-semibold text-md w-full" role="button" style="height: 45px;background-color:#ddd">
                                Güncelle
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/userInfo.js"></script>
<?php
require_once("footer.php");
?>