<?php

/**
 * PreguntaOpcion filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaOpcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'etiqueta' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pregunta_opcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaOpcion';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'etiqueta' => 'Text',
    );
  }
}
