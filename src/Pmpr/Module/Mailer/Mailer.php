<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc54cdd6e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Mailer\Gmail\Gmail; use Pmpr\Module\Mailer\Generic\Generic; use Pmpr\Module\Mailer\Gmail\OAuth; use Pmpr\Module\Mailer\Setting\Setting; use Pmpr\Module\Mailer\Gmail\Setting as GmailSetting; class Mailer extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\115\x61\151\154\x65\162", PR__MDL__MAILER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\x6e\x69\164", [$this, "\171\x65\x79\151\147\165\171\x65\147\155\155\x79\165\x73\x65\141"])->qcsmikeggeemccuu("\160\x72\x65\137\167\160\137\x6d\x61\x69\x6c", [$this, "\x65\143\163\x6b\153\x73\153\161\151\151\161\143\157\x65\151\151"]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } } public function init() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::uqgcmmosieyimiku); if (in_array($aiamqeawckcsuaou, [GmailSetting::yckkaiueuoiicisc, GmailSetting::oiugqmossekuqeia], true) && GmailSetting::symcgieuakksimmu()->euuuueemkqgqkqae()) { switch ($aiamqeawckcsuaou) { case GmailSetting::yckkaiueuoiicisc: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); if ($ymacoouqwcqwwagu = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::vswoiouoaykswgym, '', true)) { $eeaukqkuswaqwayu = $aswseewakkcwywqa->ceeskwyicggwsows($ymacoouqwcqwwagu); if (!empty($eeaukqkuswaqwayu)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\101\143\143\x65\163\163\x20\147\x72\141\x6e\x74\145\x64\40\x73\x75\143\143\145\x73\x73\146\x75\x6c\x6c\171\41", PR__MDL__MAILER), "\155\x61\x69\x6c\145\162\137\147\x72\x61\x6e\164", Constants::ckcawaoawwioqecq); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, __("\101\143\x63\145\163\163\40\143\157\165\154\x64\x20\x6e\157\x74\40\142\145\40\x67\x72\141\x6e\164\x65\x64\41", PR__MDL__MAILER), "\155\x61\151\x6c\x65\162\x5f\147\162\x61\156\164"); } } break; default: case GmailSetting::oiugqmossekuqeia: $aswseewakkcwywqa = OAuth::symcgieuakksimmu(); $sogksuscggsicmac = $aswseewakkcwywqa->usmqosmqgoscmckk(); if (isset($sogksuscggsicmac[GmailSetting::ewmyoqeiikakqqmk])) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom(esc_url_raw($sogksuscggsicmac[GmailSetting::ewmyoqeiikakqqmk])); } break; } } } public function yeyiguyegmmyusea() { if (0) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\123\145\x74\164\151\156\147", PR__MDL__MAILER), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__("\x53\x4d\x54\x50\x20\115\141\151\x6c\145\162\40\143\141\156\x6e\157\x74\x20\x73\x65\156\144\x20\x65\x6d\x61\x69\x6c\x20\165\156\164\x69\x6c\40\x79\157\165\40\x65\x6e\164\145\x72\x20\x79\157\x75\x72\40\143\162\145\x64\x65\x6e\164\151\x61\x6c\x73\x20\x69\x6e\x20\x74\150\145\x20\45\x73\56", PR__MDL__MAILER), $iwywmkygwewiamwm), "\146\x69\154\x6c\x2d\155\x61\151\x6c\x65\x72\x2d\x63\x72\x65\144\145\156\164\151\141\x6c\163", Constants::imkacwmiuiykyuim); } } public function ecskkskqiiqcoeii() { $goqqimcssiyagkwy = $this->kmuweyayaqoeqiyw()->guseqygmqcgeyigi(); if (Setting::kcommsmecygyoscc === $goqqimcssiyagkwy) { Generic::symcgieuakksimmu(); } if (Setting::ecsmsisgwqsayeqs === $goqqimcssiyagkwy) { Gmail::symcgieuakksimmu()->yaosckuqsmaeqgka(); } } }
