# release-tools
git、svn发布脚本


##  目录说明
```
git
    └─ release.sh           
svn
    （位于SVN服务器）
    /hooks/post-commit  SVN钩子文件
    push_online.sh
    svn.php             供 post-commit 来执行，通过 curl 来触发模拟http协议访问测试服务器上的 update.php
    
    （位于Web测试服务器）
    update.php          保证该脚本可以通过Web方式访问
    
    （位于Web线上服务器）
    updateSafely.php    手动更新脚本，保证该脚本可以通过Web方式访问
```

## svn
往SVN服务器提交代码的时候，自动更新到测试服务器上，不管你是在内网还是外网。
### 使用说明
- chown -R www:www xxx
- 注意svn1.6版本之后在远程执行 svn up 的时候会提示时候保存密码，需要对远程服务器上的svn配置做下修改,参考: [http://mengkang.net/67.html](https://github.com/catfan/Medoo) 
- 使用过程可以会有很多的脚本执行权限问题，请往nginx和apache的属主和属组上修改
