<?php

class Summary
{
    function __construct(
        protected int $a,
        protected int $b
    ){}

    /**
     * @return int
     * @throws Exception
     */
    public function get(): int
    {
        if (!is_numeric($a = $this->getA()) || !is_numeric($b = $this->getB())) {
            throw new Exception("A or B not integer");
        }

        return $a + $b;
    }

    /**
     * @return int
     */
    private function getA(): int
    {
        return $this->a;
    }

    /**
     * @return int
     */
    private function getB(): int
    {
        return $this->b;
    }

    /**
     * @param int $a
     * @return Summary
     */
    public function setA(int $a): Summary
    {
        $this->a = $a;

        return $this;
    }

    /**
     * @param int $b
     * @return Summary
     */
    public function setB(int $b): Summary
    {
        $this->b = $b;
        return $this;
    }
}