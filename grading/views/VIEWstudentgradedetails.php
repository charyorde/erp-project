<?php
$view = new view;
$view->name = 'studentgradedetails';
$view->description = 'Student Grade Details';
$view->tag = '';
$view->view_php = '';
$view->base_table = 'node';
$view->is_cacheable = FALSE;
$view->api_version = 2;
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->override_option('relationships', array(
  'field_mat_no_uid' => array(
    'label' => 'Student',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_mat_no_uid',
    'table' => 'node_data_field_mat_no',
    'field' => 'field_mat_no_uid',
    'relationship' => 'none',
  ),
  'field_course_instance_nid' => array(
    'label' => 'Course Instance',
    'required' => 1,
    'delta' => -1,
    'id' => 'field_course_instance_nid',
    'table' => 'node_data_field_course_instance',
    'field' => 'field_course_instance_nid',
    'relationship' => 'none',
  ),
  'field_lecturer_uid' => array(
    'label' => 'Lecturer',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_lecturer_uid',
    'table' => 'node_data_field_lecturer',
    'field' => 'field_lecturer_uid',
    'relationship' => 'field_course_instance_nid',
  ),
  'field_student_gpa_nid' => array(
    'label' => 'Student GPA',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_student_gpa_nid',
    'table' => 'node_data_field_student_gpa',
    'field' => 'field_student_gpa_nid',
    'relationship' => 'none',
  ),
  'field_program_ref_gpa_nid' => array(
    'label' => 'Program',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_program_ref_gpa_nid',
    'table' => 'node_data_field_program_ref_gpa',
    'field' => 'field_program_ref_gpa_nid',
    'relationship' => 'field_student_gpa_nid',
  ),
  'field_course_id_nid' => array(
    'label' => 'Course nid',
    'required' => 1,
    'delta' => -1,
    'id' => 'field_course_id_nid',
    'table' => 'node_data_field_course_id',
    'field' => 'field_course_id_nid',
    'relationship' => 'field_course_instance_nid',
  ),
  'field_student_program_ref_gpa_nid' => array(
    'label' => 'student_program',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_student_program_ref_gpa_nid',
    'table' => 'node_data_field_student_program_ref_gpa',
    'field' => 'field_student_program_ref_gpa_nid',
    'relationship' => 'field_student_gpa_nid',
  ),
));
$handler->override_option('fields', array(
  'field_code_value' => array(
    'label' => 'Course',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'strip_tags' => 0,
      'html' => 0,
    ),
    'link_to_node' => 0,
    'label_type' => 'custom',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_code_value',
    'table' => 'node_data_field_code',
    'field' => 'field_code_value',
    'relationship' => 'field_course_id_nid',
  ),
  'field_coursetitle_value' => array(
    'label' => 'Course Title',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'strip_tags' => 0,
      'html' => 0,
    ),
    'link_to_node' => 0,
    'label_type' => 'custom',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_coursetitle_value',
    'table' => 'node_data_field_coursetitle',
    'field' => 'field_coursetitle_value',
    'relationship' => 'field_course_id_nid',
  ),
  'field_credit_load_sg_value' => array(
    'label' => 'Credit',
    'alter' => array(
      'alter_text' => 1,
      'text' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[field_credit_load_sg_value]',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'custom',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_credit_load_sg_value',
    'table' => 'node_data_field_credit_load_sg',
    'field' => 'field_credit_load_sg_value',
    'relationship' => 'none',
  ),
  'field_ca1_value' => array(
    'label' => 'CA1',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_ca1_value',
    'table' => 'node_data_field_ca1',
    'field' => 'field_ca1_value',
    'relationship' => 'none',
  ),
  'field_ca2_value' => array(
    'label' => 'CA2',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_ca2_value',
    'table' => 'node_data_field_ca2',
    'field' => 'field_ca2_value',
    'relationship' => 'none',
  ),
  'field_ca3_value' => array(
    'label' => 'CA3',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_ca3_value',
    'table' => 'node_data_field_ca3',
    'field' => 'field_ca3_value',
    'relationship' => 'none',
  ),
  'field_ca4_value' => array(
    'label' => 'CA4',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_ca4_value',
    'table' => 'node_data_field_ca4',
    'field' => 'field_ca4_value',
    'relationship' => 'none',
  ),
  'field_exam_score_value' => array(
    'label' => 'Exam',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'custom',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_exam_score_value',
    'table' => 'node_data_field_exam_score',
    'field' => 'field_exam_score_value',
    'relationship' => 'none',
  ),
  'field_grade_value' => array(
    'label' => 'Grade',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_grade_value',
    'table' => 'node_data_field_grade',
    'field' => 'field_grade_value',
    'relationship' => 'none',
  ),
  'field_sess_name_value' => array(
    'label' => 'Session',
    'link_to_node' => 0,
    'label_type' => 'custom',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_sess_name_value',
    'table' => 'node_data_field_sess_name',
    'field' => 'field_sess_name_value',
    'relationship' => 'field_course_instance_nid',
  ),
  'field_semester_name_value' => array(
    'label' => 'Semester',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'strip_tags' => 0,
      'html' => 0,
    ),
    'link_to_node' => 0,
    'label_type' => 'custom',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_semester_name_value',
    'table' => 'node_data_field_semester_name',
    'field' => 'field_semester_name_value',
    'relationship' => 'field_course_instance_nid',
  ),
  'field_gpa_value' => array(
    'label' => 'GPA',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_gpa_value',
    'table' => 'node_data_field_gpa',
    'field' => 'field_gpa_value',
    'relationship' => 'field_student_gpa_nid',
  ),
));
$handler->override_option('sorts', array(
  'field_sess_name_value' => array(
    'order' => 'ASC',
    'delta' => -1,
    'id' => 'field_sess_name_value',
    'table' => 'node_data_field_sess_name',
    'field' => 'field_sess_name_value',
    'relationship' => 'field_course_instance_nid',
  ),
  'field_semester_name_value_1' => array(
    'order' => 'ASC',
    'delta' => -1,
    'id' => 'field_semester_name_value_1',
    'table' => 'node_data_field_semester_name',
    'field' => 'field_semester_name_value',
    'relationship' => 'field_course_instance_nid',
  ),
  'field_code_value' => array(
    'order' => 'ASC',
    'delta' => -1,
    'id' => 'field_code_value',
    'table' => 'node_data_field_code',
    'field' => 'field_code_value',
    'relationship' => 'field_course_id_nid',
  ),
));
$handler->override_option('filters', array(
  'type' => array(
    'operator' => 'in',
    'value' => array(
      'student_grades' => 'student_grades',
    ),
    'group' => '0',
    'exposed' => FALSE,
    'expose' => array(
      'operator' => FALSE,
      'label' => '',
    ),
    'id' => 'type',
    'table' => 'node',
    'field' => 'type',
    'relationship' => 'none',
  ),
  'field_dropped_value' => array(
    'operator' => '=',
    'value' => array(
      'value' => '0',
      'min' => '',
      'max' => '',
    ),
    'group' => '0',
    'exposed' => FALSE,
    'expose' => array(
      'operator' => FALSE,
      'label' => '',
    ),
    'id' => 'field_dropped_value',
    'table' => 'node_data_field_dropped',
    'field' => 'field_dropped_value',
    'relationship' => 'none',
  ),
  'uid' => array(
    'operator' => 'in',
    'value' => '',
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'uid_op',
      'identifier' => 'uid',
      'label' => 'User: Name',
      'optional' => 0,
      'remember' => 0,
      'reduce' => 0,
    ),
    'id' => 'uid',
    'table' => 'users',
    'field' => 'uid',
    'relationship' => 'field_mat_no_uid',
  ),
));
$handler->override_option('access', array(
  'type' => 'perm',
  'perm' => 'view grading',
));
$handler->override_option('cache', array(
  'type' => 'none',
));
$handler->override_option('footer_format', '3');
$handler->override_option('footer_empty', 0);
$handler->override_option('items_per_page', 100);
$handler->override_option('use_pager', '1');
$handler->override_option('distinct', 1);
$handler->override_option('style_plugin', 'table');
$handler->override_option('style_options', array(
  'grouping' => '',
  'override' => 1,
  'sticky' => 1,
  'order' => 'asc',
  'columns' => array(
    'field_course_code_value' => 'field_course_code_value',
    'field_course_title_value' => 'field_course_title_value',
    'field_credit_load_value' => 'field_credit_load_value',
    'field_gradeforstudent_value' => 'field_gradeforstudent_value',
    'field_sess_name_value' => 'field_sess_name_value',
    'field_semester_name_value' => 'field_semester_name_value',
    'field_gpaforstudent_value' => 'field_gpaforstudent_value',
    'field_cgpaforstudent_value' => 'field_cgpaforstudent_value',
  ),
  'info' => array(
    'field_course_code_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_course_title_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_credit_load_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_gradeforstudent_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_sess_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_semester_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_gpaforstudent_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_cgpaforstudent_value' => array(
      'sortable' => 0,
      'separator' => '',
    ),
  ),
  'default' => '-1',
));
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->override_option('path', 'studentgradedetails');
$handler->override_option('menu', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
