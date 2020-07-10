<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\recuperacaoSenha;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'instituicao', 'celular',
        'especProfissional', 'enderecoId',
        'usuarioTemp', 'tipo', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function trabalho(){
        return $this->hasMany('App\Trabalho', 'autorId');
    }

    public function coautor(){
        return $this->hasMany('App\Coautor', 'autorId');
    }

    public function parecer(){
        return $this->hasMany('App\Parecer', 'revisorId');
    }

    public function atribuicao(){
        return $this->hasMany('App\Atribuicao', 'revisorId');
    }

    public function pertence(){
        return $this->hasMany('App\Pertence', 'revisorId');
    }

    public function recurso(){
        return $this->hasMany('App\Recurso', 'comissaoId');
    }

    public function mensagem(){
        return $this->hasMany('App\Mensagem', 'comissaoId');
    }

    public function endereco(){
        return $this->belongsTo('App\Endereco', 'enderecoId');
    }

    public function evento(){
        return $this->hasMany('App\Evento', 'coordenadorId');
    }
    public function administradors(){
        return $this->hasOne('App\Administrador');
    }
    public function proponentes(){
        return $this->hasOne('App\Proponente');
    }
    public function AdministradorResponsavel(){
        return $this->hasOne('App\AdministradorResponsavel');
    }
    public function participantes(){
        return $this->hasMany('App\Participante');
    }
    public function avaliadors(){
        return $this->hasOne('App\Avaliador');
    }
    public function coordenadorComissao(){
        return $this->hasOne('App\CoordenadorComissao');
    }
    
    public function sendPasswordResetNotification($token){
        $this->notify(new recuperacaoSenha($token));
    }

}
