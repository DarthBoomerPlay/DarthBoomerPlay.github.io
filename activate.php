
$json = '{ 
    "success": true, 
    "message": "Ключ был успешно активирован!"
}'; 
  
$data = json_decode($json); 
  
echo $data->title; 
echo "\n"; 
  
echo $data->site; 
