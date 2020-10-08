<?php
namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function createUser($name, $password)
    {
        $user = new User;
        $user->username = $name;
        $user->password = Hash::make($password);
        $user->save();
        return $user;
    }
    public function getUserByUsername($username)
    {
        return User::where('username', $username)->get();

    }
    
    public function updateUserById($userId, array $options)
    {
        $user = User::where('id', $userId)->update($options);
        return $user;
    }

}
