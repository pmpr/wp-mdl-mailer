<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630a1fca5cad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Google\Client; use Google\Service\Gmail; use WP_Error; class OAuth extends Common { protected ?Client $client = null; protected ?string $oauthUserEmail = ''; protected ?string $oauthClientSecret = ''; protected ?string $oauthClientId = ''; protected ?string $oauthRefreshToken = ''; public function __construct($csywmcysoeokssww = '') { parent::__construct(); $this->oauthClientId = $this->weysguygiseoukqw(Setting::askekoeogouwkgwe); $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->oauthClientSecret = $this->weysguygiseoukqw(Setting::ycuosiyegyweyggm); $this->oauthRefreshToken = $csywmcysoeokssww; } public function wmciwsucuuyumkes() : Client { if (!empty($this->client)) { goto meawswgwagoqgkye; } $qcakkkwickkwyuck = new Client(); $this->client = $qcakkkwickkwyuck; $qcakkkwickkwyuck->setScopes("\x68\x74\x74\x70\163\72\57\57\155\x61\151\x6c\x2e\147\x6f\157\147\x6c\x65\56\x63\157\155\x2f"); $qcakkkwickkwyuck->setClientId($this->oauthClientId); $qcakkkwickkwyuck->setClientSecret($this->oauthClientSecret); $iewmcsieaqyamggu = Setting::symcgieuakksimmu()->simgasqekwkcogwk(); $qcakkkwickkwyuck->setRedirectUri($iewmcsieaqyamggu); $qcakkkwickkwyuck->setAccessType("\157\x66\x66\x6c\151\x6e\x65"); meawswgwagoqgkye: return $this->client; } public function usmqosmqgoscmckk() { $eeaukqkuswaqwayu = $this->icyskgykkigmcuec(); if (!is_wp_error($eeaukqkuswaqwayu)) { goto wcesymwqykqoyuqk; } $coewqcmgkkmawigm = $this->wmciwsucuuyumkes()->createAuthUrl(); $this->oaumimwssciwumys("\x4d\x61\x69\x6c\x65\162\x3a\x20\x43\x61\156\x20\x6e\157\164\x20\x61\165\x74\150\x65\156\164\x69\x63\141\164\145\54\x20\x6c\x65\x74\163\x20\x67\x6f\x20\164\x6f\40\x61\x75\x74\x68\157\x72\151\172\145", [$coewqcmgkkmawigm]); return [self::ewmyoqeiikakqqmk => $coewqcmgkkmawigm]; wcesymwqykqoyuqk: return $eeaukqkuswaqwayu; } public function ceeskwyicggwsows($iwiqmygaeowkcuck) { $eeaukqkuswaqwayu = $this->wmciwsucuuyumkes()->fetchAccessTokenWithAuthCode($iwiqmygaeowkcuck); if (!(!empty($eeaukqkuswaqwayu) && is_array($eeaukqkuswaqwayu))) { goto mswsoaimesegiiic; } if (!(isset($eeaukqkuswaqwayu["\x65\162\x72\157\x72"]) || isset($eeaukqkuswaqwayu["\145\162\x72\x6f\162\137\144\x65\163\x63\x72\x69\160\164\x69\x6f\x6e"]))) { goto usqgaogkqgemuima; } $this->oaumimwssciwumys("\115\141\x69\154\145\x72\x3a\40\105\x72\162\157\x72\x20\x6f\x6e\40\x66\145\x74\x63\x68\40\141\143\x63\x65\x73\x73\x20\x74\157\x6b\145\156", $eeaukqkuswaqwayu); echo "\x3c\x64\x69\166\x20\x69\x64\75\42\x6d\145\x73\x73\x61\147\x65\42\x20\x63\154\141\163\x73\x3d\42\x65\x72\x72\157\x72\42\76\x3c\160\76\74\163\x74\x72\157\156\x67\x3e"; esc_html_e("\x45\x72\162\157\x72\72\x20" . $eeaukqkuswaqwayu["\x65\162\162\157\x72"] . "\x2c\x20\x45\162\162\x6f\162\40\x44\145\x73\143\x72\x69\x70\x74\151\157\156\x3a\x20" . $eeaukqkuswaqwayu["\x65\162\x72\157\x72\137\144\145\163\143\162\151\160\164\x69\x6f\x6e"], PR__MDL__MAILER); echo "\74\x2f\x73\164\x72\x6f\156\x67\76\x3c\x2f\x70\76\74\x2f\144\151\x76\76"; return false; usqgaogkqgemuima: $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); return $eeaukqkuswaqwayu; mswsoaimesegiiic: return false; } public function wiqyioosoqcqwuwi() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (!is_wp_error($sogksuscggsicmac)) { goto egasokooagakisiy; } return false; egasokooagakisiy: if (!($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu())) { goto kecwuwwcwokuksyq; } $this->oaumimwssciwumys("\x4d\x61\x69\x6c\x65\x72\x3a\x20\117\x66\146\x6c\151\156\145\40\164\157\x6b\x65\x6e\40\x67\145\156\x65\x72\x61\x74\x65\144\56", $sswycsgkqaiomeem); return base64_encode("\x75\163\145\162\x3d{$this->oauthUserEmail}\x1\x61\165\164\150\75\102\145\x61\162\x65\162\40{$sswycsgkqaiomeem}\1\x1"); kecwuwwcwokuksyq: return false; } private function cmiamcgoqceqyimu() { $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $keccaugmemegoimu = $gqusacuooiagkuom->iyysycaqqccsmysy("\x68\x74\164\160\x73\x3a\57\57\x61\143\x63\x6f\165\x6e\x74\x73\56\147\x6f\x6f\x67\x6c\x65\x2e\x63\157\155\x2f\157\57\157\x61\165\x74\150\x32\x2f\164\x6f\x6b\x65\x6e", [self::cikssaguawsukusm => ["\147\162\x61\x6e\x74\x5f\x74\171\x70\145" => Setting::siumwmyaoyeyggeo, "\x63\x6c\151\145\x6e\164\137\151\x64" => $this->oauthClientId, "\x63\154\151\x65\x6e\164\x5f\x73\145\143\162\145\164" => $this->oauthClientSecret, "\x72\x65\146\x72\x65\x73\x68\137\164\157\x6b\145\x6e" => $this->oauthRefreshToken]]); $kuukgsmqkagwaciu = $gqusacuooiagkuom->ykmyiouokskyomii($keccaugmemegoimu); $sogksuscggsicmac = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($kuukgsmqkagwaciu); $this->oaumimwssciwumys("\115\141\151\x6c\145\162\x3a\x20\117\146\x66\x6c\151\x6e\145\x20\164\x6f\x6b\145\156\x20\x72\x65\x73\x75\154\164\56", $sogksuscggsicmac); return $sogksuscggsicmac["\x61\143\x63\x65\x73\163\x5f\164\157\x6b\x65\x6e"] ?? false; } public function icyskgykkigmcuec() { $eeaukqkuswaqwayu = $this->kmuweyayaqoeqiyw()->giiuwsmyumqwwiyq(Setting::iwyoukakoookgaee); if (!empty($eeaukqkuswaqwayu)) { goto qgegkeomwscwwiuw; } return new WP_Error(); qgegkeomwscwwiuw: $qcakkkwickkwyuck = $this->wmciwsucuuyumkes(); $qcakkkwickkwyuck->setAccessToken($eeaukqkuswaqwayu); if (!$qcakkkwickkwyuck->isAccessTokenExpired()) { goto qmiwsequckckoaei; } $mgegoogckgsumooq = $qcakkkwickkwyuck->getRefreshToken(); $qcakkkwickkwyuck->refreshToken($mgegoogckgsumooq); $eeaukqkuswaqwayu = $qcakkkwickkwyuck->getAccessToken(); $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem(Setting::iwyoukakoookgaee, $eeaukqkuswaqwayu); $this->oaumimwssciwumys("\x4d\141\151\x6c\x65\x72\x3a\40\116\145\167\40\101\143\x63\145\163\163\40\x54\x6f\x6b\145\156\40\146\145\x74\145\144\x20\x61\x6e\x64\40\x73\x61\x76\145\x64\56", $eeaukqkuswaqwayu); qmiwsequckckoaei: return $eeaukqkuswaqwayu; } }
