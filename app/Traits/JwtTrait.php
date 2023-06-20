<?php

namespace App\Traits;

trait JwtTrait {

    private $secret_key = 'your-secret-key';
    private $jwt_values = [];

    public function getJwtToken() {

        $user_id = $this->id;
        $expiration = time() + 3600; // 1時間
        $header = [
            'typ' => 'JWT',
            'alg' => 'HS256',
            'exp' => $expiration
        ];
        $payload = [
            'user_id' => $user_id
        ];
        $header_token = $this->base64urlEncode(json_encode($header));
        $payload_token = $this->base64urlEncode(json_encode($payload));
        $signature_token = $this->base64urlEncode(
            hash_hmac('sha256', $header_token .'.'. $payload_token, $this->secret_key, true)
        );
        return $header_token .'.'. $payload_token .'.'. $signature_token;

    }

    public function isValidJwtToken($jwt_token) {

        $this->jwt_values = [];
        list($header_token, $payload_token, $signature_token) = explode('.', $jwt_token);
        $header = json_decode($this->base64urlDecode($header_token), true);
        $payload = json_decode($this->base64urlDecode($payload_token), true);
        $signature = $this->base64urlDecode($signature_token);
        $check_signature = hash_hmac('sha256', $header_token .'.'. $payload_token, $this->secret_key, true);

        if(hash_equals($check_signature, $signature)) {

            if($header['exp'] > time()) {

                $this->jwt_values = $payload;
                return true;

            }

            abort(419);

        }

        abort(400, 'Invalid signature');

    }

    public function getJwtValues() {

        return $this->jwt_values;

    }

    private function base64urlEncode($string) {

        $targets = ['+', '/', '='];
        $replacements = ['-', '_', ''];
        return str_replace($targets, $replacements, base64_encode($string));

    }

    private function base64urlDecode($string) {

        $targets = ['-', '_'];
        $replacements = ['+', '/'];
        return base64_decode(str_replace($targets, $replacements, $string) .'=');

    }

}