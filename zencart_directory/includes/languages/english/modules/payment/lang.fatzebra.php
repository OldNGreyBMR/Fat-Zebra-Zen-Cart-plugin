<?php
// Converted BMH 2026-01-01
  // Admin Configuration Items
$define = [
    'MODULE_PAYMENT_FATZEBRA_TEXT_ADMIN_TITLE' => 'Fat Zebra', 
    //'MODULE_PAYMENT_FATZEBRA_TEXT_DESCRIPTION' => '<a target="_blank" href="https://www.fatzebra.com.au/support/testing">Testing Details</a>', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_DESCRIPTION' => '<b>FatZebra API (AU)</b><br>Receive credit-card payments via the FatZebra Gateway<br>Configuration Instructions<br>1. Click "Edit"<br>2. Enter your FatZebra merchant id and password (obtained from FatZebra support)<br><br><b>Requirements:</b><br>PHP cURL<br>A <a href="http://fatzebra.com.au">FatZebra</a> merchant account.',

  // Catalog Items
    'MODULE_PAYMENT_FATZEBRA_TEXT_CATALOG_TITLE' => 'Credit Card',   // Payment option title as displayed to the customer
    'MODULE_PAYMENT_FATZEBRA_TEXT_CREDIT_CARD_TYPE' => 'Credit Card Type:', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_CREDIT_CARD_TYPE_AUTO' => '(Detected automatically from the card number)', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_CREDIT_CARD_OWNER' => 'Name on Credit Card:', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_CREDIT_CARD_NUMBER' => 'Credit Card Number:', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_CREDIT_CARD_EXPIRES' => 'Credit Card Expiry Date:', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_CVV' => 'CVV Number (<a target="_blank" href="'.zen_href_link(FILENAME_POPUP_CVV_HELP).'" onclick="popupWindow(\''.str_replace('/','\/', zen_href_link(FILENAME_POPUP_CVV_HELP)) . '\',  return false;">' . 'More Info' . '</a>):', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_CVV_OMITTED' => 'No CVV code was entered. Omitting it when your Card has one causes the transaction to fail.', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_JS_CC_OWNER' => '* The owner\'s name of the credit card must be at least ' . CC_OWNER_MIN_LENGTH . ' characters.\n', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_JS_CC_NUMBER' => '* The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_JS_CC_CVV' => '* The 3 or 4 digit CVV number must be entered.\n', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_DECLINED_MESSAGE' => 'Payment was declined for the following reason:', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_DECLINED_MESSAGE_TRY_AGAIN' => 'Please correct your Card information and try again, alternatively contact us or your Card provider if you need assistance.', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_ERROR' => 'Credit Card Error!', 
    'MODULE_PAYMENT_FATZEBRA_TEXT_ERROR_CURL_NOT_FOUND' => 'CURL functions not found - required for FatZebra payment module',
];
return $define;
