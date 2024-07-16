<?php

namespace App\Admin\Controllers;

use App\Models\AdminConfigGroup;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class AdminConfigGroupController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdminConfigGroup(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('pid');
            $grid->column('name');
            $grid->column('key');
            $grid->column('desc');
            $grid->column('is_open');
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
        return Show::make($id, new AdminConfigGroup(), function (Show $show) {
            $show->field('id');
            $show->field('pid');
            $show->field('name');
            $show->field('key');
            $show->field('desc');
            $show->field('is_open');
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
        return Form::make(new AdminConfigGroup(), function (Form $form) {
            $form->display('id');
            $form->text('pid');
            $form->text('name');
            $form->text('key');
            $form->text('desc');
            $form->text('is_open');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
