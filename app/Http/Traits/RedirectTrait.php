<?php

namespace App\Http\Traits;   // Or the place where the trait is stored (step 2)

use Illuminate\Http\Request;

trait RedirectTrait
{
 /**
 * Where to redirect users after register/login/reset based in roles.
 *
 * @param \Iluminate\Http\Request  $request
 * @param mixed $user
 * @return mixed
 */
public function RedirectBasedInRole(Request $request, $user) {

  $route = '';

  switch ($user->tipoUsuario) {
    # Admin
    case 1:
      $route = '/admin'; 
    break;

    # Profesor
    case 2:
      $route = '/home'; 
    break;

      default: break;
    }

    return redirect()->intended($route);
  }

}