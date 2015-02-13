<?php

$properties = array();

$tmp = array(
  'tplFormCreate' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.create',
  ),
  'tplFormUpdate' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.update',
  ),
  'tplPreview' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.preview',
  ),
  'tplSectionRow' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.section.row',
  ),
  'tplTicketEmailBcc' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.email.bcc',
  ),
//  'tplTicketEmailSubscription' => array(
//    'type' => 'textfield',
//    'value' => 'tpl.ms2form.ticket.email.subscription',
//  ),
  'allowedFields' => array(
    'type' => 'textfield',
    'value' => 'parent,pagetitle,content,published,template,hidemenu,tags',
  ),
  'requiredFields' => array(
    'type' => 'textfield',
    'value' => 'parent,pagetitle,content',
  ),
//  'redirectUnpublished' => array(
//    'type' => 'numberfield',
//    'value' => 0,
//  ),
//
  'parents' => array(
    'type' => 'textfield',
    'value' => '',
    'desc' => 'ms2form_prop_parents'
  ),
  'parentsIncludeTVs' => array(
    'type' => 'textfield',
    'value' => '',
    'desc' => 'ms2form_prop_parents_include_tvs'
  ),
  'parentsSortby' => array(
    'type' => 'textfield',
    'value' => 'pagetitle',
    'desc' => 'ms2form_prop_parents_sortby'
  ),
  'parentsSortdir' => array(
    'type' => 'list',
    'options' => array(
      array('text' => 'ASC', 'value' => 'ASC'),
      array('text' => 'DESC', 'value' => 'DESC'),
    ),
    'value' => 'ASC',
    'desc' => 'ms2form_prop_parents_sortdir'
  ),
  'resources' => array(
    'type' => 'textfield',
    'value' => '',
    'desc' => 'ms2form_prop_sections_resources'
  ),
  'permissions' => array(
    'type' => 'textfield',
    'value' => 'section_add_children',
    'desc' => 'ms2form_prop_sections_permissions'
  ),
  'allowFiles' => array(
    'type' => 'combo-boolean',
    'value' => true,
  ),
  'source' => array(
    'type' => 'numberfield',
    'value' => '',
  ),
  'tplFiles' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.files',
  ),
  'tplFile' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.file',
  ),
  'tplImage' => array(
    'type' => 'textfield',
    'value' => 'tpl.ms2form.image',
  ),

);

foreach ($tmp as $k => $v) {
  $properties[] = array_merge(
    array(
      'name' => $k,
      'desc' => PKG_NAME_LOWER . '_prop_' . $k,
      'lexicon' => PKG_NAME_LOWER . ':properties',
    ), $v
  );
}

return $properties;