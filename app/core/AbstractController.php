<?php


namespace core;


abstract class AbstractController implements controllerInterface
{
    /**
     * @var View view object for rendering page
     */
    protected $view;

    /**
     * AbstractController constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }
}