<?php

namespace Drupal\custom_migrate\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\NumberWidget;

/**
 * Defines the Migrate City entity.
 *
 * @ingroup migrate_city
 *
 * @ContentEntityType(
 *   id = "migrate_city",
 *   label = @Translation("Migrate City"),
 *   base_table = "migrate_city",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *   },
 * )
 */
class MigrateCity extends ContentEntityBase implements ContentEntityInterface
{

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type)
    {

        // Standard field, used as unique if primary index.
        $fields['id'] = BaseFieldDefinition::create('integer')
            ->setLabel(t('ID'))
            ->setDescription(t('The ID of the Migrate city entity.'))
            ->setReadOnly(TRUE);

        // Standard field, unique outside of the scope of the current project.
        $fields['uuid'] = BaseFieldDefinition::create('uuid')
            ->setLabel(t('UUID'))
            ->setDescription(t('The UUID of the Migrate city entity.'))
            ->setReadOnly(TRUE);

        $fields['city'] = BaseFieldDefinition::create('string')
            ->setLabel(t('City'))
            ->setDescription(t('Enter city.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ))
            ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'string',
                'weight' => -6,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'string_textfield',
                'weight' => -6,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        $fields['longtitude'] = BaseFieldDefinition::create('number')
            ->setLabel(t('Longtitude'))
            ->setDescription(t('Longtitude of the city.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ))
            ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'number',
                'weight' => -6,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'number',
                'weight' => -6,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        $fields['latitude'] = BaseFieldDefinition::create('number')
            ->setLabel(t('Latitude'))
            ->setDescription(t('Latitude of the city.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ))
            ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'number',
                'weight' => -6,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'number',
                'weight' => -6,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        $fields['pop'] = BaseFieldDefinition::create('number')
            ->setLabel(t('POP'))
            ->setDescription(t('Enter POP.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ))
            ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'number',
                'weight' => -6,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'number',
                'weight' => -6,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        $fields['state'] = BaseFieldDefinition::create('string')
            ->setLabel(t('State'))
            ->setDescription(t('Name of the state.'))
            ->setSettings(array(
                'default_value' => '',
                'max_length' => 255,
                'text_processing' => 0,
            ))
            ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'string',
                'weight' => -6,
            ))
            ->setDisplayOptions('form', array(
                'type' => 'string_textfield',
                'weight' => -6,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

        return $fields;
    }
}
