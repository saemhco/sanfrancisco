<?php

namespace App\Http\Middleware\rol;

use Closure;

class Usuario
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
        if(auth()->user()->hasRoles(['Usuario','Administrador General'])){
            return $next($request);

        }else{
          return  response('No puedes Continuar',403);
        }
    }
}
