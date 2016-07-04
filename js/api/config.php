<?php
    /**
     * Your Twitter App Info
     */

    // Consumer Key
    define('CONSUMER_KEY', base64_decode('a0NjbWxJSWhJVVJLc1ZvZ3NGR1N1OUNwOA=='));
    define('CONSUMER_SECRET', base64_decode('VkdyZTBnYWc1cXZSOWl1NnRZM0hVSnlEd1hwZmFQYXdOMTBzM1BKanRXZ2RmbmRqUEM='));

    // User Access Token
    define('ACCESS_TOKEN', base64_decode('Mjk1NTUwOTMwNS13Yll4UDZuam1od0xYYzdEQ2hNS0l0aTdoMkJsZEp3TnhQdmNxamc='));
    define('ACCESS_SECRET', base64_decode('M2w0QmRzWnNUSm83NHZ3UzRQREt5b0VQWXM3S1pjNGx2a2Z6RzlaUmlKZlE1'));

	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 3600); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));
