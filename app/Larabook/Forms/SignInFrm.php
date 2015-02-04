<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;


class SignInFrm extends FormValidator {

    /**
     * Validation rules for the registration forms
     * @var array
     */

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

}