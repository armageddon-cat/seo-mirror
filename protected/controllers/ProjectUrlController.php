<?php

class ProjectUrlController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update','UrlCheck','Compare','DateCompare','CompareResult'),
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
		$model=new ProjectUrl;
                $pathname = YiiBase::getPathOfAlias('webroot').'/protected/files/seo/'.Yii::app()->user->id.'/';
                $mode = 0750;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProjectUrl']))
		{
			$model->attributes=$_POST['ProjectUrl'];
			if($model->save()) {
                                mkdir($pathname.$model->project_id.'/'.$model->id, $mode);
				$this->redirect(array('view','id'=>$model->id));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProjectUrl']))
		{
			$model->attributes=$_POST['ProjectUrl'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ProjectUrl');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ProjectUrl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProjectUrl']))
			$model->attributes=$_GET['ProjectUrl'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionUrlCheck($project_id) {
            $pathname = YiiBase::getPathOfAlias('webroot').'/protected/files/seo/'.Yii::app()->user->id.'/';
            $mode = 0750;
            //mkdir($pathname.$model->project_id.'/'.$model->id, $mode);
            $model=new ProjectUrl();
            $model->unsetAttributes();  // clear any default values
            if(isset($_POST['ProjectUrl'])) {
                $model->attributes=$_POST['ProjectUrl'];
				$model_url=$this->loadModel($model->url);
                $ch = curl_init($model_url->url);
                
                if (!file_exists($pathname.$project_id.'/'.$model->url.'/'.date('Y-m-d H:i:00'))) {
                    mkdir($pathname.$project_id.'/'.$model->url.'/'.date('Y-m-d H:i:00'), $mode);
                }

                $fp = fopen($pathname.$project_id.'/'.$model->url.'/'.date('Y-m-d H:i:00').'/'."".date('Y-m-d H:i:00').".txt", "w");

                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);

                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
              
            }
            $this->render('UrlCheck',array(
			'model'=>$model,'project_id'=>$project_id
		));

        }
        
        public function actionCompare($project_id)
	{

		$model=new ProjectUrl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['ProjectUrl'])){
			$model->attributes=$_POST['ProjectUrl'];
                        $pathname = YiiBase::getPathOfAlias('webroot').'/protected/files/seo/'.Yii::app()->user->id.'/'.$project_id.'/'.$model->url.'/';
                        $this->redirect(array('DateCompare','project_id'=>$model->url,'pathname'=>$pathname));
                }

		$this->render('Compare',array(
			'model'=>$model,'project_id'=>$project_id,'pathname'=>$pathname
		));
	}
        
          public function actionDateCompare($project_id,$pathname)
	{       $truedir = scandir($pathname);
                array_shift($truedir);
                array_shift($truedir);
		$model=new ProjectUrl('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['ProjectUrl'])){
			$model->attributes=$_POST['ProjectUrl'];
                        
                        $first_url = $_POST['ProjectUrl']['url'][0];
                        $second_url =  $_POST['ProjectUrl']['url'][1];
                        
                        $pathname_one = $pathname.$truedir[$first_url].'/';
                        $pathname_two = $pathname.$truedir[$second_url].'/';
                        
                        
//                        $dir = YiiBase::getPathOfAlias('webroot').'/protected/controllers';
//                        require_once $dir.'/class.Diff.php';
//
//                        $result=Diff::toString(Diff::compareFiles($pathname_one.'example_homepage.txt', $pathname_two.'example_homepage.txt'));
                
                        $this->redirect(array('CompareResult','pathname_one'=>$pathname_one,'pathname_two'=>$pathname_two));
                }

		$this->render('DateCompare',array(
			'model'=>$model,'project_id'=>$project_id,'pathname'=>$pathname
		));
	}
        public function actionCompareResult($pathname_one,$pathname_two)
	{
		$this->render('CompareResult',array(
			'pathname_one'=>$pathname_one,'pathname_two'=>$pathname_two
		));
	}
        


        /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ProjectUrl the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ProjectUrl::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ProjectUrl $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='project-url-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
