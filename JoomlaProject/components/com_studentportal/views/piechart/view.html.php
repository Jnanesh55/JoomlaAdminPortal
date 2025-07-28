<?php

defined('_JEXEC') or die('ACEES DENIED');
jimport('joomla.application.component.view');

class StudentPortalViewPiechart extends JView{

    function display($tpl = null){

        JHTML::stylesheet('piecharts.css', 'components/com_studentportal/assets/css/');
        JHTML::stylesheet('hightable.css','components/com_studentportal/assets/css/');
        JHTML::stylesheet('highmeter.css','components/com_studentportal/assets/css/');
        $model=JModel::getInstance('Student','StudentPortalModel');
        $studentyear=$model->getYear();
        $this->assignRef('year',$studentyear);

        $studentbranch=$model->getBranch();
        $this->assignRef('branch',$studentbranch);

         $marks = $model->getMarksData();
       $this->assignRef('marksdata', $marks);

       $sk = $model->getSk();
       $this->assignRef('sandk', $sk);
       
        $table = $model->getTable();
        $this->assignRef('tables', $table);

        parent::display($tpl);

    }
}