<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68aca938d51f3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Mailer\Gmail; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ThirdParty\Google\OAuth as GoogleOAuth; use Pmpr\Common\Foundation\ThirdParty\Google\SettingSegment; class OAuth extends GoogleOAuth { protected ?string $oauthUserEmail = ''; public function qiccuiwooiquycsg() { $this->oauthUserEmail = $this->weysguygiseoukqw(Setting::yqamagycoiomemuo); $this->igiywquyccyiaucw(Constants::eoyiggawwagyugua, 'https://mail.google.com/'); } public function getOauth64() { $sogksuscggsicmac = $this->icyskgykkigmcuec(); if (is_wp_error($sogksuscggsicmac)) { return false; } if ($sswycsgkqaiomeem = $this->cmiamcgoqceqyimu()) { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("Mailer: Offline token generated: {$sswycsgkqaiomeem}"); return base64_encode("user={$this->oauthUserEmail}\x01auth=Bearer {$sswycsgkqaiomeem}\x01\x01"); } return false; } public function ykuqkkqmsymwaqak() : SettingSegment { return Setting::symcgieuakksimmu(); } }
