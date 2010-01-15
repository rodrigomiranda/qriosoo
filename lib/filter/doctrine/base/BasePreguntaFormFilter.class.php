<?php

/**
 * Pregunta filter form base class.
 *
 * @package    encuesta-doctrine
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BasePreguntaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'etiqueta'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pregunta'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'orden'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_modificacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'obligatoria'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_grupo_pregunta'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrupoPregunta'), 'add_empty' => true)),
      'id_tipo_pregunta'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoPregunta'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'etiqueta'           => new sfValidatorPass(array('required' => false)),
      'pregunta'           => new sfValidatorPass(array('required' => false)),
      'orden'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_modificacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'obligatoria'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_grupo_pregunta'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('GrupoPregunta'), 'column' => 'id')),
      'id_tipo_pregunta'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoPregunta'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('pregunta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pregunta';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'etiqueta'           => 'Text',
      'pregunta'           => 'Text',
      'orden'              => 'Number',
      'fecha_modificacion' => 'Date',
      'obligatoria'        => 'Number',
      'id_grupo_pregunta'  => 'ForeignKey',
      'id_tipo_pregunta'   => 'ForeignKey',
    );
  }
}
