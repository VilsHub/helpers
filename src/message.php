<?php
  namespace vilshub\Helpers;
  /**
   *
   */
  use \Exception;
  
  class Message
  {
    public static function write ($type, $msg){
      $typeLower = strtolower($type);
      $msgLower = strtolower($msg);
      $ErrorStyle = " style='box-sizing: border-box; border:solid red 1px; color:red; width:98%; height:auto; background-color:#f0cfcf; padding:10px; margin:10px auto'";
      try{
        if ($typeLower != "error" && $typeLower != "warning"){
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 1 must either be: 'error' or 'warning'";
          throw new Exception("<div{$ErrorStyle}>".$iError."</div>");
        }elseif (!is_string($msg) && !is_numeric($msg)) {
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 2 must be either a string or a number";
          throw new Exception("<div{$ErrorStyle}>".$iError."</div>");
        }
      }catch(Exception $e){
        trigger_error($e->getMessage());
      }
      $fullMessage = "";
      if($typeLower == "error"){
        // header("HTTP/1.0 500 Server error");
        $fullMessage = "<div{$ErrorStyle}>".$msg."</div>";
      }
      return $fullMessage;
    }

  }
?>
