<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MenuUrl implements Rule
{
    /**
     * @var bool
     */
    private $is_url_public;
    /**
     * @var string
     */
    private $notPublicUrlPattern;

    /**
     * Create a new rule instance.
     *
     * @param bool $is_url_public
     */
    public function __construct(bool $is_url_public)
    {
        $this->is_url_public = $is_url_public;
        $this->notPublicUrlPattern = "/^[A-Za-z0-9]+$/";
    }

    /**
     * @param $attribute
     * @param mixed $value
     * @return bool|mixed
     */
    public function passes($attribute, $value)
    {
        if (!$this->is_url_public){
            return preg_match($this->notPublicUrlPattern, $value) == 1;
        }
        return filter_var($value, FILTER_VALIDATE_URL);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Ссылка не соответствует правилам";
    }
}
