<?php

class post {

    private $_titlePost;
    private $_contentPost;
    private $_idPost;

    public function post($titlePost = '', $contentPost = '') {
        $this->_titlePost = $titlePost;
        $this->_contentPost = $contentPost;
    }

    // accesseurs $_titlePost
    public function getTitlePost() {
        return $this->_titlePost;
    }

    public function setTitlePost($titlePost) {
        $this->_titlePost = $titlePost;
    }

    // accesseurs $_contentPost
    public function getContentPost() {
        return $this->_contentPost;
    }

    public function setContentPost($contentPost) {
        $this->_contentPost = $contentPost;
    }

    // accesseurs $_idPost
    public function getIdPost() {
        return $this->_idPost;
    }

    public function setIdPost($idPost) {
        $this->_idPost = $idPost;
    }

    // accesseur titlePost + contentPost 
    public function getTitleContentPost() {
        return $this->_titlePost . " " . $this->_contentPost;
    }

}
