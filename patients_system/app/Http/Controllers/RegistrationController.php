<?php

namespace App\Http\Controllers;

use App\pain_types;
use App\Services\UserService;
use App\Repositories\PainTypesRepository;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    protected $userService;
    protected $painTypesRepository;

    public function __construct(UserService $userservice, PainTypesRepository $painTypesRepository)
    {
        $this->userservice = $userservice;
        $this->painTypesRepository = $painTypesRepository;

    }
    public function register($duplicateUsername = false)
    {
        return view('registration.register', ['duplicateUsername' => request()->duplicateUsername ? boolval(request()->duplicateUsername): $duplicateUsername]);
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = $this->userservice->store(request()->name, request()->password);
        if($user){
            auth()->login($user);
            return redirect()->to('/personalInformation');
        }else{
            return redirect()->action(
                'RegistrationController@register', ['duplicateUsername' => true]
            );
        }
    
    }
    public function getSavePersonalInformationView()
    {
        $array = $this->painTypesRepository->getAllPainTypes();
        return view('registration.personalInformation', ['array' => $array]);
    }

    public function savePersonalInformation()
    {
        $user = $this->userservice->updateUserById(auth()->user()->id, request()->all());
            return redirect()->to('/welcome');

    }

    public function createHomeView(){
        return  view('registration.welcome');
    }
}
