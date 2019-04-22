<?php

	class PostController{
		private $model;

		public function __construct(){
			$this->model = new PostModel();
		}
		
		public function get($post_id = ''){
			return $this->model->get($post_id);
		}

		public function getTitulo($titulo = ''){
			return $this->model->getTitulo($titulo);
		}

		public function search($url = ''){
			return $this->model->search($url);
		}

		public function del( $titulo = '' ){
			return $this->model->del($titulo);			
		}

		public function set( $post_data = array() ){
			return $this->model->set($post_data);
		}


	}
?>