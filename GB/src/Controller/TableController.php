<?php

namespace Controller;

use Model\CRUDInterface;
use View\View;

class TableController
{
    protected CRUDInterface $table;
    protected View $view;

    public function __construct(CRUDInterface $table, View $view)
    {
        $this->table = $table;
        $this->view = $view;
        $this->view->setTemplate('table');
    }
    public function actionShow()
    {
        // print_r($this->table->get());
        $this
            ->view
            ->setData(
                ['table' => $this->table->get()]
            )
            ->view();
    }
}
