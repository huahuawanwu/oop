Git:
    Git是目前世界上最先进的分布式版本控制系统（没有之一）
    git config --global user.name "Your Name"
    git config --global user.email "email@example.com"
    1.创建版本库
        git init
    2.添加与提交
        git add filename
        git commit -m '注释'
    3.版本的管理(前进与回退)
        git status   查看版本信息
        git diff     查看版本的具体修改内容
        git log      查看历史版本
        git log --pretty=oneline   简约版查看历史版本
        git reset --hard HEAD^  回退版本
        git reset --hard 版本号  回退到具体版本
        git reflog   查看历史操作信息
    4.工作区和暂存区：
    5.删除
        1.确定删除：工作区和版本库一起删除
            git rm filename   
            git commit -m '删除'
        2.取消删除：工作区删除，从版本库读取出来
            git checkout -- filename
    6.撤销修改
        1.还原工作区：git checkout -- filename
        2.还原暂存区：
            撤销仓库中暂存区的修改：
                git reset HEAD filename
            还原工作区
                git checkout -- filename
    7.分支管理
        1.创建合并分支：git checkout -b iwen
        2.切换分支：git checkout iwen
        3.查看分支：git branch
        4.分支合并：git merge iwen
        5.删除分支：git branch -d iwen
        6.创建分支：git branch hello
        7.删除分支：删除未合并的分支  git branch -D dev
    8.冲突解决
        自己对比冲突你内容，进行合并
    9.关联远程仓库
        1.创建SSH Key
            ssh-keygen -t rsa -C "liuxingyu@sxt.cn"
        2.登陆GitHub，打开“Account settings”，“SSH Keys”页面：
        3.添加到远程仓库
            1.创建仓库
            2.本地仓库上传到远程仓库
                git remote add origin https://github.com/Geekiwen/1902.git
                git push -u origin master
            3.上传远程仓库指令：
                git push
        4.readme.md文件
            markdown文件
                https://www.jianshu.com/p/191d1e21f7ed
        5.克隆命令
            git clone url
        6.团队协作
            1.组长创建项目
            2.项目中添加组员
            3.远程仓库
                git push   推送
                git pull   拉取
            4.冲突问题
