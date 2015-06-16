<?php namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Symfony\Component\Security\Core\Util\StringUtils;
use Illuminate\Support\Facades\Crypt;

class VerifyCsrfToken extends BaseVerifier
{

    /**
     * Determine if the session and input CSRF tokens match.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function tokensMatch($request)
    {
        $token = $request->session()->token();
        $header = $request->header('X-XSRF-TOKEN');
        if($request->wantsJson())
            $header = Crypt::decrypt($header);

        return StringUtils::equals($token, $request->input('_token')) || ($header && StringUtils::equals($token, $header));
    }


}
