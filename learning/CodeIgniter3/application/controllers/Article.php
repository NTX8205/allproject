<?php

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArticleModel');
    }
    public function index()
    {
        $articles = $this->ArticleModel->list();

        $this->load->view('Article/header');
        $this->load->view('Article/list', ['articles' => $articles]);
        $this->load->view('Article/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('title', '文章標題', 'required');
        $this->form_validation->set_rules('content', '文章內容', 'required');
        $this->form_validation->set_message('required', '%s 欄位必填');

        $params = [
            'title' => $this->input->post("title"),
            'content' => $this->input->post("content"),
        ];
        if (!$this->form_validation->run()) {
            $this->load->view('Article/header');
            $this->load->view('Article/create');
            $this->load->view('Article/footer');

            return ;
        }
        $this->ArticleModel->create($params);
        $this->session->set_flashdata('MessageData', [
            'type' => 'success',
            'message' => '文章新增成功',
        ]);
        redirect(site_url('article/index'));
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('content', '文章內容', 'required');
        $this->form_validation->set_message('required', '%s 欄位必填');
        $article = $this->ArticleModel->getArticle($id);
        $params = [
            'id' => $id,
            'title' => $this->input->post("title"),
            'content' => $this->input->post("content"),
        ];
        if (!$this->form_validation->run()) {
            if ($article) {
                $this->load->view('Article/header');
                $this->load->view('Article/edit', ['article' => $article]);
                $this->load->view('Article/footer');

                return ;
            } else {
                $this->session->set_flashdata('MessageData', [
                    'type' => 'danger',
                    'message' => '取得文章失敗',
                ]);
                redirect(site_url('article/index'));
            }
        }
        $this->ArticleModel->edit($params);
        $this->session->set_flashdata('MessageData', [
                    'type' => 'success',
                    'message' => '文章編輯成功',
                ]);
            redirect(site_url('article/index'));
    }

    public function delete($id)
    {
        $article = $this->ArticleModel->getArticle($id);
        if (!$this->form_validation->run()) {
            if ($article) {
                $this->ArticleModel->delete($id);
                $this->session->set_flashdata('MessageData', [
                        'type' => 'success',
                        'message' => '文章刪除成功',
                    ]);
                    redirect(site_url('article/index'));
                return ;
            } else {
                $this->session->set_flashdata('MessageData', [
                    'type' => 'danger',
                    'message' => '取得文章失敗',
                ]);
                redirect(site_url('article/index'));
            }
        }
    }
}
