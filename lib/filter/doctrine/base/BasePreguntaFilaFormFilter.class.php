<?php

/**
 * PreguntaFila filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaFilaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'orden'       => new sfWidgetFormFilterInput(),
      'id_pregunta' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'etiqueta'    => new sfValidatorPass(array('required' => false)),
      'orden'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_pregunta' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pregunta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pregunta_fila_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaFila';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'etiqueta'    => 'Text',
      'orden'       => 'Number',
      'id_pregunta' => 'ForeignKey',
    );
  }
}
