<?php namespace ClinicaVeterinaria\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'ClinicaVeterinaria\Http\Middleware\VerifyCsrfToken'
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'ClinicaVeterinaria\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'ClinicaVeterinaria\Http\Middleware\RedirectIfAuthenticated',
		'autorizador' => 'ClinicaVeterinaria\Http\Middleware\Autorizador',
		'autorizaSecretaria' => 'ClinicaVeterinaria\Http\Middleware\AutorizaSEC',
		'autorizaVeterinario' => 'ClinicaVeterinaria\Http\Middleware\AutorizaVET'
	];

}
