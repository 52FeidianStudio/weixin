<?php
/*
 *  date:2015-12-2
 *  author:sunshine
 *  about:index controller
 */
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	 $this->display();
    }
    //验证码生成
    //
    public function verify_c(){
    	$config =    array(
		    'fontSize'    =>    30,    // 验证码字体大小
		    'length'      =>    4,     // 验证码位数
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
    }
    
    //验证码验证
	public function check_verify($code, $id = ''){
	$verify = new \Think\Verify();
	return $verify->check($code, $id);
	}
    //注册页面显示
    public function register(){
    	$this->display();
    }
   
    //登录页面显示
    public function login(){
    	$this->display();
    }

    //验证注册信息
    public function doregister(){
     	$email = $_POST['email'];
     	$password = $_POST['password'];
    	$repassword = $_POST['repassword'];
    	$name = $_POST['username'];
    	$code = $_POST['code'];
    	$data = array();
        $data['code'] = 1;
    	if($this->check_verify($code)){
    		$data['code'] = 1;
    		 	//验证昵称是否存在
	        $require['uname'] = $name;
	    	$existed = M('User')->where($require)->find();
	    	if($existed){
	    		$data['status'] = 0;
	    	}else{
	    		$where['uemail']=$email;
	    		$result = M('User')->where($where)->count();
	    		if($result){
	    			$data['status'] = 1;
	    		}else{
	    			$mess=array(
	    				'uemail' => $email,
	    				'upassword' => $password,
	    				'uname' => $name,
	    				'uregtime' => date("Y-m-d H:i:s",time())
	    			);
	    			$rst = M('User')->add($mess);
	    			if($rst){
	    				$data['status'] = 2;
	    			}else{
	    				$data['status'] = 3;
	    			}
	    		}
	    	}
    	}else{
            $data['code'] = 0;
    	}
   
        $this->ajaxReturn($data,'JSON');
     }

     //验证登录
     //
      public function dologin(){
        // dump($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $code = $_POST['code'];
        $data = array();
        if($this->check_verify($code)){
            $data['code'] = 1;
            $where['uemail'] = $email;
	        $rst = M('User')->where($where)->find();
	        if(empty($rst)){
	            $data['status'] = 0;
	        }else if($rst['upassword'] !== $password){
	            $data['status'] = 1;
	        }else{
	            session('email',$email);
	            session('name',$rst['uname']);
	            session('img',$rst['uimage']);
	            $data['status'] = 2;
	        }
        }else{
        	$data['code'] = 0;
        }
      
        $this->ajaxReturn($data,'JSON'); 
     }


     public function index1(){
          $this->display();
     }
}