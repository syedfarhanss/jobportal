<?php

class Resume extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
       protected $table="resume";
	// Don't forget to fill this array
	protected $fillable = [];

}