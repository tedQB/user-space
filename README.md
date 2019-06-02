# About

一个服务于缴费会员的信息管理后台，主要采用php框架codeigniter实现


# 说明

>  如果对您对此项目有兴趣，可以点 "Star" 支持一下 谢谢！

>  开发环境 : macOS 10.13.6  PHP 7.1.23  mysql 5.1.73 

>  部署环境 :

>  如有问题请直接在 Issues 中提，或者您发现问题并有非常好的解决方案，欢迎 PR 👍

>  相关项目地址：[http://kapaidashu.org/user/member/r/353429](http://kapaidashu.org/user/member/r/353429)


## 技术栈

php + codeigniter + mysql + seajs + aralejs + es5 + highcharts + muicss

## 预览
<img src='https://github.com/tedQB/user-space/blob/master/img/01.jpg?raw=true' width=200/><img src='https://github.com/tedQB/user-space/blob/master/img/02.jpg?raw=true' width=200 />


## 项目运行


```
git clone git@github.com:tedQB/user-space.git

mac 可使用 MAMP PRO 进行预览

```


## 目标功能

- [x] 会员非会员登陆验证 -- 完成
- [x] 基本数据可视化 --完成
- [x] 会员每日日志上报 -- 完成
- [x] 汇总会员上报的所有数据 -- 完成
- [x] APP导航热更新 -- 完成
- [x] 用户到期验证 -- 完成
- [x] 登录页 -- 完成
- [x] 会员到期页面 -- 完成
- [x] 非会员404页面 -- 完成
- [x] 会员主信息页面 -- 完成
- [x] 会员上报日记汇总页面 -- 完成
- [x] 通用顶部资源加载 -- 完成
- [x] 通用底部导航设计 -- 完成
- [x] 会员信息分级展示 -- 完成
- [x] 所有会员成绩排行榜单汇总 -- 完成
- [x] 兼容微信内置浏览器 -- 完成
- [x] app内webview 嵌入 -- 完成


## 待实现功能

- [ ] 数据JSONP化 
- [ ] 前端MVVM框架接入


## API接口文档

## 系统截图


## 项目布局

```
.
├── index.html
├── index.php
├── README.md
├── img
│   ├── a1.jpg
│   ├── .....
├── system
│   ├── ....
├── application
│   ├── add.php
│   ├── index.html
│   ├── core
│   │   └── index.html
│   ├── cache
│   │   └── index.html
│   ├── config
│   │   ├── database.php                数据库配置
│   │   ├── .....   
│   ├── libraries
│   │   └── index.html
│   ├── language
│   │   ├── ....
│   ├── models
│   │   ├── bang_model.php              用户信息相关模型
│   │   ├── index.html
│   │   ├── diary_model.php             用户提交日记相关模型
│   │   └── user_model.php              用户信息相关模型
│   ├── third_party
│   ├── logs
│   ├── hooks
│   ├── errors
│   ├── controllers                     
│   │   ├── login.php                   会员非会员登陆验证
│   │   ├── index.html
│   │   ├── member.php                  拉取基本会员信息
│   │   ├── home.php                    拉取会员详细信息
│   │   ├── huibao.php                  会员每日日志上报
│   │   ├── diary.php                   拉取会员上报的所有数据
│   │   ├── router.php                  APP导航热更新
│   │   ├── verify.php                  用户到期验证
│   │   └── welcome.php                 欢迎页
│   ├── views
│   │   ├── login.php                   登录页
│   │   ├── index.html
│   │   ├── allowed.php                 非会员404页面
│   │   ├── expire.php                  会员到期页面
│   │   ├── member.php                  会员主信息页面
│   │   ├── home.php                    会员highchart页面
│   │   ├── huibao.php                  会员上报日记页面
│   │   ├── test.php
│   │   ├── diary.php                   拉取会员上报日记汇总页面
│   │   ├── head.php                    通用顶部
│   │   ├── footer.php                  通用底部导航
│   │   └── welcome_message.php
│   └── helpers
│       └── index.html
├── license.txt



```

## License

[GPL](https://raw.githubusercontent.com/tedQB/user-manage/master/COPYING)
