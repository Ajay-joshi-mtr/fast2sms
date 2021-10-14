php artisan vendor:publish --provider="Ajayjoshi\Fast2sms\Fast2SmsServiceProvider"
 'Fast2Sms'=> Ajayjoshi\Fast2sms\Fast2SmsApiFacade::class, /// add in alias 
  Ajayjoshi\Fast2sms\Fast2SmsServiceProvider::class, //add in service provider

  added auto discovery of providers and facedes