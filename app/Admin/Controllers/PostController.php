<?php

namespace App\Admin\Controllers;

use App\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('summary', __('Summary'));
        $grid->column('image', __('Image'));
        $grid->column('content', __('Content'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('summary', __('Summary'));
        $show->field('image', __('Image'))->image();
        $show->field('content', __('Content'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post);

        $form->text('title', __('Title'));
        $form->text('summary', __('Summary'));
        $form->image('image', __('Image'));
        $form->editor('content', __('Content'));

        return $form;
    }
}
