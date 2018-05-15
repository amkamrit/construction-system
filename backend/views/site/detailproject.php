
<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;

            $id=$_GET['id'];
            $con=mysqli_connect("localhost","root","root","system-develop");
            $sql="SELECT * FROM   Projectregister WHERE Project_Id='$id'";
             $run_sql=mysqli_query($con, $sql);
             while ($row_project=mysqli_fetch_array($run_sql)) {
             
             $Project_Name=$row_project['Project_Name'];
             $Project_Beget=$row_project['Project_Beget'];
         }
         $Project_Ipc=0;
         $project_Ipc_Amount=0;

             $sql="SELECT * FROM   Runningprojectipc WHERE Project_Id='$id'";

             $run_sql=mysqli_query($con, $sql);
             while ($row_amount=mysqli_fetch_array($run_sql)) {
             
             $Project_Ipc=$row_amount['Project_Ipc'];
             $project_Ipc_Amount=$project_Ipc_Amount+$Project_Ipc;

         }

             ?>
             <table width="60%;" align="center" border="5px" style="margin-top: 100px; font-size: 25px;">
             	
             	<tr >
             		<td style="color: black; background-color: white; text-align-last: center; padding-top: 20px;">Name</td>
             		<td style="text-align-last: center;"><?php echo $Project_Name; ?></td>
             		
             	</tr>

             	<tr>
             		
             		<td style="color: black; background-color: white; text-align-last: center; padding-top: 20px;">Project Total Cost</td>
             		<td style="text-align-last: center;">Rs.<?php echo $Project_Beget; ?></td>
             		
             	</tr>

             	<tr>
             		
             		<td style="color: black; background-color: white; text-align-last: center; padding-top: 20px;">Project Toal IPC Amount</td>
             		<td style="text-align-last: center;">Rs.<?php echo $project_Ipc_Amount; ?></td>
             		
             	</tr>
             	<tr>
             		
             		<td style="color: black; background-color: white; text-align-last: center; padding-top: 20px;">Status</td>
             		<td style="text-align-last: center;"><?php if ($project_Ipc_Amount<$Project_Beget) {
             			echo 'In Process';
             		}
             		else{
             			echo 'Complet';
             		}
             		?></td>
             		
             	</tr>


             	<tr>
             		
             		<td style="color: black; background-color: white; text-align-last: center; padding-top: 20px;">Progress</td>
             		<td style="text-align-last: center;"><?php echo $Project_progress=($project_Ipc_Amount/$Project_Beget)*100; ?>%</td>
             	</tr>

             </table>
            