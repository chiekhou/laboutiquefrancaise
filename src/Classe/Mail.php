<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail {

    private $api_key = 'd513b6eeb750947688027c7d970d2b2a';

    private $api_key_secret = '5af0f67d72653320e0c73c1b54ddd29f';

    public function send($to_email, $to_name, $subject, $content) {

        $mj = new Client($this->api_key, $this->api_key_secret, true, ['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "cheikh.bodychallenge@gmail.com",
                'Name' => "Sirou"
            ],
            'To' => [
                [
                    'Email' => $to_email,
                    'Name' => $to_name
                ]
            ],
            'TemplateID' => 3993592,
            'TemplateLanguage' => true,
            'Subject' => $subject,
            'Variables' => [
                'content'=> $content,
                
            ]
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success();
    }
}