<?php

namespace App\Policies;

use App\User;
use App\Evento;
use App\CoordenadorComissao;
use App\AdministradorResponsavel;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsuariosPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function isUser(User $user){
       
        if($user->has('')){

        }else if(){

        }else if(){
            
        }else if(){
            
        }else if(){
            
        }else if(){
            
        }else if(){
            
        }


        
    
    }
}
