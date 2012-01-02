<?php

class MaestroasientoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Maestroasiento;
                
                //obtener el numero de asiento
                $parametros = new Parametrocontabilidad;
                

                /*Obtener los comprobantes*/
                $comprobante = new Tipocomprobantecontable;
                
                $comprobante->idempresa = 3;                
                $listaComprobante = $comprobante->search();
                $comprobanteData =array();
                $comprobanteData[''] = 'Seleccione';
                foreach($listaComprobante->getData() as $comp)
                {
                  $comprobanteData[$comp->idcomprobantecontable]= $comp->descripcion;
                }
                
                //inicializar los array
                $documentoData = array();
                $cuentasArray = array();
                
                
                $documentoData[''] = 'Seleccione';
                
                //validar el tipo de comprobante para obtene los documentos
                
                
                if(isset($_POST['Maestroasiento']['idcomprobantecontable'])&& $_POST['Maestroasiento']['idcomprobantecontable']!= '')
                {
                    
                    /*Obtener los documentos*/
                    $documento = new Tipodocumentocontable();
                    $documento->tipocomprobante = $_POST['Maestroasiento']['idcomprobantecontable'];
                    $listaDocumento = $documento->search();

                    
                    foreach($listaDocumento->getData() as $doc)
                    {
                        $documentoData[$doc->iddocumento]= $doc->descripcion;
                    }
                
                    /*Obtener cuentas bancarias*/
                    $cuentas = new Cuentasbancarias;
                    $cuentas->idempresa = 3;
                    $listaCuentas = $cuentas->search();

                    
                    foreach($listaCuentas->getData() as $cu)
                    {
                        $cuentasArray[$cu->idcuentabancaria] = $cu->descripcion;
                    }
                
                }
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Maestroasiento']))
		{
			$model->attributes=$_POST['Maestroasiento'];
            
                        //cambiar la empresa solo por TEST
                        $model->idempresa = 3;
                        //cuando es asiento la cedula va vacia
                        $model->cedularuc = '';
                        $model->fechamodificacion = date('Y-m-d');
                        $model->estado = 1;
                        ////////////////////////////////////////

                            if($model->save())
                                            $this->redirect(array('detalleasientos/create','id'=>$model->idasiento));
                            }

                            $this->render('create',array(
                                    'model'=>$model,
                                    'comprobanteData'=> $comprobanteData,
                                    'documentoData'=>$documentoData,
                                    'cuentasData'=>$cuentasArray,
                            ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
       
        
        
        /*Obtener los comprobantes*/
                $comprobante = new Tipocomprobantecontable;
                
                $comprobante->idempresa = 3;                
                $listaComprobante = $comprobante->search();
                $comprobanteData =array();
                foreach($listaComprobante->getData() as $comp)
                {
                  $comprobanteData[$comp->idcomprobantecontable]= $comp->descripcion;
                }
                
                /*Obtener los documentos*/
                $documento = new Tipodocumentocontable();
                $documento->tipocomprobante = 1;
                $listaDocumento = $documento->search();
                
                $documentoData = array();
                foreach($listaDocumento->getData() as $doc)
                {
                    $documentoData[$doc->iddocumento]= $doc->descripcion;
                }
                
                /*Obtener cuentas bancarias*/
                $cuentas = new Cuentasbancarias;
                $cuentas->idempresa = 3;
                $listaCuentas = $cuentas->search();
                
                $cuentasArray = array();
                foreach($listaCuentas->getData() as $cu)
                {
                    $cuentasArray[$cu->idcuentabancaria] = $cu->descripcion;
                }

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Maestroasiento']))
		{
			$model->attributes=$_POST['Maestroasiento'];
            
            //cambiar la empresa solo por TEST
            $model->idempresa = 3;
            $model->cedularuc = '1718642281';
            $model->fechamodificacion = date('Y-m-d');
            $model->estado = 1;
            ////////////////////////////////////////
            
            
			if($model->save())
				$this->redirect(array('detalleasientos/create','id'=>$model->idasiento));
		}

		$this->renderPartial('update',array(
			'model'=>$model,
            'comprobanteData'=> $comprobanteData,
            'documentoData'=>$documentoData,
            'cuentasData'=>$cuentasArray,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        
        $this->redirect(array('admin'));
        
//		$dataProvider=new CActiveDataProvider('Maestroasiento');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Maestroasiento('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Maestroasiento']))
			$model->attributes=$_GET['Maestroasiento'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Maestroasiento::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='maestroasiento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
