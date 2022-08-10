<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    use HasFactory;
    protected $table = "cfmbb_users";
    public $timestamps = false;
    public $primaryKey = 'member_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'FirstName',
        'Lastname',
        'Organization',
        'Enewsletter',
        'ChkAddress',
        'ChkBio',
        'ChkEmail',
        'ChkTelephone',
        'ChkPhotoID',
    ];

}