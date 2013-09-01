blog
====

博客
安装：
1、自动安装环境，sudo apt-get install wordpress
2、手动下载安装包，wget http://wordpress.org/latest.tar.gz
3、解压安装包，tar -xzvf latest.tar.gz
4、重命名，mv wordpress blog
5、配置：
    a、访问：localhost/blog
    b、使用独立数据库名：blog，需要手动创建新的数据库：create database blog
    c、数据表前缀：blog_
