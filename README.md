## ci 介绍

 访问数据库，发送邮件，验证表单数据，会话管理，处理图像， 处理 XML-RPC 数据

### CI 目录 结构分成三部分

   application

   system
   user_guide

### application 

    config  程序的配置信息,入数据库配置信息

### mvc 框架



#### c

Controller的名字必须以大写开头 2）调用controller必须用小写开头 3）不要使用和父类相同的方法名，否则会覆写掉父类方法

#### v

文件名字

$this->load->view('name');

#### m

 数据库配置文件

```php

<?php 
   Class Model_name extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
      } 
   } 
?> 
```

调用

```php
$this->load->model('model_name');
$this->model_name->method();
```

### 路由

控制器/方法名/参数

#### 模板引擎

```php
<ul>
<?php foreach ($addressbook as $name):?>
    <li><?=$name?></li>
<?php endforeach; ?>
</ul>
```

### 教程

- 加载静态内容
- 读取新闻条目
- 创建新闻条目











