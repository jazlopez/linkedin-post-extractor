<?php
/**
 * Jaziel Lopez <juan.jaziel@gmail.com>
 * Software Developer
 * Tijuana Area, Mexico, 11/8/17 7:47 PM
 */

$config = [];

require_once '../vendor/autoload.php';
require_once '../config.php';

use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;

$url = 'https://www.linkedin.com/oauth/v2/accessToken?';

try {

	$request = Request::createFromGlobals();

	$client  = new Client();

	$params = [

		'grant_type' => 'authorization_code',

		'code' => $request->get( 'code' ),

		'redirect_uri' => 'http://jlopez.mx/post/extractor/cb',

		'client_id' => $config['client_id'],

		'client_secret' => $config['client_secret']
	];


	$accessToken = $client->request( 'POST', $url, [ 'form_params' => $params ] );


	print_r( '<pre>' );
	print_r( $accessToken );
	print_r( '</pre>' );
}catch (\Exception $e){

	print_r( '<pre>' );
	print_r( $e->getMessage() );
	print_r( '</pre>' );

}