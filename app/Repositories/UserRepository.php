<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
//    use ApiResponseTrait;

    public function getUsers()
    {
        $providers = array();//Empty Array
        foreach ($this->getFilteredProviderX()->users as $xUsers)
        {
                array_push($providers, $xUsers);
        }
        foreach ($this->getFilteredProviderY()->users as $yUsers)
        {
            array_push($providers, $yUsers);
        }
        return $providers; // Combined Data
    }

    public function getFilteredProviderX(){
        // get Data from Json Files.
        //providerXPath() from helpers/helpers.php
        return json_decode(file_get_contents(providerXPath()));//Decoding JSON
    }

    public function getFilteredProviderY(){
        // get Data from Json Files.
        //providerYPath() from helpers/helpers.php
        return $decodedYProvider = json_decode(file_get_contents(providerYPath()));//Decoding JSON
    }

    public function getFilteredByStatusCode($code){
        $providers = array();
        foreach ($this->getFilteredProviderY()->users as $yUsers)
        {
            if($yUsers->status == code($code)){array_push($providers, $yUsers);}//code() in helper
        }
        return $providers;
    }

    public function getcurrencyFilter($currency){
        $providers = array();
        $allUsers = $this->getUsers();
        foreach ($allUsers as $users)
        {
            if($users->currency === $currency){array_push($providers, $users);}
        }
        return $providers;
    }



}
