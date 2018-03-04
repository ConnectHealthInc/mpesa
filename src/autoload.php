<?php

// Generated by './vendor/bin/php-generate-autoload' 'src/autoload.php'

\spl_autoload_register(function ($class) {
  static $map = array (
  'Kabangi\\Mpesa\\AccountBalance\\Balance' => 'Mpesa/AccountBalance/Balance.php',
  'Kabangi\\Mpesa\\Auth\\Authenticator' => 'Mpesa/Auth/Authenticator.php',
  'Kabangi\\Mpesa\\B2B\\Pay' => 'Mpesa/B2B/Pay.php',
  'Kabangi\\Mpesa\\B2C\\Pay' => 'Mpesa/B2C/Pay.php',
  'Kabangi\\Mpesa\\C2B\\Register' => 'Mpesa/C2B/Register.php',
  'Kabangi\\Mpesa\\C2B\\Simulate' => 'Mpesa/C2B/Simulate.php',
  'Kabangi\\Mpesa\\Contracts\\CacheStore' => 'Mpesa/Contracts/CacheStore.php',
  'Kabangi\\Mpesa\\Contracts\\ConfigurationStore' => 'Mpesa/Contracts/ConfigurationStore.php',
  'Kabangi\\Mpesa\\Contracts\\HttpRequest' => 'Mpesa/Contracts/HttpRequest.php',
  'Kabangi\\Mpesa\\Contracts\\Transactable' => 'Mpesa/Contracts/Transactable.php',
  'Kabangi\\Mpesa\\Engine\\Cache' => 'Mpesa/Engine/Cache.php',
  'Kabangi\\Mpesa\\Engine\\Config' => 'Mpesa/Engine/Config.php',
  'Kabangi\\Mpesa\\Engine\\Core' => 'Mpesa/Engine/Core.php',
  'Kabangi\\Mpesa\\Engine\\CurlRequest' => 'Mpesa/Engine/CurlRequest.php',
  'Kabangi\\Mpesa\\Engine\\MpesaTrait' => 'Mpesa/Engine/MpesaTrait.php',
  'Kabangi\\Mpesa\\Exceptions\\ConfigurationException' => 'Mpesa/Exceptions/ConfigurationException.php',
  'Kabangi\\Mpesa\\Exceptions\\ErrorException' => 'Mpesa/Exceptions/ErrorException.php',
  'Kabangi\\Mpesa\\Exceptions\\MpesaException' => 'Mpesa/Exceptions/MpesaException.php',
  'Kabangi\\Mpesa\\LipaNaMpesaOnline\\STKPush' => 'Mpesa/LipaNaMpesaOnline/STKPush.php',
  'Kabangi\\Mpesa\\LipaNaMpesaOnline\\STKStatusQuery' => 'Mpesa/LipaNaMpesaOnline/STKStatusQuery.php',
  'Kabangi\\Mpesa\\Mpesa' => 'Mpesa/Init.php',
  'Kabangi\\Mpesa\\Reversal\\Reversal' => 'Mpesa/Reversal/Reversal.php',
  'Kabangi\\Mpesa\\Support\\Installer' => 'Mpesa/Packagist/Installer.php',
  'Kabangi\\Mpesa\\TransactionStatus\\TransactionStatus' => 'Mpesa/TransactionStatus/TransactionStatus.php',
  'Kabangi\\Mpesa\\Validation\\DataWrapper\\ArrayWrapper' => 'Mpesa/Validation/DataWrapper/ArrayWrapper.php',
  'Kabangi\\Mpesa\\Validation\\DataWrapper\\WrapperInterface' => 'Mpesa/Validation/DataWrapper/WrapperInterface.php',
  'Kabangi\\Mpesa\\Validation\\ErrorMessage' => 'Mpesa/Validation/ErrorMessage.php',
  'Kabangi\\Mpesa\\Validation\\Helper' => 'Mpesa/Validation/Helper.php',
  'Kabangi\\Mpesa\\Validation\\RuleCollection' => 'Mpesa/Validation/RuleCollection.php',
  'Kabangi\\Mpesa\\Validation\\RuleFactory' => 'Mpesa/Validation/RuleFactory.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\AbstractRule' => 'Mpesa/Validation/Rule/AbstractRule.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\AbstractStringRule' => 'Mpesa/Validation/Rule/AbstractStringRule.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Alpha' => 'Mpesa/Validation/Rule/Alpha.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\AlphaNumHyphen' => 'Mpesa/Validation/Rule/AlphaNumHyphen.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\AlphaNumeric' => 'Mpesa/Validation/Rule/AlphaNumeric.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\ArrayLength' => 'Mpesa/Validation/Rule/ArrayLength.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\ArrayMaxLength' => 'Mpesa/Validation/Rule/ArrayMaxLength.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\ArrayMinLength' => 'Mpesa/Validation/Rule/ArrayMinLength.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Between' => 'Mpesa/Validation/Rule/Between.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Callback' => 'Mpesa/Validation/Rule/Callback.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Date' => 'Mpesa/Validation/Rule/Date.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\DateTime' => 'Mpesa/Validation/Rule/DateTime.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Email' => 'Mpesa/Validation/Rule/Email.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\EmailDomain' => 'Mpesa/Validation/Rule/EmailDomain.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Equal' => 'Mpesa/Validation/Rule/Equal.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\File\\Extension' => 'Mpesa/Validation/Rule/File/Extension.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\File\\Image' => 'Mpesa/Validation/Rule/File/Image.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\File\\ImageHeight' => 'Mpesa/Validation/Rule/File/ImageHeight.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\File\\ImageRatio' => 'Mpesa/Validation/Rule/File/ImageRatio.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\File\\ImageWidth' => 'Mpesa/Validation/Rule/File/ImageWidth.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\File\\Size' => 'Mpesa/Validation/Rule/File/Size.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\FullName' => 'Mpesa/Validation/Rule/FullName.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\GreaterThan' => 'Mpesa/Validation/Rule/GreaterThan.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\InList' => 'Mpesa/Validation/Rule/InList.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Integer' => 'Mpesa/Validation/Rule/Integer.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\IpAddress' => 'Mpesa/Validation/Rule/IpAddress.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Length' => 'Mpesa/Validation/Rule/Length.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\LessThan' => 'Mpesa/Validation/Rule/LessThan.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Match' => 'Mpesa/Validation/Rule/Match.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\MaxLength' => 'Mpesa/Validation/Rule/MaxLength.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\MinLength' => 'Mpesa/Validation/Rule/MinLength.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\NotInList' => 'Mpesa/Validation/Rule/NotInList.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\NotRegex' => 'Mpesa/Validation/Rule/NotRegex.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Number' => 'Mpesa/Validation/Rule/Number.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Regex' => 'Mpesa/Validation/Rule/Regex.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Required' => 'Mpesa/Validation/Rule/Required.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\RequiredWhen' => 'Mpesa/Validation/Rule/RequiredWhen.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\RequiredWith' => 'Mpesa/Validation/Rule/RequiredWith.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\RequiredWithout' => 'Mpesa/Validation/Rule/RequiredWithout.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Time' => 'Mpesa/Validation/Rule/Time.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\Extension' => 'Mpesa/Validation/Rule/Upload/Extension.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\Image' => 'Mpesa/Validation/Rule/Upload/Image.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\ImageHeight' => 'Mpesa/Validation/Rule/Upload/ImageHeight.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\ImageRatio' => 'Mpesa/Validation/Rule/Upload/ImageRatio.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\ImageWidth' => 'Mpesa/Validation/Rule/Upload/ImageWidth.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\Required' => 'Mpesa/Validation/Rule/Upload/Required.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Upload\\Size' => 'Mpesa/Validation/Rule/Upload/Size.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Url' => 'Mpesa/Validation/Rule/Url.php',
  'Kabangi\\Mpesa\\Validation\\Rule\\Website' => 'Mpesa/Validation/Rule/Website.php',
  'Kabangi\\Mpesa\\Validation\\Util\\Arr' => 'Mpesa/Validation/Util/Arr.php',
  'Kabangi\\Mpesa\\Validation\\Validator' => 'Mpesa/Validation/Validator.php',
  'Kabangi\\Mpesa\\Validation\\ValidatorInterface' => 'Mpesa/Validation/ValidatorInterface.php',
  'Kabangi\\Mpesa\\Validation\\ValueValidator' => 'Mpesa/Validation/ValueValidator.php',
);

  if (isset($map[$class])) {
    require_once __DIR__ . '/' . $map[$class];
  }
}, true, false);


