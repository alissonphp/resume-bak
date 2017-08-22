<?php

namespace Alisson\ResumeBank\Models;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {

    protected $table = "candidates";
    protected $fillable = ['cpf','name','email','password'];

    public function personalInfos()
    {
        return $this->hasOne(CandidatePersonalInfos::class,'candidates_id');
    }

}