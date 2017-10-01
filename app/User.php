<?php
/**
 * MVP actions controller
 * PHP Version 7
 *
 * @category Controller
 * @package  App\Http\Controllers
 * @author   Eugene Rupakov <eugene.rupakov@gmail.com>
 * @license  Apache Common License 2.0
 * @link     http://moblie.cryptany.io
 */
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * User model
 *
 * @category Model
 * @package  App\Model
 * @author   Eugene Rupakov <eugene.rupakov@gmail.com>
 * @license  Apache Common License 2.0
 * @link     http://cgw.cryptany.io
 */
class User extends Authenticatable
{
    use Notifiable;
    use Jrean\UserVerification\Traits\VerifiesUsers;
    use Jrean\UserVerification\Traits\UserVerification;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
