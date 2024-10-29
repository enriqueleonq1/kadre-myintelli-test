<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\UserIntelli;
use App\UserIntelliWidgets;

class SiteController extends Controller
{
    public function requestToEndPoint() {
        $client = new Client();
        $response = $client->post('https://dev.myintelli.net/api/v1/login', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'email' => 'MC@INTELLI-NEXT.COM',
                'password' => '123456'
            ]
        ]);
        if($response->getStatusCode() != 200) 
            return response()->json(['status' => false, 'message' => 'Error al obtener datos de api de intelli','user'=>null], 500);
        
        $user = UserIntelli::first();
        
        if(!$user) {
            $userInfo = json_decode($response->getBody()->getContents(),true)['user'];
            $userIntelli = new UserIntelli();
            $userIntelli->id_user = $userInfo['id_user'];
            $userIntelli->email = $userInfo['email'];
            $userIntelli->first_name = $userInfo['first_name'];
            $userIntelli->last_name = $userInfo['last_name'];
            $userIntelli->structures = $userInfo['structures'];
            $userIntelli->roles = $userInfo['roles'];
            $userIntelli->registration_stations = $userInfo['registration_stations'];
            $userIntelli->settings_user = $userInfo['settings_user'];
            $userIntelli->notifications = $userInfo['notifications'];
            $userIntelli->phone = $userInfo['phone'];
            $userIntelli->status = $userInfo['status'];
            $userIntelli->all_permission = $userInfo['all_permission'];
            $userIntelli->create_visit = $userInfo['create_visit'];
            $userIntelli->login_failed = $userInfo['login_failed'];
            $userIntelli->ip = $userInfo['ip'];
            $userIntelli->save();
            if(true)
                return response()->json(['status'=>true,'message'=>'Usuario obtenido y almacenado exitosamente','user'=>$userIntelli]);
            return response()->json(['status'=>false,'message'=>'Fallo al almacenar usuario','user'=>null]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'El usuario ya se ha solicitado con anterioridad',
            'user'=> $user]);
        
    }
}
