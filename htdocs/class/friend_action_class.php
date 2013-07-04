<?php
/*
 * Created on 2011-5-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//session_start();

 #GET THE USER'S IP
 if (!empty($_SERVER['HTTP_CLIENT_IP'])){

      $ip = $_SERVER['HTTP_CLIENT_IP'];

   }else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

   }else{

      $ip = $_SERVER['REMOTE_ADDR'];

 }

class  friend_action_add{
	private  $did;      //The unique ID of the table the action belongs to
	private  $classid;  //The class ID
	private  $upid;     //The top class ID
	private  $title;    //Action title
    private  $content;  //Action content
	private  $website;  //Friend's website
	private  $type;     //Action type
	private  $ip;       //Friend's IP
	private  $dateline; //The time
	private  $user;     //The user


    function  __construct($did,$classid,$upid,$title,$content,$website,$type,$ip,$dateline,$user){
    	$this->did=$did;
    	$this->classid=$classid;
    	$this->upid=$upid;
    	$this->title=$title;
    	$this->content=$content;
    	$this->website=$website;
    	$this->type=$type;
    	$this->ip=$ip;
	    $this->dateline=$dateline;
    	$this->user=$user;

    }


    #TO SEND OUR ACTION TO OUR FRIENDS
    function  action_send(){

       /* #SEND OUR ACTIONS  TO OUR FRIENDS
        $query="SELECT  website  FROM `friends` WHERE allow=1 AND  user=$_SESSION[user]";
    	$result=mysql_query($query);
    	while($row=mysql_fetch_array($result)){

            $website_send=$row['website'];
            $website_send=$website_send."/admin/";#需以后处理地方；
	        $url=$website_send.'index.php?display=friend_action&do=new_action&did='.$this->did.'&classid='.$this->classid.'&upid='.$this->upid.'&title='.urlencode($this->title).'&content='.urlencode($this->content).'&website='.$this->website.'&type='.$this->type.'&user='.$this->user;
	    	//echo $url;
            $return=file_get_contents($url);

    	}*/

        #INSERT MY ACTIONS  INTO "FRIENDS_ACTION" TABLE
        $query="INSERT INTO `".DB_PRE."friends_action` (`action_id`, `did`, `classid`, `upid`,`title`,`content`, `website`, `type`, `ip`, `dateline`, `user`) VALUES (NULL, '$this->did','$this->classid', '$this->upid','$this->title','$this->content','0', '$this->type', '$this->ip', '$this->dateline', '$this->user')";
        mysql_query($query);


    }


    #FRIENDS SEND THEIR ACTIONS TO US ,AND WE INSERT IT INTO OUR TABLE
    function  action_get(){

        //#INSERT OURFRIENDS  ACTIONS  INTO  OUR "FRIENDS_ACTION" TABLE
        //$query="INSERT INTO `".DB_PRE."friends_action` (`action_id`, `did`, `classid`, `upid`,`title`,`content`, `website`, `type`, `ip`, `dateline`, `user`) VALUES (NULL, '$this->did', '$this->classid', '$this->upid','$this->title','$this->content', '$this->website', '$this->type', '$this->ip', '$this->dateline', '$this->user')";
       //echo $query;
       // mysql_query($query);


    }





}

?>