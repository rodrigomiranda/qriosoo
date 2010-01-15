<?php

/**
 * PreguntaAtributo filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaAtributoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_atributo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoAtributo'), 'add_empty' => true)),
      'id_pregunta'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pregunta'), 'add_empty' => true)),
      'valor'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_tipo_atributo' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoAtributo'), 'column' => 'id')),
      'id_pregunta'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pregunta'), 'column' => 'id')),
      'valor'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('pregunta_atributo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PreguntaAtributo';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'id_tipo_atributo' => 'ForeignKey',
      'id_pregunta'      => 'ForeignKey',
      'valor'            => 'Number',
    );
  }
}
