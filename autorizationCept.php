<?php 
$I = new AcceptanceTester($scenario);
$I->amOnUrl('http://test.lama.by.dev.lovata.com/');
$I->click('.header-sign__reg._action');
$I->fillField('#email', '123@fg.vy');
$I->fillField('#pass', '1234');
$I->click('.auth_button.js-submitBtn');
$I->waitForElement('.header-sign__login', 10);
$I->dontSee('.header-sign__reg._action');
$I->dontSee('.header-sign__auth._action');
$I->click('.header-sign__login');
$I->seeElement('.header-login__addjob-btn._action');
$I->seeElement('.header-login__accreditation-btn._action');
?>
