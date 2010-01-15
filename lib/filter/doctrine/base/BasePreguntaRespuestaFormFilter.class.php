<?php

/**
 * PreguntaRespuesta filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaRespuestaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'valor_default' => new sfWidgetFormFilterInput(),
      'orden'         => new sfWidgetFormFilterInput(),
      'id_pregunta'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'respuesta'     => new sfValidatorPass(array('required' => false)),
      'valor_default' => new sfValidatorPass(array('required' => false)),
      'orden'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_pregunta'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pregunta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pregunta_respuesta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaRespuesta';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'respuesta'     => 'Text',
      'valor_default' => 'Text',
      'orden'         => 'Number',
      'id_pregunta'   => 'ForeignKey',
    );
  }
}
