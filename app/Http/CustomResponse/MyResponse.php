<?php


namespace App\Http\CustomResponse;


use EasyWeChat\Kernel\Contracts\Arrayable;
use function json_decode;
use function json_encode;

class MyResponse implements Arrayable
{
    public $response;
    public $array;

    public function __construct($response)
    {
        $this->response = $response;
        $this->array = json_decode($this->response->getBody()->getContents(),true);
    }


    public function toArray()
    {
        // TODO: Implement toArray() method.
        return $this->array;
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->array[$offset]);
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        return $this->array[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        return $this->array[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }
}