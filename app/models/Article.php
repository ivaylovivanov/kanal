<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author Ivailo
 */
class Article extends Eloquent
{
   protected $primary_key = "article_id";
   
   protected $fillable = array("article_title_long","article_title_short","article_thumb","article_video_path","article_text","category_id","article_top","article_hot","article_fb","article_tweet");
}
