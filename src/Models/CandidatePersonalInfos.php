<?php

namespace Alisson\ResumeBank\Models;

use Illuminate\Database\Eloquent\Model;

class CandidatePersonalInfos extends Model
{

    protected $table = 'candidate_personal_infos';
    protected $fillable = ['candidates_id','rg','rg_org_exp','rg_date_exp','father','mother','birth','genre','marital_status'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'candidates_id');
    }

}