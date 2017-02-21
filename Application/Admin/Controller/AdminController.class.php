<?php
	namespace Admin\Controller;
	
	class AdminController extends \Think\controller
	{
		//定义一个构造的方法；

		public function index()
		{
			$this->redirect('Admin/Index/index');
		}
		//进行导出导入数据的表格，比较方便
		public function exportExcel($expTitle, $expCellName, $expTableData)
		{
			import('Org.Util.PHPExcel');
			import('Org.Util.PHPExcel.Writer.Excel5');
			import('Org.Util.PHPExcel.IOFactory.php');
			$xlsTitle = iconv('utf-8', 'gb2312', $expTitle);
			$fileName = $_SESSION['loginAccount'] . date('_YmdHis');
			$cellNum = count($expCellName);
			$dataNum = count($expTableData);
			$objPHPExcel = new \PHPExcel();
			$cellName = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');
			$objPHPExcel->getActiveSheet(0)->mergeCells('A1:' . $cellName[$cellNum - 1] . '1');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', date('Y-m-d H:i:s') . '提现记录');

			for ($i = 0; $i < $cellNum; $i++) {
				$objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i] . '2', $expCellName[$i][2]);
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($cellName[$i])->setWidth(12);
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('D')->setWidth(20);
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('H')->setWidth(30);
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('M')->setWidth(30);
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('O')->setWidth(20);
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('L')->setWidth(30);
			}

			for ($i = 0; $i < $dataNum; $i++) {
				for ($j = 0; $j < $cellNum; $j++) {
					$objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j] . ($i + 3), (string) $expTableData[$i][$expCellName[$j][0]]);
				}
			}

			ob_end_clean();
			header('pragma:public');
			header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
			header('Content-Disposition:attachment;filename=' . $fileName . '.xls');
			$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$objWriter->save('php://output');
			exit();
		}
	}
?>