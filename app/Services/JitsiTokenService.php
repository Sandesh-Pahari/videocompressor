<?php
namespace App\Services;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\File;

class JitsiTokenService
{
    public static function generateToken(string $roomName, string $userName, string $userEmail): string
    {
        $key = File::get(config('services.jaas.private_key_path'));
        $appId = config('services.jaas.app_id');
        $issuer = config('services.jaas.issuer');
        $sub = config('services.jaas.sub');

        $payload = [
            'aud' => 'jitsi',
            'iss' => $issuer,
            'sub' => $sub,
            'room' => $roomName,
            'exp' => time() + 3600,
            'context' => [
                'user' => [
                    'name' => $userName,
                    'email' => $userEmail,
                    'avatar' => '',
                ],
                'features' => [
                    'livestreaming' => true,
                    'recording' => true,
                    'transcription' => true,
                ]
            ]
        ];

        return JWT::encode($payload, $key, 'RS256');
    }
}
