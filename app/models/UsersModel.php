<?php

namespace App\models;



class UsersModel extends Model
{
    public string $FirstName;
    public string $LastNAme;
    public string $birthday;
    public string $ReportSubject;
    public string $country;
    public string $phone_num;
    public string $Email;

    public function register()
    {
        echo 'creating new user';
    }

    public function rules(): array
    {
        return [
            'FirstName' => [self::RULE_REQUIRED],
            'LastNAme' => [self::RULE_REQUIRED],
            'birthday' => [self::RULE_REQUIRED],
            'ReportSubject' => [self::RULE_REQUIRED],
            'country' => [self::RULE_REQUIRED],
            'phone_num' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 16]],
            'Email' => [self::RULE_REQUIRED, self::RULE_EMAIL],

        ];
    }
}
