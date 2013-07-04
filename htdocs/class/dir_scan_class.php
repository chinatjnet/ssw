$path = '../function';

function getfiles($path)
{
      if(!is_dir($path)) return;
      $handle  = opendir($path);
      while( false !== ($file = readdir($handle)))
      {
          if($file != '.'&& $file!='..')
          {
              $path2= $path.'/'.$file;
              if(is_dir($path2))
              {
                  echo '  ';
                  echo $file;
                  getfiles($path2);

              }else
             {
                 echo '  ';
                  echo $file;
              }
          }
      }
  }

   print_r( getfiles($path));
   echo '  <HR>';



   function getdir($path)
  {
      if(!is_dir($path)) return;
      $handle = dir($path);
      while($file=$handle->read())
      {
          if($file!='.' && $file!='..')
          {
              $path2 = $path.'/'.$file;
              if(is_dir($path2))
              {
                  echo $file."\t";
                  getdir($path2);
              }else
             {
                  echo $file.'  ';
              }
          }
      }
  }
   getdir($path);
   echo '  <HR>';




    function get_dir_scandir($path){

      $tree = array();

      foreach(scandir($path) as $single){

          if($single!='.' &&$single!='..')
          {
              $path2 = $path.'/'.$single;

              if(is_dir($path2))
              {
                  echo  $single."  \r\n";
                   get_dir_scandir($path2);

              }else
             {
                  echo $single."  \r\n";
              }
          }
      }
  }


  get_dir_scandir($path);
  echo '  <HR>';


   function get_dir_glob(){
      $tree = array();
      foreach(glob('./curl/*') as $single){
          echo $single."  \r\n";
      }
  }

  get_dir_glob();
  echo '  <HR>';


  function myscandir($path)
  {
      if(!is_dir($path))  return;
      foreach(scandir($path) as $file)
      {
          if($file!='.'  && $file!='..')
          {
              $path2= $path.'/'.$file;
              if(is_dir($path2))
              {
                  echo $file;
                  myscandir($path2);

              }else
             {
                  echo $file.'  ';
              }
          }
      }
  }


   myscandir($path);
   echo '  <HR>';



   function myglob($path)
  {
      $path_pattern = $path.'/*';
      foreach(glob($path_pattern) as $file)
      {
              if(is_dir($file))
              {
                  echo $file;
                  myscandir($file);

              }else
             {
                  echo $file.'  ';
              }
      }
  }

   myglob($path);