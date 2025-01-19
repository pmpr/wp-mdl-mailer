<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d4050880             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, "\x68\164\164\x70\163\x3a\57\x2f\x6d\x61\151\x6c\x2e\x67\157\x6f\147\154\x65\x2e\x63\157\x6d\57"); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\x69\154\145\162\72\x20\117\x66\x66\154\x69\156\x65\40\x74\x6f\x6b\145\156\x20\147\145\x6e\x65\162\141\164\145\x64\x3a\x20{$sswycsgkqaiomeem}"); return base64_encode("\x75\x73\x65\162\x3d{$this->oauthUserEmail}\x1\x61\x75\x74\x68\x3d\x42\145\x61\162\x65\162\x20{$sswycsgkqaiomeem}\1\1"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }
