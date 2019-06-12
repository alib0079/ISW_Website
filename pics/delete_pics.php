
$imagefolder=

$pics=directory($imagefolder,"jpg,JPG,JPEG,jpeg,png,PNG");
print_r($pics); 
$count=count($pics);
echo "$count";
for($i=0;$i<$count;$i++){
rmdir($imagefolder.$pics[$i]);
echo "original pictures was deleted";

}