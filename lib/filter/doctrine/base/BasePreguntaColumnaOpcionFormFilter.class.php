<?php

/**
 * PreguntaColumnaOpcion filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaColumnaOpcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_pregunta_columna' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreguntaColumna'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'etiqueta'            => new sfValidatorPass(array('required' => false)),
      'id_pregunta_columna' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PreguntaColumna'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pregunta_columna_opcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaColumnaOpcion';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'etiqueta'            => 'Text',
      'id_pregunta_columna' => 'ForeignKey',
    );
  }
}
