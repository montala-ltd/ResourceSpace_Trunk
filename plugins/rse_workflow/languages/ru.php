<?php


$lang["rse_workflow_configuration"]='Конфигурация рабочего процесса';
$lang["rse_workflow_summary"]='Этот плагин позволяет создавать дополнительные состояния архива (рабочего процесса), а также определять действия для описания перемещения между состояниями. <br><br>';
$lang["rse_workflow_user_info"]='Эти действия изменят статус рабочего процесса этого ресурса и могут вызвать действия для других пользователей.';
$lang["rse_workflow_actions_heading"]='Действия рабочего процесса';
$lang["rse_workflow_manage_workflow"]='Рабочий процесс (Workflow)';
$lang["rse_workflow_manage_actions"]='Действия рабочего процесса';
$lang["rse_workflow_manage_states"]='Состояния рабочего процесса';
$lang["rse_workflow_status_heading"]='Определенные действия';
$lang["rse_workflow_action_new"]='Создать новое действие';
$lang["rse_workflow_state_new"]='Создать новое состояние рабочего процесса';
$lang["rse_workflow_action_reference"]='Ссылка на действие (разрешение)';
$lang["rse_workflow_action_name"]='Название действия';
$lang["rse_workflow_action_filter"]='Фильтр действий, применимых к состоянию';
$lang["rse_workflow_action_text"]='Текст действия';
$lang["rse_workflow_button_text"]='Текст кнопки';
$lang["rse_workflow_new_action"]='Создать новое действие';
$lang["rse_workflow_action_status_from"]='Со статуса';
$lang["rse_workflow_action_status_to"]='Статус назначения';
$lang["rse_workflow_action_check_fields"]='Неверные параметры для действия рабочего процесса, пожалуйста, проверьте выбранные параметры';
$lang["rse_workflow_action_none_defined"]='Не определены действия рабочего процесса';
$lang["rse_workflow_action_edit_action"]='Редактировать действие';
$lang["rse_workflow_action_none_specified"]='Не указано никаких действий';
$lang["rse_workflow_action_deleted"]='Удалено действие';
$lang["rse_workflow_access"]='Доступ к действию рабочего процесса';
$lang["rse_workflow_saved"]='Ресурс успешно перемещен в состояние:';
$lang["rse_workflow_edit_state"]='Редактировать состояние рабочего процесса';
$lang["rse_workflow_state_reference"]='Ссылка на состояние рабочего процесса';
$lang["rse_workflow_state_name"]='Название состояния рабочего процесса';
$lang["rse_workflow_state_fixed"]='Исправлено в config.php';
$lang["rse_workflow_state_not_editable"]='Это состояние архива не может быть изменено, так как оно является обязательным системным состоянием, установлено в файле config.php или не существует';
$lang["rse_workflow_state_check_fields"]='Неверное имя или ссылка на состояние рабочего процесса, пожалуйста, проверьте ваши записи';
$lang["rse_workflow_state_deleted"]='Состояние рабочего процесса удалено';
$lang["rse_workflow_confirm_action_delete"]='Вы уверены, что хотите удалить это действие?';
$lang["rse_workflow_confirm_state_delete"]='Вы уверены, что хотите удалить этот этап рабочего процесса?';
$lang["rse_workflow_state_need_target"]='Пожалуйста, укажите ссылку на целевое состояние для любых существующих ресурсов в этом состоянии рабочего процесса';
$lang["rse_workflow_confirm_batch_wf_change"]='Подтвердить изменение состояния пакетного рабочего процесса';
$lang["rse_workflow_confirm_to_state"]='Следующее действие пакетно изменит все затронутые ресурсы и переместит их в состояние рабочего процесса \'%wf_name\'';
$lang["rse_workflow_err_invalid_action"]='Недопустимое действие';
$lang["rse_workflow_err_missing_wfstate"]='Отсутствует состояние рабочего процесса';
$lang["rse_workflow_affected_resources"]='Затронутые ресурсы: %count';
$lang["rse_workflow_confirm_resources_moved_to_state"]='Успешно перемещены все затронутые ресурсы в состояние рабочего процесса \'%wf_name\'.';
$lang["rse_workflow_state_notify_group"]='Когда ресурсы переходят в этот статус, уведомить группу пользователей:';
$lang["rse_workflow_state_notify_message"]='В рабочем процессе появились новые ресурсы';
$lang["rse_workflow_more_notes_label"]='Разрешить добавление дополнительных заметок при изменении рабочего процесса?';
$lang["rse_workflow_notify_user_label"]='Следует ли уведомить автора?';
$lang["rse_workflow_simple_search_label"]='Включить состояние рабочего процесса в стандартные поисковые запросы (некоторые специальные запросы могут игнорировать это)';
$lang["rse_workflow_link_open"]='Больше';
$lang["rse_workflow_link_close"]='Закрыть';
$lang["rse_workflow_more_notes_title"]='Примечания:';
$lang["rse_workflow_email_from"]='Адрес электронной почты для отправки уведомлений (будет использоваться %EMAILFROM%, если пусто):';
$lang["rse_workflow_bcc_admin"]='Уведомить администраторов системы, когда уведомлен внесший вклад пользователь';
$lang["rse_workflow_state_notify_help"]='Пользователи будут видеть ресурсы в этом состоянии как действия, а не просто получать уведомления';
$lang["rse_workflow_introduction"]='Чтобы изменить состояния и действия рабочего процесса, используйте \'Управление действиями рабочего процесса\' и \'Управление состояниями рабочего процесса\' в Админ. Нажмите [здесь], чтобы перейти в Админ';
$lang["plugin-rse_workflow-title"]='Расширенный рабочий процесс';
$lang["plugin-rse_workflow-desc"]='ResourceSpace Enterprise - Рабочий процесс';
$lang["rse_workflow_manage_workflow-tooltip"] = 'Создавать и управлять состояниями рабочего процесса';