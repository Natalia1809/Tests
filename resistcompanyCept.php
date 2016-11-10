<?php 
$I = new AcceptanceTester($scenario);
$I->amOnUrl('http://test.lama.by.dev.lovata.com/');
$I->click('.header-sign__auth._action');
$I->fillField('#user-name', 'Mike');
$I->fillField('#user-email', 'mm@m.co');
$I->fillField('#user-pass', '1111');
$I->fillField('#user-pass-repeat', '1111');
$I->fillField('#user-site', 'www.mm.com');
$I->fillField('#user-city', 'Minsk');
$I->fillField('#user-zipadr', 'Post str, 10');
$I->fillField('#user-zipcode', '220000');
$I->fillField('#user-tel', '5555555');
$I->fillField('#user-lname', 'M&M Co');
$I->fillField('#user-ladr', 'Post str, 10');
$I->fillField('#user-unn', '220220220');
$I->fillField('#user-account', '3100000000001');
$I->fillField('#user-bank', 'PriorBank');
$I->fillField('#user-bankcode', '749');
$I->click('.register_button.js-submitBtn');
$I->waitForElement('.header-sign__login', 10);
$I->dontSee('.header-sign__reg._action');
$I->dontSee('.header-sign__auth._action');
$I->click('.header-sign__login');
$I->seeElement('.header-login__addjob-btn._action');
$I->seeElement('.header-login__accreditation-btn._action');
?>