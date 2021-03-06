<?php

/**
 *      The MIT License (MIT)

 *      Copyright (c) 2016 stefan2904
 *      Copyright (c) 2016 LosFuzzys (https://hack.more.systems)
 *      Copyright (c) 2016 Kasper Rynning-Tønnesen
 *      Copyright (c) 2017 flytreeleft
 *
 *      Permission is hereby granted, free of charge, to any person obtaining a copy
 *      of this software and associated documentation files (the "Software"), to deal
 *      in the Software without restriction, including without limitation the rights
 *      to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *      copies of the Software, and to permit persons to whom the Software is
 *      furnished to do so, subject to the following conditions:
 *
 *      The above copyright notice and this permission notice shall be included in all
 *      copies or substantial portions of the Software.
 *
 *      THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *      IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *      FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *      AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *      LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *      OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *      SOFTWARE.
 *
 */

if(!defined('MEDIAWIKI')) {
        die('This is a MediaWiki extension, and must be run from within MediaWiki.');
}


if ( function_exists( 'wfLoadExtension' ) ) {
        wfLoadExtension( 'OAuth2Client' );

        // Keep i18n globals so mergeMessageFileList.php doesn't break
        $wgOAuth2Client['config']['change_endpoint'] = '/No_changing_password_url_specified_in_$wgOAuth2Client';
        $wgOAuth2Client['config']['service_login_link_text'] = 'Login with OAuth2 provider';
        $wgOAuth2Client['config']['service_name'] = 'OAuth2 provider';
        #$wgGroupPermissions['group']['right']          = true /* or false */;
        #$wgGroupPermissions['oauth2']                  = $wgGroupPermissions['user'];
        # Disable for everyone.
        #$wgGroupPermissions['*']['edit']               = false;
        # Disable for users, too: by default 'user' is allowed to edit, even if '*' is not.
        #$wgGroupPermissions['user']['edit']            = false;
        # Make it so users with confirmed email addresses are in the group.
        #$wgAutopromote['emailconfirmed']               = APCOND_EMAILCONFIRMED;
        # Hide group from user list.
        #$wgImplicitGroups[]                            = 'emailconfirmed';
        # Finally, set it to true for the desired group.
        #$wgGroupPermissions['emailconfirmed']['edit']  = true;

        return;
} else {
        die( 'This version of the OAuth2Client extension requires MediaWiki 1.25+' );
}
