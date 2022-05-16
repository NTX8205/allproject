<?php

class ArticleModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create($params)
    {
        $data = [
            'title' => $params['title'],
            'content' => $params['content'],
        ];
        $this->db->insert('articles', $data);

        return $this->db->affected_rows() > 0;
    }

    public function list()
    {
        $sql = $this -> db -> select('id, title, content, timestamp')
            ->from('articles');
        $query = $sql->get();

        return $query->result_array();
    }

	public function getArticle($id)
	{
		$sql = $this -> db -> select('id, title, content')
			->from('articles')
			->where('id', $id);
		$query = $sql->get();

		return $query->row_array();
	}

	public function edit($params)
	{
		$data = [
			'id' => $params['id'],
			'title' => $params['title'],
            'content' => $params['content'],
		];
		$this->db->where('id', $data['id'])
			->update('articles', $data);

		return $this->db->affected_rows() > 0;
	}

	public function delete($id)
	{
		$this->db->where('id', $id)
			->delete('articles');
		
		return $this->db->affected_rows() > 0;
	}
}
