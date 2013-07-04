<?php
/*
 * Created on 2011-5-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//session_start();
 global $page,$classid,$id,$upid,$site_title;
 $page=$_GET['page'];
 if(!$page) $page=1;
 $classid=$_GET['classid'];
 $id=$_GET['id'];
 $upid=(isset($_GET['upid']))?(int)$_GET['upid']:"0";

 #GET THE USER'S IP
 if (!empty($_SERVER['HTTP_CLIENT_IP'])){

      $ip = $_SERVER['HTTP_CLIENT_IP'];

   }else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

   }else{

      $ip = $_SERVER['REMOTE_ADDR'];

 }



class  front_temp{

	private  $show_id;      //The UPID of the class we visit now
	private  $type;         //The label type
	private  $user;         //The user
    public   $assign_arr;   //The label arr



    function  __construct($show_did,$type,$user){

    	$this->show_did=$show_did;
    	$this->type=$type;
		$this->user=$user;
		$this->assign_arr=Array();
        $this->label_list();

    }


	function label_list(){

	    #GET THE CONTENT OF THE TYPE 'ARTICLE'
	    function article($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

            $c_condition=($label_classid!="-1")?"AND classid='".$label_classid."'":"";
			$c_assign_str=($label_classid!="-1")?"_".$label_classid:"";

			//Get the label page template
            $query="SELECT temp FROM `".DB_PRE."class` WHERE classid='$label_upid'  AND user='$_SESSION[user]' ORDER BY  c_order";
            $template=mysql_fetch_array(mysql_query($query));
			$template=$template['temp'];
		    $display=explode(".",$template);

            //Get article content
			switch($label){

	        case  "unit":
                //The class list
			    $query="SELECT * FROM `".DB_PRE."class` WHERE upid='$label_upid'  AND user='$_SESSION[user]'  ORDER BY  c_order";
				//echo $query;
                $result=mysql_query($query);
			    $unit_str="";
				$i=1;
			    while($row=mysql_fetch_array($result)){

                     $classname=$row['classname'];
				     $classid=$row['classid'];
				     $upid=$row['upid'];
				     $href="index.php?display=".$display[0]."&upid=".$label_upid."&classid=".$row['classid']."&type=list";
					 $arr_pre=Array('$classname','$href','$i');
					 $arr_after=Array($classname,$href,$i);
                     $unit_str.=str_replace($arr_pre,$arr_after,$style);
				$i++;

			    }
			    $assign_str=$label_belong."_".$label_upid."_unit";
			    $assign_arr=Array($assign_str,$unit_str);
                return $assign_arr;

		    break;

		    case  "imgtext":

                //the img article
			    $query="SELECT * FROM `".DB_PRE."articles_image` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]' ORDER BY dateline DESC LIMIT $num";
                $result=mysql_query($query);
			    $unit_str="";
				$i=1;
			    while($row=mysql_fetch_array($result)){

					 $img_src=$row['path'];

                      //get imgtext title
					 $query1="SELECT title,dateline,viewnum,c_num,origin FROM `".DB_PRE."articles`  WHERE aid='$row[aid]'  AND user='$_SESSION[user]'  LIMIT 1";
                     $result1=mysql_query($query1);
					 while($row1=mysql_fetch_array($result1)){

					    $title=mb_substr($row1['title'],0,$tlength,'utf-8');
						$time=date('m-d H:i',$row1['dateline']);
					    $viewnum=$row1['viewnum'];
					    $cnum=$row1['c_num'];
					    $origin=($row1['origin']=="1")?"Web":"Mobile";

					 }

                     //get imgtext content
                     if($clength>0){

					     $query2="SELECT message FROM `".DB_PRE."articles_content`  WHERE mid='$row[aid]'  AND user='$_SESSION[user]'  LIMIT 1";
                         $content=mysql_fetch_array(mysql_query($query2));
					     $content=mb_substr(html2text($content['message']),0,$clength,'utf-8');

					 }else{

					    $content="";

					 }

					 $classid=$row['classid'];
				     $upid=$row['upid'];
				     $href="index.php?display=".$display[0]."&upid=".$label_upid."&classid=".$row['classid']."&id=".$row['aid']."&type=view";
					 $arr_pre=Array('$title','$content','$href','$time','$viewnum','$cnum','$origin','$img_src','$i');
					 $arr_after=Array($title,$content,$href,$time,$viewnum,$cnum,$origin,$img_src,$i);
                     $unit_str.=str_replace($arr_pre,$arr_after,$style);
				$i++;
			    }

				$assign_str=$label_belong."_".$label_upid.$c_assign_str."_imgtext";
			    $assign_arr=Array($assign_str,$unit_str);
                return $assign_arr;

            break;

			case   "list":

                include_once("class/page.class.php");

				//Get the article list
				global $page,$firstcount,$pagenav,$_SERVER,$classid,$upid;
				$c_condition=($classid AND $label_upid==$upid)?"AND classid='".$classid."'":"";

                $total=mysql_num_rows(mysql_query("SELECT aid FROM `".DB_PRE."articles` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]'"));
                $psize=$num;
                $pageSize=$psize;
                pageft($total,$pageSize,1,1,1,5);

				$offset=$pageSize*($page-1);

			    $query="SELECT * FROM `".DB_PRE."articles` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]' ORDER BY dateline DESC  LIMIT $offset,$pageSize";
				$result=mysql_query($query);
			    $unit_str="";
				$i=1;
			    while($row=mysql_fetch_array($result)){

				    $title=mb_substr($row['title'],0,$tlength,'utf-8');
                    $time=date("m-d H:i",$row['dateline']);
					$viewnum=$row['viewnum'];
					$cnum=$row['c_num'];
					$origin=($row['origin']=="1")?"Web":"Mobile";
					//To check whether we should get the content of the article
					if($clength>0){

					   $query2="SELECT message FROM `".DB_PRE."articles_content`  WHERE mid='$row[aid]'  AND user='$_SESSION[user]'  LIMIT 1";
                       $content=mysql_fetch_array(mysql_query($query2));
					   $content=mb_substr(html2text($content['message']),0,$clength,'utf-8');

					}else{

					   $content="";
					}

				    $href="index.php?display=".$display[0]."&upid=".$label_upid."&classid=".$row['classid']."&id=".$row['aid']."&type=view";
					$arr_pre=Array('$title','$content','$href','$time','$viewnum','$cnum','$origin','$i');
					$arr_after=Array($title,$content,$href,$time,$viewnum,$cnum,$origin,$i);
                    $unit_str.=str_replace($arr_pre,$arr_after,$style);
				$i++;

				}
				$assign_str=$label_belong."_".$label_upid.$c_assign_str."_list";
				$assign_str_page=$label_belong."_".$label_upid.$c_assign_str."_list_page";
			    $assign_arr=Array($assign_str,$unit_str,$assign_str_page,$pagenav);
                return $assign_arr;

			break;

			case  "pageview":

                global $classid,$id,$site_title;
				//echo $site_title;

			    $query="SELECT * FROM `".DB_PRE."articles` WHERE aid='$id' AND user='$_SESSION[user]' LIMIT 1";
				$result=mysql_query($query);
			    $unit_str="";
			    while($row=mysql_fetch_array($result)){

				    $title=$row['title'];
					$time=date('Y-m-d H:i:s',$row['dateline']);
					$viewnum=$row['viewnum'];
				    $cnum=$row['cnum'];
				    $updatetime=$row['updatetime'];
				    $belong=$row['updatetime'];
					$origin=($row['origin']=="1")?"Web":"Mobile";

					//To get the content of the article
			  	    $query2="SELECT message FROM `".DB_PRE."articles_content`  WHERE mid='$row[aid]'  AND user='$_SESSION[user]'  LIMIT 1";
                    $content=mysql_fetch_array(mysql_query($query2));
					$content=$content['message'];

				}
                $element_arr=Array("title","time","viewnum","cnum","updatetime","belong","content","origin");
                for($j=0;$j<count($element_arr);$j++){

                    ${'assign_'.$element_arr[$j]}=$label_belong."_".$label_upid."_".$element_arr[$j];

                }
			    $site_title=$title." - ".$site_title;
			    $assign_arr=Array(
					$assign_title,$title,
					$assign_time,$time,
					$assign_viewnum,$viewnum,
					$assign_cnum,$cnum,
					$assign_updatetime,$updatetime,
					$assign_belong,$belong,
					$assign_content,$content,
					"site_title",$site_title,
					$assign_origin,$origin

					);
                return $assign_arr;

            break;

			default:

                $c_condition=($label_classid!="-1")?"AND classid='".$label_classid."'":"";
                //The content
			    $condition_arr=array(

                     "unit"=>"",
                     "latest"=>"dateline",
					 "mview"=>"viewnum",
                     "mcomment"=>"c_num",
					 "random"=>"viewnum",

                );

				//To check if it is random article
				if($label=="random"){

				     $total=mysql_num_rows(mysql_query("SELECT aid FROM `".DB_PRE."articles` WHERE upid='$label_upid' $c_condition  AND user='$_SESSION[user]'"));
				     $start_num = rand(0,$total-$num);
			         $query="SELECT * FROM `".DB_PRE."articles` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]'  LIMIT $start_num,$num";

				}else{

				     $query="SELECT * FROM `".DB_PRE."articles` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]' ORDER BY $condition_arr[$label] DESC LIMIT $num";

				}
                $result=mysql_query($query);
			    $unit_str="";

				//Get the article's title and content
				$i=1;
			    while($row=mysql_fetch_array($result)){

				    $title=mb_substr($row['title'],0,$tlength,'utf-8');
                    $time=date("m-d H:i",$row['dateline']);
					$viewnum=$row['viewnum'];
					$cnum=$row['c_num'];
					$origin=($row['origin']=="1")?"Web":"Mobile";
					//To check whether we should get the content of the article
					if($clength>0){

					   $query2="SELECT message FROM `".DB_PRE."articles_content`  WHERE mid='$row[aid]'  AND user='$_SESSION[user]'  LIMIT 1";
                       $content=mysql_fetch_array(mysql_query($query2));
					   $content=mb_substr(html2text($content['message']),0,$clength,'utf-8');

					}else{

					   $content="";

					}
				    $href="index.php?display=".$display[0]."&upid=".$label_upid."&classid=".$row['classid']."&id=".$row['aid']."&type=view";
					$arr_pre=Array('$title','$content','$href','$time','$viewnum','$cnum','$origin','$i');
					$arr_after=Array($title,$content,$href,$time,$viewnum,$cnum,$origin,$i);
                    $unit_str.=str_replace($arr_pre,$arr_after,$style);
                 $i++;

				}


			    $assign_str=$label_belong."_".$label_upid.$c_assign_str."_".$label;

			    $assign_arr=Array($assign_str,$unit_str);
                return $assign_arr;

				break;

			}




	    }


	    #GET THE SELF INFO
	    function self_info($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

            $select_basic_info="nickname,truename,sex,birthday,birthplace,nowplace,lovestate,bloodtype,uniqsign,selfintro,ownpage";
			$select_contact_info="phone,mobile,qq,msn,email";
			$select_edu_info="edu_bg,prischool,midschool,university,academy,profession,company,position,income ";
			$select_hobby_info="idol,music,movie,book,sport,other_hobby ";

			$query="SELECT ".${'select_'.$label}."  FROM `".DB_PRE."self_info` WHERE  user='$_SESSION[user]' ";
		    $result=mysql_query($query);
			$assign_arr=Array();
			while($row=mysql_fetch_array($result)){

			    $select_arr=explode(",",${'select_'.$label});
			    for($i=0;$i<count($select_arr);$i++){

                      $assign_arr[$i*2]="s_".$select_arr[$i];
					  $assign_str=explode("`",$row[$select_arr[$i]]);
					  $assign_arr[$i*2+1]=$assign_str[0];

                }

			}

            return $assign_arr;

	    }





	    #GET THE EMOTION
	    function emotion($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

            if($label=="list"){

                include_once("class/page.class.php");

				//Get the emotion list
				global $page,$firstcount,$pagenav,$_SERVER,$classid,$upid;

                $total=mysql_num_rows(mysql_query("SELECT eid FROM `".DB_PRE."emotions` WHERE user='$_SESSION[user]'"));
			    $total=($label_belong=="guestbook")?mysql_num_rows(mysql_query("SELECT guestid FROM `".DB_PRE."guestbook` WHERE user='$_SESSION[user]'")):$total;

                $psize=$num;
                $pageSize=$psize;
                pageft($total,$pageSize,1,1,1,5);
				$offset=$pageSize*($page-1);

                $query_table=($label_belong=="guestbook")?"guestbook":"emotions";
			    $query="SELECT * FROM `".DB_PRE."$query_table` WHERE  user='$_SESSION[user]' ORDER BY dateline DESC  LIMIT $offset,$pageSize";

			}else{

                $query_table=($label_belong=="guestbook")?"guestbook":"emotions";
			    $query="SELECT * FROM `".DB_PRE."$query_table`  WHERE  user='$_SESSION[user]' ORDER BY dateline DESC LIMIT $num";

			}

		    $result=mysql_query($query);
		    $unit_str="";
			$i=1;
			while($row=mysql_fetch_array($result)){

					$message=($label_belong=="guestbook")?$row['message']:preg_replace("/(\[\:)([a-z]*)(\])/",'<img src=admin/themes/default/images/smiley/$2.gif>',unhtml($row['message']));
                    $content=mb_substr($message,0,$clength,'utf-8');
					$time=date("m-d H:i",$row['dateline']);
					$cnum=$row['c_num'];
					$origin=($row['origin']=="1")?"Web":"Mobile";
					$ip=$row['ip'];
			        $arr_pre=Array('$content','$time','$cnum','$origin','$ip','$i');
				    $arr_after=Array($content,$time,$cnum,$origin,$ip,$i);
                    $unit_str.=str_replace($arr_pre,$arr_after,$style);
			$i++;

		    }

			$assign_str=$label_belong."_".$label;

			if($label=="list"){

			    $assign_str_page=$label_belong."_list_page";
			    $assign_arr=Array($assign_str,$unit_str,$assign_str_page,$pagenav);

			}else{

			    $assign_arr=Array($assign_str,$unit_str);

			}

            return $assign_arr;



	    }




	    #GET THE GUESTBOOK
	    function guestbook($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

				$assign_arr=emotion($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength);
				return $assign_arr;

		}



	    #GET THE COLLECT
	    function collect($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){


            //Get the table we should query;
			$table_arr=array(

                     "collect"=>"collects",
					 "music"=>"musics",
                     "resource"=>"resources",
					 "album"=>"photos",

             );

			$select_table=$table_arr[$label_belong];


            $c_condition=($label_classid!="-1")?"AND classid='".$label_classid."'":"";
			$c_assign_str=($label_classid!="-1")?"_".$label_classid:"";

			//Get the label page template
            $query="SELECT temp FROM `".DB_PRE."class` WHERE classid='$label_upid'  AND user='$_SESSION[user]' ORDER BY c_order DESC LIMIT 0, 1000";
            $template=mysql_fetch_array(mysql_query($query));
			$template=$template['temp'];
		    $display=explode(".",$template);

         switch($label){
	        case  "unit":
                //The class list
			    $query="SELECT * FROM `".DB_PRE."class` WHERE upid='$label_upid'  AND user='$_SESSION[user]' ORDER BY c_order ASC LIMIT 0, 1000";
                $result=mysql_query($query);
			    $unit_str="";
			    while($row=mysql_fetch_array($result)){

                     $classname=$row['classname'];
				     $classid=$row['classid'];
				     $upid=$row['upid'];
				     $href="index.php?display=".$display[0]."&upid=".$label_upid."&classid=".$row['classid']."&type=list";
					 $arr_pre=Array('$classname','$href');
					 $arr_after=Array($classname,$href);
                     $unit_str.=str_replace($arr_pre,$arr_after,$style);

			    }
			    $assign_str=$label_belong."_".$label_upid."_unit";
			    $assign_arr=Array($assign_str,$unit_str);
				//print_r($assign_arr);
                return $assign_arr;

		    break;

			default :

                if($label=="list"){
                    include_once("class/page.class.php");
				}

				//Get the article list
				global $page,$firstcount,$pagenav,$_SERVER,$classid,$upid;

				$c_condition=($classid AND $label_upid==$upid)?"AND classid='".$classid."'":"";

                if($label=="list"){

                    $total=mysql_num_rows(mysql_query("SELECT * FROM `".DB_PRE."$select_table` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]'"));
                    $psize=$num;
                    $pageSize=$psize;
					$offset=$pageSize*($page-1);
                    pageft($total,$pageSize,1,1,1,5);

			        $query="SELECT * FROM `".DB_PRE."$select_table` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]' ORDER BY dateline DESC  LIMIT $offset,$pageSize";

				}elseif($label=="random"){

				    $total=mysql_num_rows(mysql_query("SELECT * FROM `".DB_PRE."$select_table` WHERE upid='$label_upid' $c_condition  AND user='$_SESSION[user]'"));
				    $start_num = rand(0,$total-$num);
			        $c_condition=($label_classid!="-1")?"AND classid='".$label_classid."'":"";
				    $query="SELECT * FROM `".DB_PRE."$select_table` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]'  LIMIT $start_num,$num";

				}else{
                    $c_condition=($label_classid!="-1")?"AND classid='".$label_classid."'":"";
				    $query="SELECT * FROM `".DB_PRE."$select_table` WHERE upid='$label_upid'  $c_condition  AND user='$_SESSION[user]' ORDER BY dateline DESC LIMIT $num";

				}

				$result=mysql_query($query);
			    $unit_str="";
				$i=1;
			    while($row=mysql_fetch_array($result)){

				    $title=mb_substr($row['name'],0,$tlength,'utf-8');
					$content=mb_substr($row['description'],0,$clength,'utf-8');
					$time=date("m-d H:i",$row['dateline']);
					$singer="";
					$lyric="";
					$rank="";
					$notlove="";
					$samelove="";
					$player_href="";

				    if($label_belong=="collect"){
						$href=$row['url'];
					}elseif($label_belong=="music"){

                         if(is_int(strpos($row['path'],"http:"))){  //to  ensure  the  file  are  local  file
          	                  $path=$row['path'];
          	             }else{
						      $path=SITE_ROOT."/".$row['path'];
                         }
					     $href=$path;
						 $singer=$row['singer'];
					     $lyric=$row['lyric'];
					     $rank=$row['rank'];
					     $notlove=$row['notlove'];
					     $samelove=$row['samelove'];
						 $player_href=SITE_ROOT."/admin/function/player/player.php?do=play&mid=".$row['music_id'];

					}elseif($label_belong=="resource"){
					    $href=SITE_ROOT."/admin/function/file_down.php?path=".base64_encode($row['path']);
					}elseif($label_belong=="album"){

						$title=mb_substr($row['title'],0,$tlength,'utf-8');
					    $content=mb_substr($row['title'],0,$clength,'utf-8');
						$thumb_path=SITE_ROOT."/admin/function/image_thumb.php?path=".SITE_ROOT."/$row[path]";
						$src=$thumb_path;
					    $href=SITE_ROOT."/".$row['path'];

					}else{

					}

				    //
					$arr_pre=Array('$title','$content','$href','$player_href','$src','$time','$singer','$lyric','$rank','$notlove','$samelove','$i');
					$arr_after=Array($title,$content,$href,$player_href,$src,$time,$singer,$lyric,$rank,$notlove,$samelove,$i);
                    $unit_str.=str_replace($arr_pre,$arr_after,$style);
                $i++;

				}

				$assign_str=$label_belong."_".$label_upid.$c_assign_str."_".$label;

				if($label=="list"){
				    $assign_str_page=$label_belong."_".$label_upid.$c_assign_str."_list_page";
			        $assign_arr=Array($assign_str,$unit_str,$assign_str_page,$pagenav);
				}else{
				    $assign_arr=Array($assign_str,$unit_str);
				}

                return $assign_arr;


            break;

		 }


		}

	    #GET THE MUSIC
	    function music($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

				$assign_arr=collect($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength);
				//print_r($assign_arr);
				return $assign_arr;


		}

	    #GET THE RESOURCE
	    function resource($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

				$assign_arr=collect($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength);
				//print_r($assign_arr);
				return $assign_arr;


		}


	    #GET THE ALBUM
	    function album($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength){

				$assign_arr=collect($label_belong,$label_upid,$label_classid,$label,$style,$num,$tlength,$clength);
				//print_r($assign_arr);
				return $assign_arr;


		}


        #GET THE LBALE LIST
	    $query="SELECT * FROM `".DB_PRE."label` WHERE show_id='$this->show_did' AND type='$this->type' AND  label!='imgtext_page'  AND label!='comment' AND user='$this->user'  LIMIT 0, 1000";
		//echo $query;
	    $result=mysql_query($query);
		$i=0;
	    while($row=mysql_fetch_array($result)){

		   $call_function=$row['belong'];
		   $return_str=$call_function($row['belong'],$row['upid'],$row['classid'],$row['label'],$row['style'],$row['num'],$row['tlength'],$row['clength']);
         //  print_r($return_str);
		   $this->assign_arr[$i]=$return_str;
	       $i++;

	    }
        return $this->assign_arr;
        unset($this->assign_arr);


	}







}