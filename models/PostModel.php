<?php
	class PostModel extends Model{

		public function get($post_id = ''){

			$this->query = ($post_id != '')
			?"SELECT * FROM post WHERE id_post = $post_id"
			:"SELECT * FROM post";

			$this->get_query();

			$num_rows = count($this->rows);

			$data = array();

			foreach ($this->rows as $key => $value) {
				array_push($data, $value);
			}
			
			return $data;
		}

		public function search($url = ''){

			$this->query = ($url != '')
			?"SELECT * FROM post WHERE url = '$url'"
			:"SELECT * FROM post";

			$this->get_query();

			$num_rows = count($this->rows);

			$data = array();

			foreach ($this->rows as $key => $value) {
				array_push($data, $value);
			}
			
			return $data;
		}

		public function del($id_post = ''){
			$this->query = "DELETE FROM post WHERE id_post = $id_post";
			$this->set_query();
		}

		public function set($post_data = array()){
			foreach ($post_data as $key => $value) {
				$$key = $value;
			}
			$this->query = "REPLACE INTO post (titulo, user, subtitulo, cuerpo) VALUES ('$titulo','$user', '$subtitulo','$cuerpo')";
			$this->set_query();
		}
	}

?>