<?php 

// Get the contents of the JSON file 
// Convert to array 
$data = file_get_contents(dirname(__DIR__).'/data/bache.json',true);
$array = json_decode($data, true);

//Image for page
$image = $array[13]['image'];

?>

<div class="panzoom-even">
    <div class="cut-seam-even">
        <img class="fixed-height"src=<?php echo $image?> usemap="#page-14" />
    </div>
</div>
        
<map name="page-14">
    <?php for ($i = 0; $i < count($array[13]["silhouettes"]); $i++): ?>
    <?php $id = 140 + $i?>
            <area shape="rect" class="tooltipLink" coords=<?php echo $array[13]["silhouettes"][$i]["coordinates"]?> data-coords=<?php echo $array[13]["silhouettes"][$i]["coordinates"]?> data-id=<?php echo $id ?> data-tooltip="<?php print $array[4]["silhouettes"][$i]["url"] ?>">
    <?php endfor; ?>
</map>