<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Account extends Model implements Authenticatable
{
    use HasFactory;

    public function getAuthIdentifierName()
    {
        return 'id'; // Название поля, используемого для идентификации пользователя (обычно 'id')
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Возвращает идентификатор пользователя
    }

    public function getAuthPasswordName()
    {
        return 'password'; // Название поля, содержащего пароль
    }

    public function getAuthPassword()
    {
        return $this->password; // Возвращает хешированный пароль пользователя
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Возвращает токен для запоминания
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Устанавливает токен для запоминания
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Название поля, используемого для токена запоминания
    }

    protected $fillable = [
        'name', // Добавьте 'name' в массив fillable
        'email',
        'password',
    ];

    // Здесь можно добавить другой код вашей модели
}
