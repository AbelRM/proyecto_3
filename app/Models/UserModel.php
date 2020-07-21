<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table="usuario";
    protected $primaryKey = "id";

    protected $returnType = "array";
    //si en nuestra base de datos tenemos un campo llamado delete le pondra 1
    protected $userSoftDelete =true;
    //valores de la base de datos
    protected $allowedFields = ["id","nombre","usuario","correo","mensaje"];
}

