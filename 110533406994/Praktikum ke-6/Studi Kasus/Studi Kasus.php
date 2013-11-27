<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
        <head>
                <title>Studi Kasus</title>
        </head>
        <body>
                <h2>Studi Kasus</h2>
                <h3>Ahmad Rizqiyani Prihatmoko</h3>
                <form method="post" action="" name="frm_select">
                        Tampilkan
                        <select name="row_page" onChange="document.forms.frm_select.submit();">
                                <option>-- PILIH --</option>
                                                                <option value="3"
                                <?php
                                        if(isset($_POST['row_page']) && $_POST['row_page']==3){
                                                echo 'selected="selected"';
                                        }
                                ?>
                                >3</option>
                                <option value="5"
                                <?php
                                        if(isset($_POST['row_page']) && $_POST['row_page']==5){
                                                echo 'selected="selected"';
                                        }
                                ?>
                                >5</option>
                                                                <option value="8"
                                <?php
                                        if(isset($_POST['row_page']) && $_POST['row_page']==8){
                                                echo 'selected="selected"';
                                        }
                                ?>
                                >8</option>
                                <option value="10"
                                <?php
                                        if(isset($_POST['row_page']) && $_POST['row_page']==10){        
                                                echo 'selected="selected"';
                                        }
                                ?>
                                >10</option>
                        </select> Baris per Halaman.
                </form>
                <?php
                        if(isset($_POST['row_page']) && $_POST['row_page']){
                                require_once "./Koneksi.php";
                          
                                $sql = 'SELECT * FROM mahasiswa';
                                $page = isset($_GET['page']) ? $_GET['page'] : 0;

                                $link_num = 5;
                                
                                $record_num = $_POST['row_page'];

                                $offset = $page ? ($page-1) * $record_num :0;
                
                                $total_rows = mysql_num_rows(mysql_query($sql));
                                $query = $sql.' LIMIT '.$offset.', '.$record_num;
                                $result = mysql_query($query);
                                $max_page = ceil($total_rows/$record_num);

                                if($page > $max_page || $page <= 0){
                                        $page = 1;
                                }

                                $paging = '';
                                if($max_page > 1){
                                        
                                        if($page > 1){
                                                $paging .= ' <a href="'.@$self.'?page='.($page-1).'">previous</a>';
                                        }else{
                                                $paging .= ' previous ';
                                        }

                                        for ($counter = 1;$counter <= $max_page; $counter += $link_num){
                                                if($page >= $counter){
                                                        $start = $counter;
                                                }
                                        }
                                        if($max_page > $link_num){
                                                $end = $start + $link_num;
                                                if($end > $max_page){
                                                        $end = $max_page + 1;
                                                }
                                        }else{
                                                $end = $max_page;
                                        }
                                        for($counter = $start;$counter < $end; $counter++){
                                                if($counter == $page){
                                                        $paging .= $counter;
                                                }else{
                                                        $paging .= ' <a href="'.@$self.'?page='.$counter.'">' .$counter.'</a> ';
                                                }
                                        }
                                        if($page < $max_page){
                                                $paging .= ' <a href="'.@$self.'?page='.($page+1).'">next</a> ';
                                        }else{
                                                $paging .= ' next ';
                                        }
                                }
                        }
                ?>
                <table border="1" cellspacing="1" cellpadding="5">
                        <tr>
                                <th>No</th>
                                <th width="100">NIM</th>
                                <th width="150">Nama</th>
                                <th>Alamat</th>
                        </tr>
                        <?php
                        $i=1;
                        if(@$result){
                                while($row=mysql_fetch_row($result)){?>
                                        <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row[0];?></td>
                                                <td><?php echo $row[1];?></td>
                                                <td><?php echo $row[2];?></td>
                                        </tr>
                                        <?php
                                        $i++;        
                                }
                        }
                        ?>
                </table>
                <?php
                    echo @$paging;
                ?>
        </body>
</html>