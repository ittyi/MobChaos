<?php
require_once './Dao/getPostedInfoDao.class.php';
require_once dirname(__FILE__) . '/ContentItem.class.php';
require_once dirname(__FILE__) . '/Content.class.php';
?>
<?php

/**
 * DBからデータを受け取り、木のインスタンスを生成する
 */
class PrintContent {
    
    private $root_entry;

    /**
     * 初期表示時
     * */
    public function __construct(){
        $this->root_entry = new Content("001","ルートコンテンツ", "root");
    }

    //新しい親投稿を作成
    public function addParentsPostContent($posted_id, $contents, $children_id){
        $contents = new Content($posted_id, $contents, $children_id);

        return $contents;
    }

    //親投稿に子投稿を追加
    public function addChildrenPostContent($contents, $posted_id, $contents, $children_id){
        $contents->add(new ContentItem($posted_id, $contents, $children_id));
        return $contents;
    }

    //投稿をルートに追加
    public function addContentsToRoot($contents){
        $this->add($contents);
    }

    //
    public function printTree(){
        $this->root_entry->dump();
    }

    //新規投稿を作成
    public function MakeNewContent($posted_id, $contents, $children_id){
        $content = addParentsPostContent($posted_id, $contents, $children_id);
        // addChildrenPostContent($content, "0999", "test", "true");
        // addContentsToRoot($content);

        // $printTree();
    }

    //親投稿のみを表示し、リプライ投稿は数のみ取得

    
}
?>