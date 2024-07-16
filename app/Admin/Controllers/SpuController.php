<?php

namespace App\Admin\Controllers;

use App\Models\Spu;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use stdClass;

class SpuController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Spu(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('cat_id');
            $grid->column('brand_id');
            $grid->column('name');
            $grid->column('original_price');
            $grid->column('desc');
            $grid->column('weight');
            $grid->column('is_many');
            $grid->column('status');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    public function create(Content $content)
    {
        return $content
            ->translation($this->translation())
            ->title($this->title())
            ->description($this->description()['create'] ?? trans('admin.create'))
            ->body($this->form());
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Spu(), function (Form $form) {
            $sku_params = [
                [
                    'name'    => '拓展列第一列', // table 第一行 title
                    'field'   => 'column1', // input 的 field_name 名称
                    'default' => '5', // 默认值
                ],
                [
                    'name'    => '拓展列第二列',
                    'field'   => 'column2',
                    'default' => '',
                ],
            ];

            $form->sku('sku', json_encode($sku_params))->display(true)->customFormat(function ($value) use ($form){
                if($value === null){
                    // 这里是给sku喂数据， 数据格式为
                    $data = new stdClass();

                    $data->attrs = [
                        '颜色' => [
                            '红色',
                            '蓝色',
                        ],
                        '大小' => [
                            '20',
                        ],
                    ];
                    $data->sku = [
                        [
                            "颜色" => "红色",
                            "大小" => '20',
                            "pic" => '图片',
                            "stock" => '库存',
                            "price" => '价格',
                            // 如果存在其他属性，则同样在这里塞进去
                        ],
                        // 根据attrs做笛卡尔积，会有两种情况， 红色20 蓝色20，所以这两中都应该有，自行编辑数据
                    ];
                    return json_encode($data);
                }
                return null;
            });
        });
    }
}
