<?php
namespace App\Http\Services;
use App\Http\Models\User;
use Illuminate\Support\Facades\Hash;
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
        $user = User::create($data);
        return $user;
    }
}