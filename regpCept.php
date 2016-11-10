<?php 
$I = new AcceptanceTester($scenario);
$I->amOnUrl('http://test.lama.by.dev.lovata.com/');
$I->click('.header-sign__auth._action');
$I->waitForElement('.b-modal__window', 10);
$I->click('.b-popup-register__type-private');
$I->wait(5);
$I->fillField('.b-popup-register__type-private.b-popup-register__type-private-active > .user-info__field-name.js-lettersOnly.js-validRequired', 'Andrew');
$I->fillField('.b-popup-register__type-private.b-popup-register__type-private-active > .user-info__field-pass.js-validRequired', '1234');
$I->fillField('.b-popup-register__type-private.b-popup-register__type-private-active > .user-info__field-email.js-validEmail.js-validRequired', 'conf@df.by');
$I->fillField('.b-popup-register__type-private.b-popup-register__type-private-active > .user-info__field-pass.js-validRequired.js-validPsw', '1111');
$I->fillField('.b-popup-register__type-private.b-popup-register__type-private-active > .user-info__field-pass.js-validRequired.js-validPswRepeat', '1111');
$I->fillField('.b-popup-register__type-private.b-popup-register__type-private-active > .user-info__field-tel.js-numOnly.js-validRequired', '3333333');
$I->click('.register_button.js-submitBtn');
$I->waitForElement('.header-sign__login', 10);
$I->dontSee('.header-sign__reg._action');
$I->dontSee('.header-sign__auth._action');
$I->click('.header-sign__login');
$I->seeElement('.header-login__addjob-btn._action');
$I->seeElement('.header-login__accreditation-btn._action');
?>