<?php

/**
 *
 */
class Response
{

  public static function toJson($val)
  {
    echo json_encode($val);
  }
}
