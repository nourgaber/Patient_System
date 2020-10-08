<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;


/**        $user->notify(new WelcomeEmail($user));

 * Class UserService
 * @package App\Services
 */
class UserService  
{
    protected $userRepository;
    /**
     * UserService constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store($name, $password)
    {
        $user = $this->userRepository->getUserByUsername($name);
        if(count($user) > 0){
            return false;
        }
        $user = $this->userRepository->createUser($name, $password);
        
        return $user;
    }

    public function updateUserById($id, array $options)
    {
        $userOptions = array();
        if(!is_null($options['email'])){
            $userOptions['email'] = $options['email'];
        }

        if(!is_null($options['first_name'])){
            $userOptions['first_name'] = $options['first_name'];
        }

        if(!is_null($options['last_name'])){
            $userOptions['last_name'] = $options['last_name'];
        }
        if(!is_null($options['mobile'])){
            $userOptions['mobile'] = $options['mobile'];
        }
        if(isset($options['gender']) && !is_null($options['gender'])){
            $userOptions['gender'] = $options['gender'];
        }
        if(!is_null($options['birth_date'])){
            $userOptions['birth_date'] = $options['birth_date'];
        }
        if(!is_null($options['occupation'])){
            $userOptions['occupation'] = $options['occupation'];
        }
        if(!is_null($options['pain_type_id'])){
            $userOptions['pain_type_id'] = $options['pain_type_id'];
        }
        if(!is_null($options['country'])){
            $userOptions['country'] = $options['country'];
        }
        $user = $this->userRepository->updateUserById($id, $userOptions);
        return $user;

    }


}
