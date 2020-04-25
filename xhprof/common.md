# 安装
当做php一个拓展使用

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