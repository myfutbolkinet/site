<?php


namespace App\Domain\Base\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class BaseRequest
 *
 * @package App\Http\Requests
 */
class BaseRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @param Factory $factory
     *
     * @return Validator
     */
    public function validator(Factory $factory)
    {
        $this->before();

        return $this->createDefaultValidator($factory);
    }

    /**
     * @param Validator $validator
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $this->after($validator);
        });
    }

    /**
     * @param Validator $validator
     */
    protected function after(Validator $validator)
    {

    }

    /**
     *
     */
    protected function before()
    {

    }
}
