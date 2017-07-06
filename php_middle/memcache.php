<?php
	class Cache_Memcache{
		protected $connected=false;
		protected $memcache=null;
		protected $pool=array(
			array('host'=>'localhost','port'=>'11211','weight'=>1),
			//Define other hosts here
			);

		public function __construct(){
			$this->connect();
		}

		public function isConnect(){
			return $this->connected;
		}

		protected function connect(){
			$this->connected=false;
			$this->memcache=new Memcache();
			foreach ($this->pool as $host){
				$this->memcache->addServer($host['host'],$host['port'],true,$host['weight']);
				$stats=$this->memcache->getExtendedStats();
				if($this->connected||($stats["{$host['host']}:{$host['port']}"]!==false&&sizeof($stats["{$host['host']}:{$host['port']}"])>0)){
					$this->connected=true;
				}
			}

			return $this->connected;
		}

		protected function addNamespace($partition=' '){
			if(!$this->connected){
				return false;
			}

			$ns_key=$this->memcache->get($partition);

			if($ns_key==false){
				$ns_key=rand(1,10000);
				$result=$this->memcache->set($partition,$ns_key,0,0);
			}

			$my_key=$partition. "_" . $ns_key. "_" . $key;

			return $my_key;
		}

		public function clearCache($partition=' '){
			if(!$this->connected){
				return false;
			}

			$this->memcache->increment($partition);
		}

		public function set($key,$value,$partition=' ',$expires=14400){
			define ('ONE_MB',1*1024*1024);
			if(!$this->connected){
				return false;
			}elseif(strlen($value)>=ONE_MB){
				$value=str_split($value,ONE_MB);
			}

			if($expires!==0){
				$expires+=time();
			}

			$ns_key=$this->addNameSpace($key,$partition);
			$this->memcache->set($ns_key.'_metadata',json_encode((object)array("modified"=>gmdate('D,d M Y H:i:s').'GMT','slabs'=>sizeof($value))),
				MEMCACHE_COMPRESSED,$empires);

			if(is_array($value)){
				foreach($value as $k=>$v){
					$this->memcache->set($ns_key."_".$k,$v,MEMCACHE_COMPRESSED,$empires);
				}
				return true;
			}

			return $this->memcache->set($ns_key,$value,MEMCACHE_COMPRESSED,$expires);
		}

		public function get($key,$partition=' '){
			if(!$this->connected){
				return false;
			}

			$ns_key=$this->addNameSpace($key,$partition)
			$meta=$this->memcache->get($ns_key. '_metadata');

			if($meta&&!empty($meta)&&!headers_sent()){
				$meta=json_encode($meta);
				header("X-Cache-Hit:1",false);
				if(isset($meta->modified)){
					header('Last-Modified:'.$meta->modified);
				}
			}elseif(!$meta&&!headers_sent()){
				header("X-Cache-Hit:0",false);
				return false;
			}

			$value=' ';
			if($meta&&isset($meta->slabs)&&$meta->slabs>1){
				for($i=0;$i<$meta->slabs;$i++){
					$value.=$this->memcache->get($ns_key."_".$i);
				}
			}else{
				$value=$this->memcache->get($ns_key);
			}
			return $value;
		}

		public function delete($key,$partition=' '){
			if(!$this->connected){
				return false;
			}

			return $this->memcache->delete($this->addNamespace($key,$partition));
		}
	}
?>