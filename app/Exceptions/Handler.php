<?php namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Lang;

class Handler extends ExceptionHandler
{

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException'
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        // If the request wants JSON (AJAX doesn't always want JSON)
        if ($request->wantsJson()) {
            // Define the response
            $response = [
                'errors' => Lang::get('backend/error.errors_message')
            ];

            // If the app is in debug mode
            if (config('app.debug')) {
                // Add the exception class name, message and stack trace to response
                $response['exception'] = get_class($e); // Reflection might be better here
                $response['message'] = $e->getMessage();
                $response['trace'] = $e->getTrace();
            }

            // Default response of 400
            $status = 400;

            if ($e instanceof TokenMismatchException) {
                $response['message'] = Lang::get('backend/error.token_mismatch_exception');
            } elseif ($this->isHttpException($e)) {
                // If this exception is an instance of HttpException
                // Grab the HTTP status code from the Exception
                // return default error message
                $status = $e->getStatusCode();
                $response['message'] = Lang::get('backend/error.error_default_message');
            }

            // Return a JSON response with the response array and status code
            return response()->json($response, $status);
        }

        return parent::render($request, $e);
    }

}
