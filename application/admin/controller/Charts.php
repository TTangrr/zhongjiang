<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 9:13
 */
namespace app\admin\controller;



class Charts extends Common

{

    public function areaMap()
    {
        //$this =new index();
        //return view();

        return $this->fetch();
    }

    public function Dhistogram()
    {
        //$this =new index();
        //return view();



        return $this->fetch();
    }
    public function DpieChart()
    {
        //$this =new index();
        //return view();



        return $this->fetch();
    }



    public function histogram()
    {

        return $this->fetch();
    }

    public function lineChart()
    {

        return $this->fetch();
    }

    public function pieChart()
    {

        return $this->fetch();
    }

    public function timeLineChart()
    {

        return $this->fetch();
    }
}
?>