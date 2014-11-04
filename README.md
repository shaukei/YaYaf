Welcome to YaYaf!
===================


一个基于Yaf框架的基本框架，并且持续集成、整合各类优秀实用的类库。

----------


文档
-------------

基本目录结构

> **提示:**

> - 尽量不要改变目录结构。
> - 如果一定要改变，请记得相关配置也要相应修改。主要是入口文件和配置文件。
> - 框架使用Yaf，请确认PHP已安装Yaf扩展
> - 框架使用PHP 5.5及以上版本

<pre>
├─application			//项目代码
│  ├─bootstrap		//各模块自己的Bootstrap
│  ├─controllers		//控制器
│  ├─library				//库文件
│  │  ├─Functions	//公共功能函数
│  ├─modules			//模块
│  ├─models			//模型
│  ├─plugins			//插件类
│  └─views			    //视图模板
├─config				//配置文件
└─htdocs			//网站入口
</pre>

