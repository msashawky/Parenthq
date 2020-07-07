<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;

class UserController extends Controller
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function users(){
        $users = $this->userRepository->getUsers();
        if($users)
            return $this->apiResponse($users);
        return $this->notFoundResponse("No Users Found");
    }

    public function providerFilter($providerName){
        if($providerName == "DataProviderX"){
            return $this->apiResponse($this->userRepository->getFilteredProviderX());
        }
        elseif ($providerName == "DataProviderY"){
            return $this->apiResponse($this->userRepository->getFilteredProviderY());
        }
        else{return $this->notFoundResponse("Not Found");}
    }

    public function providerSatusCodeFilter($code){
        return $this->apiResponse($this->userRepository->getFilteredByStatusCode($code));
    }

    public function currencyFilter($currency){
        return $this->apiResponse($this->userRepository->getcurrencyFilter($currency));
    }

}
