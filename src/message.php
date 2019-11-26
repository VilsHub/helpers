<?php
  namespace vilshub\helpers;
  /**
   *
   */
  use \Exception;
  class message
  {
    public static function write ($type, $msg){
      $typeLower = strtolower($type);
      $msgLower = strtolower($msg);
      try{
        if ($typeLower != "error" || $typeLower != "warning"){
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 1 must either be: 'error' or 'warning'";
          throw new Exception("<div style='border:solid red 1px; color:red; width:100%; height:auto ; background-color:#f0cfcf; padding:10px;'>".$iError."</div>");
        }elseif (!is_string($msg) || !is_number($msg)) {
          $iError = "<b style='color:#8a1313'>".__CLASS__."::".__FUNCTION__."()</b> static method argument 2 must be either a string or a number";
          throw new Exception("<div style='border:solid red 1px; color:red; width:100%; height:auto ; background-color:#f0cfcf; padding:10px;'>".$iError."</div>");
        }
      }catch(Exception $e){
        die($e->getMessage());
      }
      $fullMessage = "";
      if($typeLower == "error"){
        $fullMessage = "<div style='border:solid red 1px; color:red; width:100%; height:auto ; background-color:#f0cfcf; padding:10px;'>".$msg."</div>";
      }
      return $fullMessage;
    }

  }
?>
