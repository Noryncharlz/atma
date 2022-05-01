<?php
namespace App\Models;
use CodeIgniter\Model;
class Login extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';

    protected $allowedFields = [
                                            'firstname',
                                            'lastname', 
                                            'address',  
                                            'password',
                                            'user_status',
                                            'user_type', 
                                            'created_at',
                                            'email',
    ];

   

    protected $returnType     = 'array';

}