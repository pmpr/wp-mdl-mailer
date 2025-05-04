<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6817590334398             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Setting\Setting; use Pmpr\Module\Mailer\Gmail\Setting as GmailSetting; class Mailer extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Mailer', PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pre_wp_mail', [$this, 'ecskkskqiiqcoeii']); } public function mameiwsayuyquoeq() { GmailSetting::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (Setting::kcommsmecygyoscc === $goqqimcssiyagkwy) { Generic::symcgieuakksimmu(); } if (Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy) { Gmail::symcgieuakksimmu()->yaosckuqsmaeqgka(); } } }
