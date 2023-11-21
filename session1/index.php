<?php
require_once('./functions.php');
require_once('./MySQLDB.php');
$db = new MySQLDB();
$lessons = $db->select('lessons');
$profs = $db->select('profs');
$number_of_hours = 4; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>اولین درس برنامه نویسی وب</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <style>
            .lesson{
                cursor:pointer;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </head>
    <?php
    require('./relations.php');
    ?>
    <body dir="rtl">
        <h1>برنامه ترم اول سال تحصیلی 401-402 مهندسی نرم افزار</h1>
        <div class="row col-md-6 col-sm-12" style="margin-right:auto;margin-left:auto;">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>#</th>
                    <th>8-10</th>
                    <th>10-12</th>
                    <th>13:30-15:30</th>
                    <th>15:30-17:30</th>
                </thead>
                <?php
                $week_days = [
                    'شنبه',
                    'یکشنبه',
                    'دوشنبه',
                    'سه شنبه',
                    'چهارشنبه',
                ] 
                ?>
                <tbody>
                <?php for($cnt=0;$cnt<5;$cnt++){ ?>
                    <tr>
                        <td><?php echo($week_days[$cnt]) ?></td>
                        <?php for($tcount = 0; $tcount<$number_of_hours;$tcount++) {
                            $k = $cnt*$number_of_hours+$tcount;
                            $cell =  get_lessons_in_this_time($profs_lessons, $lessons, $profs ,$k);
                            ?>
                            <?php if($cell) {?>
                                <td class="lesson"><?php print $cell ?></td>
                                <?php }else{ ?>
                                <td><?php print $cell ?></td>
                                <?php } ?>
                        <?php  } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $('.lesson').on('click',function(){
                var text = $(this).html();
                alert(text);
            })
        })
    </script>
</html>