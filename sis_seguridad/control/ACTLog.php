<?php
/***
 Nombre: ACTLog.php
 Proposito: Clase que maneja el registro y consulta del log 
 Autor:	Kplian
 Fecha:	01/07/2010
 */
class ACTLog extends ACTbase{    

	function listarLog(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','id_log');
		$this->objParam->defecto('dir_ordenacion','desc');
		if ($this->objParam->getParametro('tipo_log')=='bd'){
			$this->objParam->addFiltro("logg.tipo_log in (''LOG_BD'',''ERROR_BD'')");
		}
		
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarLog');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarLog($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	function listarLogHorario(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','id_log');
		$this->objParam->defecto('dir_ordenacion','desc');
				
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarLogHorario');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarLogHorario($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	function listarLogMonitor(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','id_log');
		$this->objParam->defecto('dir_ordenacion','desc');
		if ($this->objParam->getParametro('tipo_log')=='bd'){
			$this->objParam->addFiltro("logg.tipo_log in (''LOG_BD'',''ERROR_BD'')");
		}
		
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarLogMonitor');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarLogMonitor($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	
	function listarMonitorEsquema(){
		

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','schemaname');
		$this->objParam->defecto('dir_ordenacion','asc');
				
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarMonitorEsquema');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarMonitorEsquema($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	function listarMonitorTabla(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','relname');
		$this->objParam->defecto('dir_ordenacion','asc');
		if ($this->objParam->getParametro('oid')!='' && $this->objParam->getParametro('oid')!='undefined'){
			$this->objParam->addFiltro("mta.relnamespace=".$this->objParam->getParametro('oid'));
		}
			
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarMonitorTabla');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarMonitorTabla($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	function listarMonitorFuncion(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','proname');
		$this->objParam->defecto('dir_ordenacion','asc');
		if ($this->objParam->getParametro('oid')!='' && $this->objParam->getParametro('oid')!='undefined'){
			$this->objParam->addFiltro("mfu.pronamespace=".$this->objParam->getParametro('oid'));
		}
			
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarMonitorFuncion');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarMonitorFuncion($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	function listarMonitorIndice(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','indexrelname');
		$this->objParam->defecto('dir_ordenacion','asc');
		if ($this->objParam->getParametro('oid')!='' && $this->objParam->getParametro('oid')!='undefined'){
			$this->objParam->addFiltro("min.relid=".$this->objParam->getParametro('oid'));
		}
			
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarMonitorIndice');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarMonitorIndice($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}
	function listarMonitorRecursos(){

		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','pcpu_bd');
		$this->objParam->defecto('dir_ordenacion','desc');
		
			
		
		$this->objFunSeguridad=$this->create('MODLog');
		$this->res=$this->objFunSeguridad->listarMonitorRecursos($this->objParam);
		$this->res->settotal(count($this->res->getDatos()));
	
		$this->res->imprimirRespuesta($this->res->generarJson());
	}

	function listarCantidadXTransaccion(){
		//el objeto objParam contiene todas la variables recibidad desde la interfaz
		$this->objParam->defecto('ordenacion','id_log');
		$this->objParam->defecto('dir_ordenacion','desc');
		
		if ($this->objParam->getParametro('tipoReporte')=='excel_grid' || $this->objParam->getParametro('tipoReporte')=='pdf_grid'){
			$this->objReporte=new Reporte($this->objParam, $this);
			$this->res=$this->objReporte->generarReporteListado('MODLog','listarCantidadXTransaccion');
		}
		else{
			$this->objFunSeguridad=$this->create('MODLog');
			$this->res=$this->objFunSeguridad->listarCantidadXTransaccion($this->objParam);
		}
	
		$this->res->imprimirRespuesta($this->res->generarJson());
		
		
	}

	function listarRest(){
		$this->objParam->defecto('ordenacion','id_log');
		$this->objParam->defecto('dir_ordenacion','desc');

		$this->objFunc=$this->create('MODLog');
		$this->objParam->addParametro('id_funcionario_usu',$_SESSION["ss_id_funcionario"]);
		$this->res=$this->objFunc->listarRest($this->objParam);
		$this->res->imprimirRespuesta($this->res->generarJson());
	}
}

?>