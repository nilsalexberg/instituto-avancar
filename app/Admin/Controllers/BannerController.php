<?php

namespace App\Admin\Controllers;

use App\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Banner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner);

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'))->image();
        $grid->column('title', __('Title'));
        $grid->column('subtitle', __('Subtitle'));
        $grid->column('description', __('Description'));
        $grid->column('position', __('Position'));
        $grid->column('link', __('Link'));
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
        $show = new Show(Banner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('subtitle', __('Subtitle'));
        $show->field('description', __('Description'));
        $show->field('position', __('Position'));
        $show->field('link', __('Link'));
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
        $form = new Form(new Banner);

        $form->image('image', __('Image'));
        $form->text('title', __('Title'));
        $form->text('subtitle', __('Subtitle'));
        $form->text('description', __('Description'));
        $form->text('position', __('Position'));
        $form->url('link', __('Link'));

        return $form;
    }
}
