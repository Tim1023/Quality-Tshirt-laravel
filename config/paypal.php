<?php
return array(
    // set your paypal credential
    'client_id' =>  'AWnGkhfPDCS_IBlKURYduMfQXUBJ-_x1HgfkPw_0-fjmmvJwZwh1tqhOIAr1in8LVR8YyDupE3nCngW_',
    'secret'    =>  'EPkDlvWoMpkBgcyPMn16QnqkGbfqwDu5Q1a-5AKthjSDDRQH2UcgDkX4uqFpxdpIcytyT1iBfqrPCsgB',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
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