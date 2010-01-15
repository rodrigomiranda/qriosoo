<?php

/**
 * GrupoPregunta filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseGrupoPreguntaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'orden'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_encuesta' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Encuesta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'etiqueta'    => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'orden'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_encuesta' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Encuesta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('grupo_pregunta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrupoPregunta';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'etiqueta'    => 'Text',
      'descripcion' => 'Text',
      'orden'       => 'Number',
      'id_encuesta' => 'ForeignKey',
    );
  }
}
