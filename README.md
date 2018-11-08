# 设计模式：解释器模式

这种模式不常用，好像不好理解。我写这篇文章是想尝试简单粗暴地理解这种模式是什么以及它是怎么用的。

## 什么是解释器模式

解释器模式是23种软件设计模式中的一种，分类上属于行为型模式。它提供了一种用面向对象方式实现文法解释功能的方法。

解释器模式包括4个部分，它们分别是Expression、Terminal Expression、Nonterminal Expression和Context。

- Expression是一个接口类或者抽象类，Terminal Expression类和Nonterminal Expression类都是实现它的具体类。Expression类定义了一个名为"Interpreter"的方法，用来解释Context对象——该方法以Context对象作为传入参数。
- Terminal Expression类表示终结符。终结符用来表示表达式中被操作的对象实体。比如表达式"1+1"中"1"就是终结符。在语法树里，终结符不能继续展开成其它运算。
- Nonterminal Expression类用来表示非终结符，用来解释文法中对象之间的相互作用。比如在表达式"1+1"中，符号"+"就是一个非终结符。在语法树里，非终结符可以继续展开。
- Context就是等待被解析的文本信息。

## 参考文章：

1. [《JAVA与模式》之解释器模式](http://www.cnblogs.com/java-my-life/archive/2012/06/19/2552617.html)
2. [解释器模式](https://blog.csdn.net/u012771445/article/details/81278626)
3. [23种设计模式（14）：解释器模式](https://blog.csdn.net/zhengzhb/article/details/7666020)
4. [JAVA设计模式（22）：行为型-解释器模式（Interpreter）](https://blog.csdn.net/taozi8023/article/details/51457555)
5. [英文维基百科](https://en.wikipedia.org/wiki/Interpreter_pattern)