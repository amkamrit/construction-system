<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<?php foreach ($projectname as $Projectregister):?>
 
<?php $id=$Projectregister->Project_Id ?>

<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Project Name</th>
    <th>Project Beget</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>
    	<?= Html::encode("{$Projectregister->Project_Name}") ?></td>
    
    <td><?php $dr=$Projectregister->Project_Beget?>
    	<?= Html::encode("{$Projectregister->Project_Beget}") ?></td>

    <td>
      <a href="<?php echo Yii::$app->request->baseUrl.'/index.php?r=site/detailproject&id='.$id?>"><h4>More..</h4></a></td>
  </tr>
 
</table>               


<?php endforeach; ?>

</body>
</html>
