<?php 

return array( 
	
	/**
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'ThomasweltonL4Session',

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 |******************************
		 | Facebook
		 |*******************************
		 *
		 * Create a new app - https://developers.facebook.com/apps
		 *
		 * @client_id - Facebook calls this the App ID
		 * @client_secret - Facebook calls this the App Secret
		 * @scope - Comma seperated string - See https://developers.facebook.com/docs/reference/login/
		 *
		 */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),
        /**
	     |******************************
	     | Google
	     |******************************
	     *
	     * Create a new app - https://developers.google.com/+/quickstart/php
	     * When creating the app set the redirect URI to be yousite.com/oauth/google/
	     *
	     * @client_id - Google calls this the Client ID
	     * @client_secret - Google calls this the Client Secret
	     * @scope - Comma seperated string - See https://developers.google.com/accounts/docs/OAuth2Login
	     *
	     */
        'Google' => array(
        	'client_id' => '',
        	'client_secret' => '',
        	'scope' => 'openid email'

        ),

	)

);