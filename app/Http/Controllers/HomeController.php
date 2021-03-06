<?php namespace ClinicaVeterinaria\Http\Controllers;
use Illuminate\Http\Request;
use ClinicaVeterinaria\Cliente;
use ClinicaVeterinaria\Animal;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	public function buscaPorCPF(Request $request){
		$cpf = documentToDataBase($request->input("cpf"));
		$clienteObj = new Cliente();
		$clienteBusca = $clienteObj->buscaPorCPF($cpf);
		$header = array();
		return response()->json($clienteBusca,200,$header,JSON_UNESCAPED_UNICODE);
	}
	public function criaArquivoJSON(Request $request){
		$cliente_id = $request->input("cliente_id");
		$animalObj = new Animal();
		$animais = $animalObj->lista($cliente_id);
		$header = array();
		return response()->json($animais,200,$header,JSON_UNESCAPED_UNICODE);
	}
	public function criaClientesJSON(){
		$clienteObj = new Cliente();
		$clientes = $clienteObj->lista(array());
		$header = array();
		return response()->json($clientes,200,$header,JSON_UNESCAPED_UNICODE);
	}
}
