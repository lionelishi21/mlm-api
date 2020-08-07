<?php
return array(
    // set your paypal credential
    'client_id' => 'ASDLLb5slq4glmE0Xoa1ANXKNp9Z6JDsdBB1HnYwQNTOwK5s1lxreTz0wuo_gWyJCsvlmJpKJqrD1Jj9',
    'secret' => 'EE7AeoGgiOQblWPto4xGJIQhjnJXnjBbr51DEPWpYJiBNxh1C7iwXX6HFaf27VdQkox0Ck_YSFk9EgJN',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);