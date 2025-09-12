<?php

namespace Innoweb\SocialMeta\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use BurnBright\ExternalURLField\ExternalURLField;

class AuthorExtension extends Extension
{
    private static $db = [
        'FacebookProfileURL'    =>  'ExternalURL',
        'TwitterHandle'         =>  'Varchar(50)'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.Main',
            [
                ExternalURLField::create(
                    'FacebookProfileURL',
                    _t("ArticleAuthorRole.FACEBOOKPROFILE", 'Facebook Profile (full URL)')
                ),
                TextField::create(
                    'TwitterHandle',
                    _t("ArticleAuthorRole.XHANDLE", 'X (Twitter) Handle (@xyz)')
                )
            ],
            'DirectGroups'
        );
    }
}
