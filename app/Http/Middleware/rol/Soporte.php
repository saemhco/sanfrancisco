<?php

namespace App\Http\Middleware\rol;

use Closure;

class Soporte
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if(auth()->user()->hasRoles(['Administrador General','Soporte'])){
            return $next($request);

        }else{
          return  response('No puedes Continuar',403);
        }
    }
}
