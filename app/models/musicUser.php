<?php
class MusicUser extends Eloquent {

    protected $table = 'user';

    public $timestamps = true;

    protected $softDelete = true;

    protected $hidden = ['deleted_at'];

    


};
