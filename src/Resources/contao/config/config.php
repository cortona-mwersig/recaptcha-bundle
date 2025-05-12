<?php

use DieSchittigs\RecaptchaBundle\Form\FormRecaptcha;

$GLOBALS['TL_FFL']['captcha'] = FormRecaptcha::class;
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = [Contao\RecaptchaHooks::class, 'addRecaptchaActionRegexp'];

$GLOBALS['TL_CTE']['miscellaneous'][]= [
    'backgroundrecaptcha' => Contao\ContentBackgroundRecaptcha::class,
];
