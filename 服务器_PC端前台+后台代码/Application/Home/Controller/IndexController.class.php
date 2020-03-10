<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(IS_POST){
        	if(I("post.username")==""||I("post.password")==""){
        		$this->error("请输入帐号或者密码");
        	}
        	if(!$User_Data = M("user")->where("username = '".I("post.username")."'")->find()){
        		$this->error("没有找到该用户!");
        	}
        	if($User_Data["password"]!=md5(md5(I("post.password")))){
        		$this->error("密码错误!");
        	}else{
        		session("username",$User_Data["username"]);
        		$this->success("登录成功!",U("Home/index/user"));
        	}
        }else{
        	$this->display();
        }
    }
    public function user(){
    	if(IS_POST){
    		//dump(I("post."));
    		$User_Data = M("user")->where("username = '".I("post.username")."'")->join("borrow ON user.user_id = borrow.user_id")->order("borrow_time")->find();



    		if(!$User_Data){
    			$this->error("您没有借车记录!");
    		}
    		switch (I("post.cogs")) {
    			case '1':
    				$map["bike_lian"] = 0;
    				break;
    			case '2':
    				$map["bike_lock"]  = 0;
    				break;
    			case '3':
    				$map["bike_sha"] = 0;
    				break;
    			case '4':
    				$map["bike_deng"] = 0;
    				break;
    			case '5':
    				$map["bike_kuang"] = 0;
    				break;
    			case '6':
    				$map["bike_tai"] = 0;
    				break;
    		}
    		M("bike")->where("bike_id = '".I("post.bike_id")."'")->setField($map);
    		if($User_Data["is_anti"]==0){
    			$this->error("你的自行车处于禁停区域!15分钟后，将会有如下惩罚：骑乘费用翻倍，同时扣除信用值、列入骑行黑名单!");
    		}else{
    			$this->success("停车成功！建议您下次停放于电子围栏内可以享受8折优惠哦！");
    		}
    	}else{
    		if(!session("?username")){
	    		$this->error("请先登录!",U("Home/index/index"));
	    	}
	    	$Borrow_Data = M("borrow")->join("user ON user.user_id = borrow.user_id")->join("bike ON bike.bike_id = borrow.bike_id")->select();
	    	for ($i=0; $i < count($Borrow_Data); $i++) { 
	    		if(time()-$Borrow_Data[$i]["last_use_time"]>3600*24*7){
	    			$Borrow_Data[$i]["is_circle"] = "需要";
	    		}else{
	    			$Borrow_Data[$i]["is_circle"] = "不需要";
	    		}
	    		if($Borrow_Data[$i]["is_anti"]==0){
	    			$Borrow_Data[$i]["is_anti"] = "禁停区域内";
	    		}else{
	    			$Borrow_Data[$i]["is_anti"] = "其他区域内";
	    		}
	    	}
	   	//$Bike_Data = M("bike")->select();
			/* for ($i=0; $i < count($Bike_Data); $i++){
			 	if($Bike_Data[$i]["destroy"]==0){
			 		$Bike_Data[$i]["destroy"] = "没有";
			 	}else{
			 		$Bike_Data[$i]["destroy"] = "有";
			 	}
			 }
*/
	    	$User_Data = M("user")->where("username = '".session("username")."'")->join("borrow ON user.user_id = borrow.user_id")->find();
	    	$this->assign("now",time());
	    	//dump($User_Data);
	    	$this->assign("borrow",$Borrow_Data);
	    	$this->assign("list",$User_Data);
	    	$this->display();
    	}
    	
    }
}