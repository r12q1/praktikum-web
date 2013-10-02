<body>
<?php
$rows = 1;
$columns = 1;
$cells = 1;
?>

<?php $rows = (int) $_POST["RowsTotal"]; ?>
<?php $columns = (int) $_POST["ColumnsTotal"]; ?>
<?php $cells = (int) $_POST["CellsTotal"]; ?>

You pick <?php echo $rows; ?> rows,<br />
You pick <?php echo $columns; ?> columns,<br />
and you need <?php echo $cells; ?> cells,<br />
<br /><br />
<?php
$width = $columns * 75;
echo "<table width=".$width." border=1>";
$rw = 0;
$cel = 1;
while ($rw < $rows && $cel <= $cells)
{
echo "<tr>";
$cl = 0;
while ($cl < $columns)
{
if ($cel <= $cells)
{
echo "<td><div align=center>".$cel."</div></td>";
$cel++;
}
$cl++;
}
echo "</tr>";
$rw++;
}
echo "</table>";
?>
</body>