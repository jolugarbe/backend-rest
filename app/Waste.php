<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waste extends Model
{
    protected $table = 'waste';
    protected $fillable = ['quantity', 'measured_unit', 'composition', 'presentation', 'generation_date', 'pickup_date', 'packaging', 'handling', 'address_id', 'transport', 'dangerous', 'production', 'cer_code', 't_frequency_id', 't_waste_id', 't_ad_id', 'creator_user_id', 'owner_user_id', 'available'];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($value){
        $this->description = $value;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($value){
        $this->quantity = $value;
    }

    public function getMeasuredUnit(){
        return $this->measured_unit;
    }

    public function setMeasuredUnit($value){
        $this->measured_unit = $value;
    }

    public function getComposition(){
        return $this->composition;
    }

    public function setComposition($value){
        $this->composition = $value;
    }

    public function getPresentation(){
        return $this->presentation;
    }

    public function setPresentation($value){
        $this->presentation = $value;
    }

    public function getGenerationDate(){
        return $this->generation_date;
    }

    public function setGenerationDate($value){
        $this->generation_date = $value;
    }

    public function getPickupDate(){
        return $this->pickup_date;
    }

    public function setPickupDate($value){
        $this->pickup_date = $value;
    }

    public function getPackaging(){
        return $this->packaging;
    }

    public function setPackaging($value){
        $this->packaging = $value;
    }

    public function getHandling(){
        return $this->handling;
    }

    public function setHandling($value){
        $this->handling = $value;
    }

    public function getTransport(){
        return $this->transport;
    }

    public function setTransport($value){
        $this->transport = $value;
    }

    public function getDangerous(){
        return $this->dangerous;
    }

    public function setDangerous($value){
        $this->dangerous = $value;
    }

    public function getProduction(){
        return $this->production;
    }

    public function setProduction($value){
        $this->production = $value;
    }

    public function getCerCode(){
        return $this->cer_code;
    }

    public function setCerCode($value){
        $this->cer_code = $value;
    }

    public function getAvailable(){
        return $this->available;
    }

    public function setAvailable($value){
        $this->available = $value;
    }

    public function getFrequency(){
        return $this->belongsTo('App\FrequencyType', 't_frequency_id', 'id');
    }

    public function setFrequencyId($value){
        $this->t_frequency_id = $value;
    }

    public function getWasteType(){
        return $this->belongsTo('App\WasteType', 't_waste_id', 'id');
    }

    public function setWasteTypeId($value){
        $this->t_waste_id = $value;
    }

    public function getAdType(){
        return $this->belongsTo('App\AdType', 't_ad_id', 'id');
    }

    public function setAdTypeId($value){
        $this->t_ad_id = $value;
    }

    public function getCreator(){
        return $this->belongsTo('App\User', 'creator_user_id', 'id');
    }

    public function setCreatorId($value){
        $this->creator_user_id = $value;
    }

    public function getOwner(){
        return $this->belongsTo('App\User', 'owner_user_id', 'id');
    }

    public function setOwnerId($value){
        $this->owner_user_id = $value;
    }

    public function getAddress(){
        return $this->hasOne('App\Address', 'address_id', 'id');
    }

    public function setAddressId($value){
        $this->address_id = $value;
    }

    public function getTransfer(){
        return $this->hasOne('App\Transfer', 'waste_id', 'id');
    }
}
