<html>
<head>
<title>Generate Tabel</title>
</head>
<body>
<h3 align="center" class="style1">GENERATE TABEL</h3>
<div align="center">
  <?php
$rows = 1;
$columns = 1;
$cells = 1;
?>
  <?php $rows = 3; ?>
  <?php $columns = 5; ?> 
  <?php $cells = 15; ?>
  <?php
    echo "<table width=300 height=300 border=1>";
    $baris = 0;
    $sel = 1;
    while ($sel <= $cells)
    {
        while ($baris < $rows) 
        {
            echo "<tr>";
            $kolom = 0;
            while ($kolom < $columns) 
            {
                if ($sel <= $cells) 
                    {
                        echo "<td><div align=center>".$sel."</div></td>";
                        $sel++;
                    }
                $kolom++;
            }
        echo "</tr>";
        $baris++;
        }
    }
    echo "</table>";
?>
</div>
</body>
</html>