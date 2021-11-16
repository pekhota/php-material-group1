<?php

namespace Framework;

class Arr
{
    private array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public static function wrap(array $a) {
        return new Arr($a);
    }

    public function get(string $key, $default = null) {
        $chunks = explode(".", $key);

        $tmp = $this->data;

        for ($i = 0; $i < count($chunks); $i++) {
            if (isset($tmp[$chunks[$i]])) {
                $tmp = $tmp[$chunks[$i]];
            } else {
                return $default;
            }
        }

        return $tmp;
    }
}