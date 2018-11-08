<?php
/**
 * 表达式接口类
 */
interface MathExpression
{
    /**
     * 解释表达式
     *
     * @param Context $context
     * @return void
     */
    public function interpret($context);
}
