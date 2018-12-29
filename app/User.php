<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres','apellido_paterno','apellido_materno','f_nac','dni', 'email', 'password','foto','distrito_nac','domicilio',
        'n_domicilio','tel','cel', 'sexo', 'estado_login'
    ];
    public function all_names($id){
        return User::where('id','=',$id)->select(DB::raw('CONCAT(users.apellido_paterno," ",users.apellido_materno,", ", users.nombres) AS nombres'))->first();
    }

    public function roles(){
        return $this->belongsToMany(Rol::class,'rol_users');
        //Nota: entonces si existe la relación de Muchos a Muchos, sintaxis: 
        //return $this->belongsToMany(NombreModeloRelacionarse::class,'Tabla_pivot');
    }
    public function hasRoles(array $rolesFromView){
        foreach ($rolesFromView as $rv) {
            foreach ($this->roles as $rm) {
                if ($rm->rol===$rv) {
                    return true;
                }
            }
        }
        return false;
    }

    public function hasAvatar($rol){
     
      $avatar="<button class='btn btn-inverse' title='Usuario Anónimo'><i class='ace-icon fa fa-user-secret'></i></button>";

        switch ($rol->rol) {
           case 'Administrador General': 
               $avatar="<button class='btn btn-info' title='".$rol->descripcion."'><i class='ace-icon fa fa-laptop'></i></button>";break;
           case 'Soporte': 
               $avatar="<button class='btn btn-primary' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;
           case 'Usuario': 
               $avatar="<button class='btn btn-grey' title='".$rol->descripcion."'><i class='ace-icon fa fa-user'></i></button>";break;            
            default: break;
        }
        return $avatar;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
