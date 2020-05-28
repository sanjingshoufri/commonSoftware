# 安装
当做php一个拓展使用.

## 相关依赖
### graphviz
#### 安装
win下没有成功，Linux下一条指令就成功.

# 输出参数
- ct         // 调用的次数，[foo==>bar]，   
- wt         // 函数执行消耗的时间
- cpu        // 和wt的差别在于，当进程让出cpu使用权后，将不再计算cpu时间
- mu         // memory usage  
- pmu        // memory usage的峰值
- ==>        // 表示一个调用关系
- main()     // 表示你启用xhprof的函数

# 相关参数
- CPU时间，用户空间的CPU时间 + 内核空间的CPU时间
- 

# graphviz输出参数
- Incl. CPU(microsecs):方法执行花费的CPU时间，包括子方法的执行时间.
- Excl. CPU(microsec):方法本身执行花费的CPU时间，不包括子方法的执行时间.