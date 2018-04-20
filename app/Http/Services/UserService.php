<?php
namespace App\Http\Services;
use App\Http\Models\Activity;
use App\Http\Models\User;
use App\Http\Models\Image;
use App\Http\Models\AvailableUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic;
use Mockery\CountValidator\Exception;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
class UserService
{
    /*
    * @param $data: Expected array of user data
    * @return User model
    */
    public static function createUser($data) {
        if($data['password'] != $data['passwordConfirm']) {
            return 'Error, passwords do not match';
        }
        $data['password'] = Hash::make($data['password']);
        $data['api_token'] = str_random(60);
        $user = User::create($data);
        return $user;
    }
    
    public static function generateToken($user) {
        $token = str_random(60);
        $data = [
            'api_token' => $token,
        ];
        $user->fill($data);
        $user->save();
        return $token;
    }
    /*
    * @param $data: Expected array of user data
    * @return User model
    */
    public static function updateUser($data) {
        $user = Auth::user();
        if(!is_null($user)) {
            $fieldConstraints = [
                'firstName'     => 'Min:2|Max:50|Alpha',
                'email'         => 'Required|Between:3,64|Email|Unique:users,email' . ($user->id ? ",$user->id" : ''),
            ];
            $validator = Validator::make($data, $fieldConstraints);
            if(!$validator->fails()) {
                $user->fill($data);
                $user->save();
            }
            return $validator;
        } else {
            throw new Exception('User not authorized');
        }
    }
    public static function getAccountInfo() {
        $user = Auth::user();
        if($user) {
            $userData = [
                'email' => $user['email'],
                'firstName' => $user['firstName'],
            ];
            return $userData;
        } else {
            throw new Exception('User not authorized');
        }
    }
}