<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model

{
 protected $fillable = ['name','price','description','body'];
 //protected $guarded = [''];
}