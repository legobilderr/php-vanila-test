<?php

namespace App\models;


abstract class Model
{

    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'mail';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';


    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
    abstract public function rules(): array;


    public array $errors = [];


    public function validate()

    {
        foreach ($this->rules() as $atribute => $rules) {
            $value = $this->{$atribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if (!is_string($ruleName)) {
                    $ruleName = $rule[0];
                };
                if ($ruleName === self::RULE_REQUIRED && !$value) {
                    $this->addError($atribute, self::RULE_REQUIRED);
                };

                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($atribute, self::RULE_EMAIL);
                }
                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->addError($atribute, self::RULE_MIN, $rule);
                }
                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    $this->addError($atribute, self::RULE_MAX, $rule);
                }
            };
        }
    }

    public function addError(string $atribute, string $rule, $params = [])
    {
        $messge = $this->errorMessages()[$rule] ?? '';
        foreach ($params as $key => $value) {
            $messge = str_replace("{{$key}}", $value, $messge);
        }
        $this->errors[$atribute][] = $messge;
    }

    public function errorMessages()
    {
        return [
            self::RULE_REQUIRED => 'This field is required',
            self::RULE_EMAIL => 'This field mast bee valid email adres',
            self::RULE_MIN => 'Meen lent of this field {min}',
            self::RULE_MAX => 'Max lenth of this field {max}',
        ];
    }

    public function hasError($atribute)
    {
        return $this->errors[$atribute] ?? false;
    }
}
