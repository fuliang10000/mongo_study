<?php
$m = new MongoClient(); // 连接默认主机和端口为：mongodb://localhost:27017
$db = $m->test; // 获取名称为 "test" 的数据库
$collection = $db->runoob1; // 选择集合
// 更新文档
$collection->update(array("title"=>"MongoDB1"), array('$set'=>array("title"=>"MongoDB 教程")));
// 显示更新后的文档
$cursor = $collection->find();
// 循环显示文档标题
foreach ($cursor as $document) {
    var_dump($document);
}