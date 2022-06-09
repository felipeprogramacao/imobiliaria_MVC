<?php
class Core{

    public function run(){
            $url= '/';
            if(isset($_GET['url'])){
                $url .=$_GET['url'];
            }


            $parans=array();
        if(!empty($url) && $url != '/'){
            $url =explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction =$url[0];
                array_shift($url);
                }else{
                    $currentAction= 'index';
                }
                if(count($url)>0){
                    $parans=$url;
                }
                
        }else{
            $currentController = 'homeController';
            $currentAction ='index';
        }
echo '<hr>';
        echo "CONTROLLER: ".$currentController."<br/>";
        echo "ACTION: ".$currentAction."<br/>";
        echo "Parâmetros: ".print_r($parans, true);
    }
}