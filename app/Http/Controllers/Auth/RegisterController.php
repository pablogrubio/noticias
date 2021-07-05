<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/gestor';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, []);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        //asi es como se manda un email de confiramcion de registro, pero no dispongo de un servidor de correo activo personal para hacerlo
/*
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = 'pablogrubio2020@gmail.com';
    $mail->Password = '';


    $mail->setFrom("pablogrubio2020@gmail.com", utf8_decode('Mail'));
    $mail->addAddress($data['email']);

    $mail->isHTML(true);

    $mail->Subject = utf8_decode('Registro completado correctamente');
    $mail->Body = '<table style="margin:0 auto;max-width:600px;width:100%;margin:0;padding:0;color:#000000;">';
    $mail->Body .= '<tr><td><hr /></td></tr>';
    $mail->Body .= '<tr><td>';
    $mail->Body .= '<br />Nombre: ' . utf8_decode($data['name']);
    $mail->Body .= '<br />Nombre Usuario: ' . utf8_decode($data['username']);
    $mail->Body .= utf8_decode('<br />Email: ' . $data['email']);
    $mail->Body .= '</td></tr>';
    $mail->Body .= '<tr><td>';
    $mail->Body .= '<tr><td><hr /></td></tr>';

    $mail->Body .= '</table>';

    $mail->send();
*/

    }
}
