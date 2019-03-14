# apps
写些感兴趣的小应用。包括算法、shell脚本工具、小应用

参考：[sth.writed.4.interest](https://github.com/meolu/sth.writed.4.interest)

- [ ] [微信提醒](./wx-reminder.py)
    - 需求产生：生活中遇到需要将符合条件的网络服务结果实现定制推送的情况。使用脚本定时请求网络服务，
    - 思路：使用脚本定时请求，结果符合则进行推送
    - 工具/库：
        - selenium（如果需要自动登录）
        - 定时任务BlockingScheduler
        - [server酱](http://sc.ftqq.com)（第三方推送服务）
- [x] [Lua练习](./lua)
- [ ] [数独](./sudoku)
    - 支持猜测一次（在猜测中猜测，这本来就是个有疑问的问题），能解到大部分sudoku.name Hard++的题
- [ ] [日志分析脚本](./awk-log)
    - 涉及批量机器下载如日志文件做分析、错误分析、数量统计时，awk跟expect强强组合
- [ ] [朴素贝叶斯-拼写纠正](./naive-bayesian)
    - PHP做一些分类算法，像拼写纠正这么小的事情，只是效果不是我们终极线上应用那么精准，需要更多的规则和尝试
- [ ] [切换hosts](./switch-hosts)
    - ubuntu虽然没有win和mac下switch-hosts好用，还是自己写一个，更舒心
- [ ] [ip2city](./ip2city)
    - 支持php扩展、php、python
- [ ] [更新代码至测试环境小工具](./sync-from-svn)
    - 实现把svn分支代码同步至测试环境的一小工具，支持web页面更新，命令行更新
- [ ] [有趣的KMP](./kmp)
    - 之前没发现KMP除了在查找之外，赌博方面也有突出贡献，结果让我大吃一斤