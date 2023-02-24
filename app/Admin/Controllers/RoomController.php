<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Room;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class RoomController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Room(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('room_id');
            $grid->column('area');
            $grid->column('price');
            $grid->column('imagefiles')->image();
            
            $grid->column('video');
            $grid->column('desc');
            $grid->column('local');
            $grid->column('price_type');
            $grid->column('floor');
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
        return Show::make($id, new Room(), function (Show $show) {
            $show->field('id');
            $show->field('room_id');
            $show->field('area');
            $show->field('price');
            $show->field('imagefiles');
            $show->field('video');
            $show->field('desc');
            $show->field('local');
            $show->field('price_type');
            $show->field('floor');
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
        return Form::make(new Room(), function (Form $form) {
            $form->display('id');
            $form->text('room_id');
            $form->text('area');
            $form->text('price');
            //$form->text('imagefiles');
            $form->file('imagefiles')->disk('qiniu');
            $form->text('video');
            $form->text('desc');
            $form->text('local');
            $form->text('price_type');
            $form->text('floor');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
