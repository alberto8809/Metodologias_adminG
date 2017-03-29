<?php
include('/opt/lampp/htdocs/Excel/Classes/PHPExcel.php');
require("lib/conexion.php");       


PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );

  /*Style of Tittle*/
$tittle = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$tittle->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ),
    'font' => array( /*Attribute of text*/
      'bold' => true,
      'size' => 15,
      "color" => array("rgb" => "2E8B57")
    )

));


  /*Style of Tittle*/
$tittle2 = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$tittle2->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ),
    'font' => array( /*Attribute of text*/
      'bold' => true,
      'size' => 15,
      "color" => array("rgb" => "8B4513")
    )

));


$tittle3 = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$tittle3->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ),
    'font' => array( /*Attribute of text*/
      'bold' => true,
      'size' => 15,
      "color" => array("rgb" => "000000")
    )

));


/*Style of tittle*/
$styleTittle = array( /*Create variable of PHPExcel_Style*/
      
      'fill' => array(
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FDF4E3'
        ),
        'endcolor' => array(
          'argb' => 'FDF4E3'
        )
      ),
      'borders' => array(
        'top' => array(
          'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
          'color' => array(
            'rgb' => '000000'
          )
        ),
        'bottom' => array(
          'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
          'color' => array(
            'rgb' => '000000'
          )
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      )
    );


	  /*Style of firts colum */
$styleofColum1 = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$styleofColum1->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER

    ),
    'font' => array( /* Attribute of text*/
      'bold' => true,
      'size' => 10,
      "color" => array("rgb" => "FFFFFF")
    ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FF0000'/*change color */
        ),
        'endcolor' => array(
          'argb' => 'FF0000'
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      ),
     'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
));

    $styleofText = new PHPExcel_Style();
    $styleofText->applyFromArray( array(
      'font' => array(
        'name'  => 'Arial',
        'bold' => true,
      'size' => 9,
        'color' => array(
          'rgb' => '000000'
        )),
      'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FBF4F4'
        ),
        'endcolor' => array(
          'argb' => 'FBF4F4'
        )
      ),
      'borders' => array(
          'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
          )
        )
    ));

	error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $objPHPExcel = new PHPExcel();

    /*Dimension of columns*/
    $objPHPExcel->getActiveSheet()->getColumnDimension("A")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("B")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("C")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("D")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("E")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("F")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("G")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("H")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("I")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("J")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("K")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("L")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("M")->SetAutoSize(true);

    /*Top of title*/
    $objPHPExcel->getActiveSheet()->SetCellValue("A1", "FORMATO DE RECTORÍA DE UNIDAD");
    $objPHPExcel->getActiveSheet()->setSharedStyle($tittle, "A1:A1");
    $objPHPExcel->getActiveSheet()->SetCellValue("A2", "INDICADOR 45 DEL PDI");
    $objPHPExcel->getActiveSheet()->setSharedStyle($tittle2, "A2:A2");
    $objPHPExcel->getActiveSheet()->SetCellValue("A3", "LISTA DE ALUMNOS EN TALLERES DE ACTIVIDADES DEPORTIVAS");
    $objPHPExcel->getActiveSheet()->setSharedStyle($tittle3, "A3:A3");

	$objPHPExcel->getActiveSheet()->getStyle('A1:H3')->applyFromArray($styleTittle);

    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:H1');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:H2');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:H3');


    $objPHPExcel->getActiveSheet()->SetCellValue("A4","Nombre del alumno(si el alumno participó en taller)");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:A6');    
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "A4:A6");

    $objPHPExcel->getActiveSheet()->SetCellValue("B4","Licenciatura");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B4:B6');    
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "B4:B6");

    $objPHPExcel->getActiveSheet()->SetCellValue("C4","Taller deportivo en el que participó");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C4:C6');    
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "C4:C6");
    

    $objPHPExcel->getActiveSheet()->SetCellValue("D4","Trimestre");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D4:F4');    	
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "D4:F4");

    $objPHPExcel->getActiveSheet()->SetCellValue("D5","15/Inverno");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D5:D6');    	
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "D5:D5");
    

    $objPHPExcel->getActiveSheet()->SetCellValue("E5","15/Primavera");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('E5:E6');    	
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "E5:E5");


    $objPHPExcel->getActiveSheet()->SetCellValue("F5","15/Otoño");
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('F5:F6');    	
    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "F5:F5");


    /*Consult of BaseData*/
	$query="SELECT * FROM alumnos a,Taller l WHERE a.nombre!='admin' and l.id=a.taller";
	/*variable result contain values of consult and function an_query generated with new mysqli PDO */
	$result=an_queryi($query);


	  	$rows=$objPHPExcel->setActiveSheetIndex(0);
	  	/*count of columns*/
		$k=6;


		/*travel consult*/
		foreach ($result as $value) {
			$rows->setCellValue('A'.$k,utf8_encode($value['nombre'])."  ".utf8_encode($value['apPaterno']));
			$rows->setCellValue('B'.$k,utf8_encode($value['licenciatura']));			
			$rows->setCellValue('C'.$k,"     ".utf8_encode($value['nombreTaller']));	
			$rows->setCellValue('D'.$k,"     ".$value['t1']."    ");
			$rows->setCellValue('E'.$k,"     ".$value['t2']."    ");
			$rows->setCellValue('F'.$k,"     ".$value['t3']."    ");

	    $objPHPExcel->getActiveSheet()->setSharedStyle($styleofText, "A".($k).":A".($k));
        $objPHPExcel->getActiveSheet()->setSharedStyle($styleofText, "B".($k).":B".($k));
        $objPHPExcel->getActiveSheet()->setSharedStyle($styleofText, "C".($k).":C".($k));
        $objPHPExcel->getActiveSheet()->setSharedStyle($styleofText, "D".($k).":D".($k));
        $objPHPExcel->getActiveSheet()->setSharedStyle($styleofText, "E".($k).":E".($k));
        $objPHPExcel->getActiveSheet()->setSharedStyle($styleofText, "F".($k).":F".($k));
			$k++;
		}

/*Tag name and output*/
$objPHPExcel->getActiveSheet()->setTitle('reporte');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte.xlsx"');
header('Cache-Control: max-age=0');
$objPHPExcel->setActiveSheetIndex(0);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit();

?>