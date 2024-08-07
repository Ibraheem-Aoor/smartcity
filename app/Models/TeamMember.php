<?php

namespace App\Models;

use App\Traits\HasStatus;
use App\Transformers\Admin\TeamTransfromer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory, HasStatus;

    protected $fillable = [
        'image',
        'name',
        'designation',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'status'
    ];


    public $modal = "#team-modal";
    public $transformer = TeamTransfromer::class;
}
