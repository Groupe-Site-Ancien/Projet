<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    public $table = 'enquete';

    protected $fillable = ['user_id',
                            'situation',
                            'delai_emploi',
                            'canal_emploi',
                             'type_employeur',
                            'nom_employeur',
                            'temps_travail',
                            'type_contrat',
                            'domaine_emploi',
                            'intitule_emploi',
                            'region_emploi',
                            'tranche_salaire',
                            'salaire_net',
                            'satisfaction_emploi'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
