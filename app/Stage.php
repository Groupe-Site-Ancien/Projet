<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Http\Controllers\StagesController;

class Stage extends Model
{
    //protected $table = 'stages';
    protected $fillable = [
                            'user_id',
                            'intitule_stage',
                            'domaine_stage',
                            'entreprise_stage',
                            'region_stage',
                            'ville_stage',
                            'missions_stage',
                            'profil_stage',
                            'rem_stage',
                            'url_stage'];

    /*
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
