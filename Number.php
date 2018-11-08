<?php
/**
 * 实现表达式接口的数字类
 */
class Number implements MathExpression
{
    /**
     * 解释表达式
     *
     * @param Context $context
     * @return void
     */
    public function interpret($context)
    {
        echo '????';
    }
}
