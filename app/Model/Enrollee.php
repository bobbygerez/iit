<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Enrollee extends Model
{
    
    protected $table = 'enrollees';
    protected $fillable = [
    	'admissionNo', 'firstname', 'middlename', 'lastname',
    	'suffix', 'nickname', 'age', 'birthday', 'birth_place',
    	'sex', 'civil', 'spouse_lastname', 'spouse_firstname', 'spouse_middlename',
    	'landline', 'mobile', 'email', 'religion', 'citizenship', 'present_address',
    	'present_province_id', 'present_city_id', 'present_barangay', 'present_zipcode',
    	'permanent_address', 'permanent_province_id', 'permanent_city_id', 'permanent_zipcode',
    	'course_id', 'educ_at_id', 'father_firstname', 'father_lastname', 'father_middlename',
    	'father_occupation', 'father_contact_number', 'father_address', 'father_province_id',
    	'father_city_id', 'father_zipcode', 'mother_firstname', 'mother_lastname', 'mother_middlename',
    	'mother_occupation', 'mother_contact_number', 'mother_address', 'mother_province_id',
    	'mother_city_id', 'mother_zipcode', 'name_of_school', 'school_address', 'school_province_id',
    	'school_city_id', 'school_zipcode', 'remarks'
    ];

    public function answers(){

        return $this->belongsToMany('App\Model\Answer', 'answer_enrollee', 'enrollee_id', 'answer_id');
    }


    public function requirementsDoc(){
        return $this->belongsToMany('App\Model\RequirementDoc', 'enrollee_requirements_doc', 'enrollee_id', 'requirement_doc_id');

    }

    public function siblings(){

        return $this->belongsToMany('App\Model\Sibling', 'enrollee_sibling', 'enrollee_id', 'sibling_id');
    }

    public function getCreatedAtAttribute($value){
        return  Carbon::parse($value)->toDayDateTimeString();
        
    }

    public function getSexAttribute($value){

        return (int)$value;
    }
    public function getCivilAttribute($value){

        return (int)$value;
    }
}
