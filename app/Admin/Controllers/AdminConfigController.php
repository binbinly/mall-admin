<?php

namespace App\Admin\Controllers;

use App\Models\AdminConfig;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AdminConfigController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdminConfig(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('group_id');
            $grid->column('name');
            $grid->column('key');
            $grid->column('type');
            $grid->column('rules');
            $grid->column('desc');
            $grid->column('sort');
            $grid->column('is_open');
            $grid->column('is_required');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new AdminConfig(), function (Show $show) {
            $show->field('id');
            $show->field('group_id');
            $show->field('name');
            $show->field('key');
            $show->field('type');
            $show->field('rules');
            $show->field('desc');
            $show->field('sort');
            $show->field('is_open');
            $show->field('is_required');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AdminConfig(), function (Form $form) {
            $form->display('id');
            $form->text('group_id');
            $form->text('name');
            $form->text('key');
            $form->text('type');
            $form->text('rules');
            $form->text('desc');
            $form->text('sort');
            $form->text('is_open');
            $form->text('is_required');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
