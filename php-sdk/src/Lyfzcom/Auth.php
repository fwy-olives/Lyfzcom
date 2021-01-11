<?php
namespace Lyfzcom;

use Lyfzcom;
final class Auth
{
    private $accessKey;
    private $secretKey;

    public function __construct($accessKey, $secretKey)
    {
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
    }

    public function getAccessToken()
    {
        return 1;
    }


}
