<?php

/**
 * Encuestado filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseEncuestadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'login'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_completo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'correo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_encuesta'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'login'           => new sfValidatorPass(array('required' => false)),
      'password'        => new sfValidatorPass(array('required' => false)),
      'nombre_completo' => new sfValidatorPass(array('required' => false)),
      'correo'          => new sfValidatorPass(array('required' => false)),
      'id_encuesta'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuesta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('encuestado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encuestado';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'login'           => 'Text',
      'password'        => 'Text',
      'nombre_completo' => 'Text',
      'correo'          => 'Text',
      'id_encuesta'     => 'ForeignKey',
    );
  }
}
