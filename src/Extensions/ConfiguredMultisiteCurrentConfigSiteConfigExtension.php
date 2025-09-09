<?php

namespace Innoweb\SocialMeta\Extensions;

use SilverStripe\Core\Extension;
use Fromholdio\ConfiguredMultisites\Multisites;

class ConfiguredMultisiteCurrentConfigSiteConfigExtension extends Extension
{
    public function getCurrentSocialMetaConfig()
    {
        return Multisites::inst()->getCurrentSite();
    }
}
