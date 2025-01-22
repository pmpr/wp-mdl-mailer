<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791535979cc6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, "\x68\x74\x74\x70\x73\x3a\57\57\x6d\x61\x69\154\56\x67\x6f\157\x67\x6c\145\56\x63\x6f\x6d\57"); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x4d\x61\151\154\x65\162\72\40\x4f\x66\146\x6c\151\156\x65\x20\164\157\153\145\156\40\x67\x65\x6e\145\x72\x61\164\145\x64\72\x20{$sswycsgkqaiomeem}"); return base64_encode("\x75\x73\x65\x72\x3d{$this->oauthUserEmail}\x1\141\165\x74\x68\x3d\x42\145\x61\x72\145\x72\40{$sswycsgkqaiomeem}\1\1"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }
